<?php

namespace App\Http\Controllers;

use App\Http\Requests\adminAuthRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class adminAuthenticateController extends Controller
{

    public function authenticate(adminAuthRequest $request)
    {
        // dd($request->all());
        $request->authenticate();

        $request->session()->regenerate();

        if(auth()->user()->status){
            Session::flash('success', 'Login Successfully');
            return redirect()->intended(RouteServiceProvider::ADMIN);
        }else{
            Session::flash('warning', 'Your Account Is Right Now Inactive Please Contact Admin');
            return back();
        }
     }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        Session::flash('info', 'Logout');
        return redirect()->route('admin.login');
    }
}