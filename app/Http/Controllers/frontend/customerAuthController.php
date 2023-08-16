<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Services\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CustomerLoginRequest;

class customerAuthController extends Controller
{
    public function login()
    {
        return view('frontend.modules.customer.login');
    }
    public function register()
    {
        return view('frontend.modules.customer.register');
    }
    public function dashboard()
    {
        return view('frontend.modules.customer.dashboard');
    }
    public function store(Request $request)
    {
        $request->validate([
            "name" => 'required',
            "email" => 'required',
            "password" => 'required',
        ]);

        if($request->file('image')){
            $request->validate([
                "image" => "mimes:png,jpg,jpeg"
            ]);
        }

        if($request->file('image')){
          $customer =   Customer::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => bcrypt($request->password),
                "image" => File::upload($request->file('image'), 'customer'),
            ]);
        }else{
            $customer = Customer::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => bcrypt($request->password),
            ]);
        }

        if($customer){
            return redirect()->route('customer.login');
        }

    }

    public function authenticate(CustomerLoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        if(auth('customer')->user()->status){
            return redirect()->intended('/customer/dashboard');
        }else{
            session()->flash('warning',"Your account is inactive!");
            return back();
        }
    }

    public function logout(Request $request)
    {
        // dd($request->all());
        Auth::guard('customer')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('customer.login');
    }
}
