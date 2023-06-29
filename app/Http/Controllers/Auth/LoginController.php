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
        return view('auth.login', ['url' => route('admin.login-view'), 'title' => 'Admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('admin')->attempt($request->only(['email', 'password']), $request->get('remember'))) {
            return redirect('/admin/instructorDash');
        }

        return back()->withInput($request->only('email', 'remember'));
    }

    public function showUserLogin()
    {
        return view('userlogin');
    }

    public function userLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::guard('web')->attempt($request->only(['email', 'password']), true)) {
            return redirect('/');
        }


        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    public function userApiLogin()
    {
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
