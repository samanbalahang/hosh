<?php

namespace App\Http\Controllers;

use App\Models\BoxShop;
use Illuminate\Http\Request;

class BoxShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('mahboob/UsersAdmin/boxShop');
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
    public function show(BoxShop $boxShop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BoxShop $boxShop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BoxShop $boxShop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BoxShop $boxShop)
    {
        //
    }
}
