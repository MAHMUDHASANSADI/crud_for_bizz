<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        
        return view('product.index',['products'=>Product::get()]);
    }
    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'description' =>'required',
            'image' => 'required'
        ]);


        $productimage = time(). '.'.$request->image->extension();
        $request->image->move(public_path('productimg'),$productimage);

        $products = new Product;
         
        $products->image =  $productimage;
        $products->name =  $request->name;
        $products->description =  $request->description;
        $products->save();

        return redirect('/');
        // dd($request->all());


    }
    public function edit($id)
    {
        return view('product.edit',[
            'product'=>Product::find($id)
        ]);
    }
  
}
