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
            'name' => 'required|string|max:255|unique:categories,name',
            'status' => 'required|boolean',
            'category_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:512'
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->status = $request->status;

        $category->is_expert_category = $request->is_expert_category;

        if ($request->hasFile('category_image')) {

            $image = $request->file('category_image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads/category'), $imageName);

            $category->category_image = $imageName;
        }

        $category->save();

        return redirect()->route('category.index')
            ->with('success','Category added successfully');
    }


    public function edit($slug){
        $category = Category::where('slug', $slug)->firstOrFail();
        return view('backend.category.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
            'status' => 'required|boolean',
            'category_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:512'
        ]);

        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->status = $request->status;

        $category->is_expert_category = $request->is_expert_category;

        if ($request->hasFile('category_image')) {

            if ($category->category_image && file_exists(public_path('uploads/category/'.$category->category_image))) {
                unlink(public_path('uploads/category/'.$category->category_image));
            }

            $image = $request->file('category_image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads/category'), $imageName);

            $category->category_image = $imageName;
        }

        $category->save();

        return redirect()->route('category.index')
            ->with('success','Category updated successfully');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index')
            ->with('success', 'Category deleted successfully');
    }
}
