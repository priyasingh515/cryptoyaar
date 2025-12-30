<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;
use Illuminate\Support\Str;

class PermissionController extends Controller
{
   
    public function index(){
        $permisions = Permission::latest()->get();
        return view('backend.permission.index',compact('permisions'));
    }

    public function create(){
        return view('backend.permission.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'module' => 'required|string|max:255',
        ]);

        Permission::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'module' => $request->module,
            'is_active' => 1,
        ]);

        return redirect()->back()
            ->with('success', 'Permission created successfully');
    }


    public function toggleStatus(Permission $permission)
    {
        $permission->update([
            'is_active' => !$permission->is_active
        ]);

        return redirect()->back()
            ->with('success', 'Permission status updated');
    }
    
}
