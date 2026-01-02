<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PlanModel;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function create()
    {
        return view('backend.plans.addplan');
    }
     public function store(Request $request)
    {
        
        $request->validate([
            'plan_name'  => 'required|string|max:255',
            'validity'   => 'required|integer|min:1',
            'price'      => 'required|numeric|min:0',
            'benefits.*' => 'nullable|string|max:255',
        ]);

    
        $benefits = array_values(
            array_filter($request->benefits ?? [])
        );

    
        PlanModel::create([
            'plan_name' => $request->plan_name,
            'validity'  => $request->validity,
            'price'     => $request->price,
            'benefits'  => $benefits, 
        
        ]);

        
        return redirect()
            ->route('plan.create')
            ->with('success', 'Plan created successfully');
    }

    public function index(){
        $plans = PlanModel::latest()->get();
        return view('backend.plans.index', compact('plans'));
    }

    public function edit ($id){
        $plan = PlanModel::findorfail($id);
        return view('backend.plans.edit' ,compact('plan'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'plan_name'  => 'required|string|max:255',
        'validity'   => 'required|integer|min:1',
        'price'      => 'required|numeric|min:0',
        'benefits.*' => 'nullable|string|max:255',
    ]);

    $plan = PlanModel::findOrFail($id);

    $benefits = array_values(
        array_filter($request->benefits ?? [])
    );

    $plan->update([
        'plan_name' => $request->plan_name,
        'validity'  => $request->validity,
        'price'     => $request->price,
        'benefits'  => $benefits,

        // ✅ STATUS HANDLING
        'status' => $request->has('status') ? 'active' : 'inactive',
    ]);

    return redirect()
        ->route('plan.index')
        ->with('success', 'Plan updated successfully');
}

public function destroy($id)
{
    $plan = PlanModel::findOrFail($id);
    $plan->delete();

    return redirect()
        ->route('plan.index')
        ->with('success', 'Plan deleted successfully');
}

}
