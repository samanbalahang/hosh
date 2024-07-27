<?php

namespace App\Http\Controllers;

use App\Models\comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role =   AdminCheck::checkAdmin();
        switch ($role) {
            case 'admin':
                    $comments = new Comments();
                    $comments = $comments::all();
                    return view('admin/comments', compact('comments'));
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
        //
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
   
        return view('admin/CommentAnsers');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $comments = new comments;
        $comments["name"]           = $request["name"];
        $comments["email"]          =$request["email"];
        $comments["discription"]    =$request["comment"];
        if($comments->save()){
            return redirect()->route("MyCommets.index");
        }
        

        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        // dd("show");
        $comments = new comments;
        $theComment = $comments::find($id);
        $id = $id;
        // dd($theComment->name);
        return view('admin/CommentAnsers' , compact('id','theComment'));
        // return view('admin/CommentAnsers');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comments $comments)
    {
        //
        dd("edit");
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, comments $comments)
    {
        dd("update");
        //
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(comments $comments)
    {
        //
    }
}
