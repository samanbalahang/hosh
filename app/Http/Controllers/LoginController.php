<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('mahboob/login/login');
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
        // $request["password"] = bcrypt($request["password"]);
        $credentials =  $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // dd($credentials);
        $log = new User;

        $thisuser = $log->where("email", $request->email)->first();
        if ($log == null) {
            $interedPass = $request->password;
            $email = $thisuser->email;
            $password = $thisuser->email;
            $active = $thisuser->active;
            $userpass = $thisuser->password;
            if (Hash::check($interedPass, $userpass) && $active == 1) {
                Auth::login($thisuser);
                Auth::attempt(['email' => $email, 'password' => $password, "active" =>  $active]);
                foreach ($thisuser->roles as $role) {
                    // dd($role->name);
                    if ($role->name == "admin") {
                        return redirect()->route('admin.index');
                    }
                    if ($role->name == "user") {
                        return redirect()->route('dashbord.index');
                    }
                }
            }
        }else{
            return redirect()->route('register.index');
        }
      }

    /**
     * Display the specified resource.
     */
    public function show(login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(login $login)
    {
        //
    }
}
