<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    //

    public function index(){
        $roles = Role::latest()->get();
        return view('backend.role.index',compact('roles'));
    }

    public function create(){
        return view('backend.role.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name'
        ]);

        Role::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'is_active' => 1
        ]);

        return redirect()->route('roles.index')
            ->with('success', 'Role created successfully');
    }

    public function edit($id){
        $role = Role::findOrFail($id);
        return view('backend.role.edit',compact('role'));
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name,' . $role->id
        ]);

        $role->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'is_active' => $request->is_active ?? 1
        ]);

        return redirect()->route('roles.index')
            ->with('success', 'Role updated successfully');
    }


    public function permissionForm(Role $role)
    {
        
        $permissions = Permission::where('is_active', 1)
            ->orderBy('module')
            ->get()
            ->groupBy('module');

        $assignedPermissions = $role->permissions
            ->pluck('id')
            ->toArray();

        return view(
            'backend.role.assign_role',
            compact('role', 'permissions', 'assignedPermissions')
        );
    }

    public function savePermissions(Request $request, Role $role)
    {
        $request->validate([
            'permissions' => 'nullable|array'
        ]);

        $role->permissions()->sync($request->permissions);

        return redirect()
            ->route('roles.index')
            ->with('success', 'Permissions assigned successfully');
    }
    
}
