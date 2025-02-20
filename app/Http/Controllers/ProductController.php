<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    function __construct(){
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
        $this->middleware('permission:product-create', ['only' => ['create','store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }

    public function index(){
        $data = Product::latest()->where('status', 1)->get();
        return view('products.index',compact('data'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $data = $request->all();
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $store_path = "upload/products";
            $name = md5(uniqid(rand(), true)) . str_replace(' ', '-', $image->getClientOriginalName());
            $image->move(public_path('/' . $store_path), $name);
            $data['image'] = $store_path . '/' . $name;
        }
        Product::create($data);
        return redirect()->route('products.index')->with('success','Product created successfully.');
    }

    public function show($id){
        $data = Product::find($id);
        return view('products.show',compact('data'));
    }

    public function edit($id){
        $data = Product::find($id);
        return view('products.edit',compact('data'));
    }

    public function update(Request $request, Product $product){
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $store_path = "upload/products";
            $name = md5(uniqid(rand(), true)) . str_replace(' ', '-', $image->getClientOriginalName());
            $image->move(public_path('/' . $store_path), $name);
            $exist_image = $product->image;
            $data['image'] = $store_path . '/' . $name;
        }

        $product->update($data);
        return redirect()->route('products.index')->with('success','Product updated successfully');
    }

    public function destroy($id){
        $data = Product::find($id);
        $data->status = 0;
        $data->save();
        return redirect()->route('products.index')->with('success','Product deleted successfully');
    }
}
