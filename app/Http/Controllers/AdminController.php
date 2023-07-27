<?php

namespace App\Http\Controllers;

use App\Http\Requests\adminAuthRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::latest()->get();
        return view('backend.admin.modules.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.modules.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(adminAuthRequest $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|unique:admins,email',
            'password' => 'required',
            'role' => 'required',
        ]);


        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);



        if($admin){
            Session::flash('success', 'Data inserted successfully.');
            return redirect()->route('admin.index');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {

        return view('backend.admin.modules.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        return view('backend.admin.modules.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => "required|unique:admins,email,$admin->id",
            'role' => 'required',
            'status' => 'required',
        ]);


        $admin = $admin->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'status' => $request->status,
        ]);

        if($admin){
            Session::flash('info', 'Data Updated successfully.');
            return redirect()->route('admin.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();
        Session::flash('error', 'Data Deleted successfully.');
        return redirect()->route('admin.index');

    }


}