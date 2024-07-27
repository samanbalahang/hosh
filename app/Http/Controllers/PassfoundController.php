<?php

namespace App\Http\Controllers;

use App\Models\passfound;
use Illuminate\Http\Request;

class PassfoundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('mahboob/login/passfound');
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
    public function show(passfound $passfound)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(passfound $passfound)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, passfound $passfound)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(passfound $passfound)
    {
        //
    }
}
