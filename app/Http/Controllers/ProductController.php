<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Controllers\HelperController;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role =   AdminCheck::checkAdmin();
        switch ($role) {
            case 'admin':
                $products = new product;
                    if($products::exists()){
                        $allProducts = $products->all();
                        return view('admin/allproduct',compact("allProducts"));
                    }else{
                    return view('admin/allproduct');
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
        
        return view('admin/product');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd("fssssss");
        $products = new product;
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
        $products["name"]       = $request["name"];
        $products["price"]      =$request["price"];
        $products["content"]    =$request["content"];
        $products["propic"]     =$DatamainImg ;
        if($products->save()){
            return redirect()->route('product.index',array("message"=>"ثبت شد"));
        }
        // if($products::create($request->all())){
        //     return redirect()->route('product.index',array("message"=>"ثبت شد"));
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
        
        // dd($product->id);
        $pro = new product;
        $pro->find($product->id)->delete();
        return redirect()->route('product.index',array("message"=>"حذف شد"));
    }
}
