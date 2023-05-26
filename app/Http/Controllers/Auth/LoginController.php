<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }

    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => route('admin.login-view'), 'title'=>'Admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('admin')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect('/admin/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'));
    }  

    public function showUserLogin(){
        return view('userlogin');
    }

    public function userLogin()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        
/*
        $data = array(
            'username' => $email,
            'password' => $password
        );

        $payload = json_encode($data);

        // Set the endpoint URL
        $url = 'https://api.example.com/login';

        // Initialize cURL session
        $ch = curl_init($url);

        // Set the request method to POST
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

        // Set the request headers
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($payload)
        ));

        // Set the request payload
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        // Set the option to receive the response as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the request
        $response = curl_exec($ch);

        // Check for errors
        if ($response === false) {
            $error = curl_error($ch);
            curl_close($ch);
            return "cURL Error: " . $error;
        }

        // Close the cURL session
        curl_close($ch);

        // Process the response
        $responseData = json_decode($response, true);

        // Return the response data
        return $responseData;*/

         if (auth()->attempt($attributes)){
             session()->regenerate();
            
             return redirect('/');
         }
         throw ValidationException::withMessages([
            'email' => 'Your provided credentials not verified.'
        ]);
        
    }

    public function userApiLogin(){
         // Process the response data
        $responseData = json_decode($response, true);

        // Check if the login was successful
        if (isset($responseData['success']) && $responseData['success']) {
            // Login successful
            $token = $responseData['token'];
            // Do something with the token (e.g., store it in a session)
            session()->regenerate();

            // Redirect to the home page or any other desired location
            return redirect('/');
        } else {
            // Login failed
            $error = isset($responseData['message']) ? $responseData['message'] : 'Login failed';

            // Display the error message or handle it as needed
            return redirect('/')->with('error', $error);
        }
    }
}
