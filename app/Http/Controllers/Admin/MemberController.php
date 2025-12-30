<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    //
    public function index(){
        $members = Admin::with('role')->where('role_id', '!=', 1)->latest() ->get();
        return view('backend.member.index',compact('members'));
    }

    public function create(){
        $roles = Role::where('is_active', 1)->get();
        return view('backend.member.create',compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|min:6',
            'role_id' => 'required|exists:roles,id',
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
            'is_active' => 1,
        ]);

        return redirect()->route('members.index')
            ->with('success', 'Member created successfully');
    }

    public function edit($id){
        $roles = Role::where('is_active', 1)->get();
        $member = Admin::findOrFail($id);
        return view('backend.member.edit',compact('member','roles'));
    }

    public function update(Request $request, Admin $member)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . $member->id,
            'role_id' => 'required|exists:roles,id',
            'password' => 'nullable|min:6',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
        ];

        // password sirf tab update ho jab bhara ho
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $member->update($data);

        return redirect()->route('members.index')
            ->with('success', 'Member updated successfully');
    }

    public function destroy(Admin $member)
    {
        // Super Admin ko delete na hone do (optional safety)
        if ($member->role->slug === 'super-admin') {
            return back()->with('error', 'Super Admin cannot be deleted');
        }

        $member->update([
            'is_active' => 0
        ]);

        return redirect()->route('members.index')
            ->with('success', 'Member deactivated successfully');
    }
}
