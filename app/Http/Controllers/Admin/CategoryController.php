<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;

class CategoryController extends Controller
{
    //

    public function index(){
        $categories = Category::latest()->get();
        return view('backend.category.index',compact('categories'));
    }
    
    public function create(){
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|string|max:255|unique:categories,name',
            'status' => 'required|boolean',
            'order'  => 'nullable|integer',
        ]);

        $category = new Category();
        $category->name   = $request->name;
        $category->slug   = Str::slug($request->name);
        $category->status = $request->status;
        $category->order  = $request->order ?? 0;
        $category->save();

        return redirect()->route('category.index')
            ->with('success', 'Category added successfully');
    }

    public function edit($slug){
        $category = Category::where('slug', $slug)->firstOrFail();
        return view('backend.category.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name'   => 'required|string|max:255|unique:categories,name,' . $category->id,
            'status' => 'required|boolean',
            'order'  => 'nullable|integer',
        ]);

        $category->name   = $request->name;
        $category->slug   = Str::slug($request->name);
        $category->status = $request->status;
        $category->order  = $request->order ?? 0;
        $category->save();

        return redirect()->route('category.index')
            ->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index')
            ->with('success', 'Category deleted successfully');
    }
}
