<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\PlanModel;
use App\Models\VideoModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        $videos = VideoModel::latest()->get();
        return view('backend.video.index', compact('videos'));
    }

    public function create()
    {
        $categories = Category::where('status', 1)->orderBy('order')->get();
        $plans = PlanModel::where('status', 'active')->get();

        return view('backend.video.addvideo', compact('categories', 'plans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'video'       => 'required|mimes:mp4,mkv,avi,webm|max:512000',
            'thumbnail'   => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'is_free'     => 'required|boolean',
            'plan_id'     => 'required_if:is_free,0|nullable|exists:plans,id',
        ]);

        $videoPath = $request->file('video')->store('videos', 'public');
        
        $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');


        VideoModel::create([
            'title'       => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'plan_id'     => $request->is_free ? null : $request->plan_id,
            'thumbnail' => $thumbnailPath,
            'video_path'  => $videoPath,
            'is_free'     => $request->is_free,
            'status'      => 1,
            'views'       => 0,
        ]);

        return redirect()->route('admin.videos.index')->with('success', 'Video added successfully');
    }

    public function edit($id)
    {
        $video = VideoModel::findOrFail($id);
        $categories = Category::where('status', 1)->orderBy('order')->get();
        $plans = PlanModel::where('status', 'active')->get();

        return view('backend.video.edit', compact('video', 'categories', 'plans'));
    }

    public function update(Request $request, $id)
    {
        $video = VideoModel::findOrFail($id);

        $request->validate([
            'title'       => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'video'       => 'nullable|mimes:mp4,mkv,avi,webm|max:512000',
            'thumbnail'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'is_free'     => 'required|boolean',
            'plan_id'     => 'nullable|exists:plans,id',
        ]);

        if ($request->hasFile('video')) {
            if ($video->video_path && Storage::disk('public')->exists($video->video_path)) {
                Storage::disk('public')->delete($video->video_path);
            }
            $video->video_path = $request->file('video')->store('videos', 'public');
        }

        if ($request->hasFile('thumbnail')) {
            if ($video->thumbnail && Storage::disk('public')->exists($video->thumbnail)) {
                Storage::disk('public')->delete($video->thumbnail);
            }

            $video->thumbnail = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $video->update([
            'title'       => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'plan_id'     => $request->is_free ? null : $request->plan_id,
            'is_free'     => $request->is_free,
            'status'      => $request->status,
        ]);

        return redirect()->route('admin.videos.index')->with('success', 'Video updated successfully');
    }

    public function destroy($id)
    {
        $video = VideoModel::findOrFail($id);

        if ($video->video_path && Storage::disk('public')->exists($video->video_path)) {
            Storage::disk('public')->delete($video->video_path);
        }

        $video->delete();

        return redirect()->route('admin.videos.index')->with('success', 'Video deleted successfully');
    }
}
