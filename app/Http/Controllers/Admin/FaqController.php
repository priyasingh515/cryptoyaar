<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    public function index(){
        $faqData = Faq::latest()->get();
        return view('backend.faq.index',compact('faqData'));
    }

    public function create(){
        return view('backend.faq.create');
    }

    public function store(Request $request)
    {
        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer
        ]);

        return redirect()->route('faq.index');
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        return view('backend.faq.edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $faq = Faq::findOrFail($id);

        $faq->update([
            'question' => $request->question,
            'answer' => $request->answer
        ]);

        return redirect()->route('faq.index')->with('success','FAQ Updated Successfully');
    }

    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return redirect()->route('faq.index')
            ->with('success', 'Faq deleted successfully');
    }
}
