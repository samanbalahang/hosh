<?php

namespace App\Http\Controllers;

use App\Models\register;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('mahboob/login/register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $thisuser = new User;
        $therole  = new Role;
        $hashedPassword = Hash::make($request->password);
        if($thisuser::exists()){
            $thisuser->email        = $request->email;
            $thisuser->number       = $request->number;
            $thisuser->password     = $hashedPassword;
            $thisuser->active       = 1;
            $thisuser->save();
            $thisrole = $therole->find(2);
            $thisuser->attach($thisrole);
        }else{
            $thisuser->email        = $request->email;
            $thisuser->number       = $request->number;
            $thisuser->active       = 1;
            $thisuser->password     = $hashedPassword;
            $thisuser->save();
            $therole->name          = "admin";
            $therole->description   = "admin";
            $therole->save();
            $thisuser->attach($therole);
            $therole  = new Role;
            $therole->name          = "user";
            $therole->description   = "user";
            if($therole->save()){
                Auth::attempt(["email"=> $thisuser->email ,"password" =>$request->password]);
                $request->session()->regenerate();
                return redirect()->route("admin.index")->withSuccess('You have successfully registered & logged in!');
            }
 
            // Auth::attempt(['username' => $request->username, 'password' => $thisuser->pass, 'active' => $thisuser->active]);
        }
       
       
    }

    /**
     * Display the specified resource.
     */
    public function show(register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(register $register)
    {
        //
    }
}
