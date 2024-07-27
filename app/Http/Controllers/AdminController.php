<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\error;

class AdminController extends Controller
{
    public function index()
    {
        $role = AdminCheck::checkAdmin();
        switch ($role) {
            case 'admin':
                  return view('admin.index');
                break;
            case 'user':
                 return redirect()->route('dashbord.index');
                break;
            case 'notAuth':
                    return redirect()->route("login.index");
                break;
            default:
                    return redirect()->route("register.index");
                break;
        }
      
        // AdminCheck::checkAdmin();
        // if(Auth::check()){
        //     $user = Auth::user();
        //     $roles =$user->roles()->orderBy('name')->get();
        //     foreach ($roles as $key => $value) {
        //         if($value->name == 'admin'){
        //             return view('admin/index');
        //         }else if($value->name == 'user'){
        //             return redirect()->route('dashbord.index');
        //         }
        //     }         
        // }else{
        //    return abort('403');
        // }
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
    }

    /**
     * Display the specified resource.
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admin $admin)
    {
        //
    }
}
