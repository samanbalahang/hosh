<?php

namespace App\Http\Controllers;

use App\Models\MyOrders;
use Illuminate\Http\Request;

class MyOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('mahboob/UsersAdmin/dashbordOrders');
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
    public function show(MyOrders $myOrders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MyOrders $myOrders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MyOrders $myOrders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MyOrders $myOrders)
    {
        //
    }
}
