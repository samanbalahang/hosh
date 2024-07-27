<?php

namespace App\Http\Controllers;

use App\Models\MyCommets;
use App\Models\comments;
use Illuminate\Http\Request;

class MyCommetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('mahboob/UsersAdmin/dashbordCommets');
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
        $comment = new MyCommets();
        $comment["comment_id"] = $request->comment_id;
        $comment["discription"] = $request->content;
        if($comment->save()){
            return redirect()->route("comments.index");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(MyCommets $myCommets)
    {
        //
        // dd('hi');
        $coms = new comments;
        $mycoms = new MyCommets;
        $coms = $coms::all();
        $mycoms =   $mycoms::all();
        return view("mahboob.UsersAdmin.ansers",compact("coms","mycoms"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MyCommets $myCommets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MyCommets $myCommets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MyCommets $myCommets)
    {
        //
    }
}
