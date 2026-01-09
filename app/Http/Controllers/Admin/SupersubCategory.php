<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SupCategory;
use App\Models\supSubCategory;
use Illuminate\Support\Str;

class SupersubCategory extends Controller
{
    //

    public function index(){
        $superSubCategories = SupSubCategory::with('subCategory.category')
            ->latest()
            ->get();
        return view('backend.supercategory.index',compact('superSubCategories'));
    }
    
    public function create(){
        $subCategories = SupCategory::where('status',1)->get();
        return view('backend.supercategory.create',compact('subCategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sub_category_id' => 'required|exists:sub_categories,id',
            'name' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        supSubCategory::create([
            'sub_category_id' => $request->sub_category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status,
            'order' => $request->order ?? 0,
        ]);

        return redirect()->route('supersubcategory.index')
            ->with('success','Super Sub Category added successfully');
    }

    public function edit($slug)
    {
        $superSubCategory = SupSubCategory::where('slug', $slug)->firstOrFail();
        $subCategories = SupCategory::where('status',1)->get();

        return view('backend.supercategory.edit',compact('superSubCategory','subCategories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'sub_category_id' => 'required|exists:sub_categories,id',
            'name' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        $superSubCategory = SupSubCategory::findOrFail($id);

        $superSubCategory->update([
            'sub_category_id' => $request->sub_category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status,
            'order' => $request->order ?? 0,
        ]);

        return redirect()->route('supersubcategory.index')
            ->with('success','Super Sub Category updated successfully');
    }

    public function destroy($id)
    {
        $category = SupSubCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('supersubcategory.index')
            ->with('success', 'Super Sub Category deleted successfully');
    }


}
