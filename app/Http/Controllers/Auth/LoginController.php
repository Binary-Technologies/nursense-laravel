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
            'password' => 'required|min:6'
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

        if (auth()->attempt($attributes)){
            session()->regenerate();
            
            return redirect('/');
        }
        throw ValidationException::withMessages([
        'email' => 'Your provided credentials not verified.'
    ]);
        
    }

    public function userApiLogin(){
        define('NAVER_CLIENT_ID', '내어플리케이션 > 어플리케이션 정보 > Client ID');
        define('NAVER_CLIENT_SECRET', '내어플리케이션 > 어플리케이션 정보 > Client Secret'); 
        define('NAVER_CALLBACK_URL', 'http://test_lee.co.kr/callback.php');
    
        $naver_curl = "https://nid.naver.com/oauth2.0/token?grant_type=authorization_code&client_id=".NAVER_CLIENT_ID."&client_secret=".NAVER_CLIENT_SECRET."&redirect_uri=".urlencode(NAVER_CALLBACK_URL)."&code=".$_GET['code'];
        $is_post = false; 
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $naver_curl); 
        curl_setopt($ch, CURLOPT_POST, $is_post); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        $response = curl_exec ($ch); 
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
        curl_close ($ch); 
        if($status_code == 200){ 
            $responseArr = json_decode($response, true); 
            
        // 토큰값으로 네이버 회원정보 가져오기 
            $headers = array( 'Content-Type: application/json', sprintf('Authorization: Bearer %s', $responseArr['access_token']) ); 
            $is_post = false; 
            $me_ch = curl_init(); 
            curl_setopt($me_ch, CURLOPT_URL, "https://openapi.naver.com/v1/nid/me"); 
            curl_setopt($me_ch, CURLOPT_POST, $is_post ); 
            curl_setopt($me_ch, CURLOPT_HTTPHEADER, $headers); 
            curl_setopt($me_ch, CURLOPT_RETURNTRANSFER, true); 
            $res = curl_exec ($me_ch); 
            curl_close ($me_ch); 
            $res_data = json_decode($res , true); 
            
            if ($res_data ['response']['id']) { 
            // 해당 아이디값을 정상적으로 가져온다면 디비에 해당 아이디로 회원가입 여부 확인 하여 회원 가입을 하였으면 자동 로그인 구현.;
            }
        }
    }
}
