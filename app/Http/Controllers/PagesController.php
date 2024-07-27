<?php

namespace App\Http\Controllers;

use App\Models\pages;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $role =   AdminCheck::checkAdmin();
        switch ($role) {
            case 'admin':
                     return view('admin.pages');
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin/pagemaker');
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
    public function show(pages $pages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pages $pages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pages $pages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pages $pages)
    {
        //
    }
}
