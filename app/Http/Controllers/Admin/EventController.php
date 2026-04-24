<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    //
    public function index(){
        $events = Event::latest()->get();
        return view('backend.events.index',compact('events'));
    }

    public function create(){
        return view('backend.events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'event_date' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg'
        ]);

        

        $eventDate = Carbon::parse($request->event_date)->format('Y-m-d H:i:s');

        $imageName = null;

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();

            $image->move(public_path('events'), $imageName);
        }

        Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'event_date' => $eventDate,
            'image' => $imageName
        ]);

        return redirect()->route('event.index')->with('success', 'Event Added');
    }

    public function edit($id){
        $events = Event::findOrFail($id);
        return view('backend.events.edit',compact('events'));
    }

    public function update(Request $request,$id)
    {
        $event = Event::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'event_date' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:512'
        ]);

        $image = $event->image;

        if($request->hasFile('image')){

            if($event->image && file_exists(public_path('events/'.$event->image))){
                unlink(public_path('events/'.$event->image));
            }

            $file = $request->file('image');
            $image = time().'.'.$file->getClientOriginalExtension();

            $file->move(public_path('events'),$image);
        }

        $event->update([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'event_date' => $request->event_date,
            'image' => $image
        ]);

        return redirect()->route('event.index')->with('success','Event Updated Successfully');
    }

    public function destroy($id)
    {
        $events = Event::findOrFail($id);
        $events->delete();

        return redirect()->route('event.index')
            ->with('success', 'Event deleted successfully');
    }
}
