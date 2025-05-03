<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('products.index',['products'=>$products,'categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.index',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->only(['name','slug','number','category_id','price']));
        return redirect()->to('products');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $product = Product::where('slug',$slug)->first();
        return view('products.show',['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $product = Product::where('slug',$slug)->first();
        $categories = Category::all();
        return view('products.edit',['product' => $product, 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        Product::where('slug',$slug)->first()->update($request->only(['name','slug','number','category_id','price']));
        return redirect()->to('products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        Product::where('slug',$slug)->first()->delete();
        return redirect()->to('products');
    }
}
