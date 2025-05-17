<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index',['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::create($request->only(['name','slug']));
        return redirect()->to('/categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $category = Category::where('slug',$slug)->first();
        return view('categories.show',['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $category = Category::where('slug',$slug)->first();
        return view('categories.edit',['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $category = Category::where('slug',$slug)->first();
        $category->update($request->only(['name','slug']));
        return redirect()->to('/categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        Category::where('slug',$slug)->first()->delete();
        return redirect()->to('/categories');
    }
}
