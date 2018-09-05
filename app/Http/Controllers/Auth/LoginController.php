<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $url = config('api.url').'/login';
        \Log::info($url);
        $response = Curl::to($url)
        ->withData($request->toArray())
        ->post();
        $response = json_decode($response);
        if ($response->status == 200) {
            \Log::info($response->status);
        }
        // return $response;
    }
}
