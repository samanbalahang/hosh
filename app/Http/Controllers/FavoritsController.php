<?php

namespace App\Http\Controllers;

use App\Models\favorits;
use Illuminate\Http\Request;

class FavoritsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('mahboob/UsersAdmin/dachbordFavorits');
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
    public function show(favorits $favorits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(favorits $favorits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, favorits $favorits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(favorits $favorits)
    {
        //
    }
}
