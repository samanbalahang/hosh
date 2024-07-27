<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AdminCheck extends Controller{
    public static function checkAdmin(){
        if(Auth::check()){
            $user = Auth::user();
            $roles =$user->roles()->orderBy('name')->get();
            foreach ($roles as $key => $value) {
                if($value->name == 'admin'){
                    return "admin";
                }else if($value->name == 'user'){
                    return "user";
                }
            }         
        }else{
           return "notAuth";
        }
    }
}
