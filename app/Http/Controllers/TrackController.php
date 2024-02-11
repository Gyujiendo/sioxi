<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tracks;

class TrackController extends Controller
{
    public function read()
    {
        $tracks = Tracks::all();
        return view('tracklist', compact('tracks'));
    }

    /* Might be confusing, but i created "edit" and "update" separately to make a more user friendly UI, but just for the best info possible: 
    "edit" is just a redirect to the editing view page and "update" is the one that handles the update request to the DB */

    public function edit($id)
    {
        $track = Tracks::findOrFail($id);
        return view('edit_track', compact('track'));
    }

    public function update(Request $request, $id)
    {
    // Validate the form data
    $request->validate([
        'title' => 'required|string|max:255',
        'debut_date' => 'required|date',
        'lyrics' => 'required|string',
        'yt_link' => 'required|url',
        // Add any other validation rules for your fields
    ]);

    // Find the track by ID
    $track = Tracks::findOrFail($id);

    // Update track information based on the form data
    $track->update([
        'title' => $request->input('title'),
        'debut_date' => $request->input('debut_date'),
        'lyrics' => $request->input('lyrics'),
        'yt_link' => $request->input('yt_link'),
        // Update with other fields as needed
    ]);

    // Redirect or respond as needed
    return redirect('/tracklist')->with('success', 'Track updated successfully!');

    }

    public function update_pic(Request $request, $id)
{
    // Validate the form data
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $track = Tracks::findOrFail($id);

    $saveimage = $request->file('image')->store('public/images');
    $imagePath = str_replace('public/', '', $saveimage);

    // Update track information based on the form data
    $track->update([
        'img_path' => $imagePath,
    ]);

    // Redirect to /tracklist
    return redirect('/tracklist')->with('success', 'Image updated successfully');
}

    public function create(Request $request)
    {
        // Validate the form data, including the image file
        $request->validate([
            'title' => 'required|string|max:255',
            'debut_date' => 'required|date',
            'lyrics' => 'required|string',
            'yt_link' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $saveimage = $request->file('image')->store('public/images'); //store the img in the project's folder
        $imagePath = str_replace('public/', '', $saveimage); // uses the saveimage path for reference and remove the public/ prefix to not bug the pathing

        // Create a new track with the file path
        Tracks::create([
            'title' => $request->title,
            'debut_date' => $request->debut_date,
            'lyrics' => $request->lyrics,
            'yt_link' => $request->yt_link,
            'img_path' => $imagePath,
        ]);

        // Redirect or respond as needed
        return redirect()->back()->with('success', 'Track created successfully!');
    }


    public function delete($id)
    {
        $track = Tracks::findOrFail($id);
        $track->delete();

        return redirect()->back()->with('success', 'Track deleted successfully');
    }

}
