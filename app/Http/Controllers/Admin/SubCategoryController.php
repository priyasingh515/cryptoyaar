<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SupCategory;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    
    public function index(){
        $subCategories = SupCategory::with('category')->latest()->get();
        return view('backend.subcategory.index', compact('subCategories'));
    }

    public function create(){
        $categories = Category::where('status', 1)->get();
        return view('backend.subcategory.create', compact('categories'));
    }

  

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        SupCategory::create([
            'category_id' => $request->category_id,
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'status'      => $request->status,
            'order'       => $request->order ?? 0,
        ]);

        return redirect()->route('subcategory.index')
            ->with('success', 'Sub Category added successfully');
    }


    public function edit($slug)
    {
        $subCategory = SupCategory::where('slug', $slug)->firstOrFail();
        $categories  = Category::where('status',1)->get();

        return view('backend.subcategory.edit',compact('subCategory','categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name'        => 'required|string|max:255',
            'status'      => 'required|boolean',
        ]);

        $subCategory = SupCategory::findOrFail($id);

        $subCategory->update([
            'category_id' => $request->category_id,
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'status'      => $request->status,
        ]);

        return redirect()->route('subcategory.index')
            ->with('success','Sub Category updated successfully');
    }
    public function destroy($id)
    {
        $category = SupCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('subcategory.index')
            ->with('success', 'Sub Category deleted successfully');
    }
}
