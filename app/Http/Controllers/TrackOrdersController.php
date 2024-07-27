<?php

namespace App\Http\Controllers;

use App\Models\TrackOrders;
use Illuminate\Http\Request;

class TrackOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('mahboob/trackorders');

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
    public function show(TrackOrders $trackOrders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TrackOrders $trackOrders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TrackOrders $trackOrders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TrackOrders $trackOrders)
    {
        //
    }
}
