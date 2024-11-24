<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Providers\AppServiceProvider;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        $page_data['seo'] = seo();
        return view('auth.login', $page_data);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $input = $request->all();

        // print_r($request->all());
        // die();
        $recaptcha_secret = "6LdAAcInAAAAALjRCRULi4EMF-0wiRFGRYqbU3x5";

        // $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$input['g-recaptcha-response']);

        // $response = json_decode($response, true);

        // if($response['success'] === true){

            $request->authenticate();

            $request->session()->regenerate();

            if(auth()->user()->role_id == 1) {
                session(['login' => 'superadmin']);
                return redirect()->intended(AppServiceProvider::HOME);
            } else {
                session(['login' =>'customer']);
                return redirect()->intended(AppServiceProvider::HOME_TWO);
            }
        // } else {
            return redirect('/login')->with('error', 'You have to provide captcha');
        // }

        // $request->authenticate();

        // $request->session()->regenerate();

        // return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
