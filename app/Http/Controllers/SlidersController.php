<?php

namespace App\Http\Controllers;

use App\Models\sliders;
use Illuminate\Http\Request;
use App\Http\Controllers\HelperController;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role =   AdminCheck::checkAdmin();
        switch ($role) {
            case 'admin':
                $sliders = new sliders;
                if($sliders::exists()){
                    $ALLslider = $sliders->all();
                    return view('admin.ALLslider',compact("ALLslider"));
                }else{
                    return view('admin.ALLslider');
                }
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
        return view('admin/sliders');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $sliders = new sliders;
        $helper      = new HelperController;
        $address     ="uploads/products/";
        if($request->file('propic') != null){
            $mainImg     = $request->file('propic');
            $extension   = $mainImg->getClientOriginalExtension();
            $filename    = $helper->imagefilename().'.'.$extension;
            $mainImg->move($address, $filename);
            $DatamainImg     = $address.$filename;
        }else{
            $mainImg     = "";
        }
        $sliders["name"]    = $request["name"];
        $sliders["price"]   =$request["price"];
        $sliders["adress"]  =$request["adress"];
        $sliders["propic"]  =$DatamainImg;
        if($sliders->save()){
            return redirect()->route('sliders.index',array("message"=>"ثبت شد"));
        }
        // if($sliders::create($request->all())){
        //     return redirect()->route('sliders.index',array("message"=>"ثبت شد"));
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(sliders $sliders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sliders $sliders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sliders $sliders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // dd($id);
        // dd($sliders->id);
        $slide = new sliders;
        $slide->find($id)->delete();
        return redirect()->route('product.index',array("message"=>"حذف شد"));
    }
}
