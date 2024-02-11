<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Live;
use App\Models\Media;

class LiveController extends Controller
{
    public function read()
    {
        $lives = Live::all();
        $medias = Media::all();
        return view('live', compact('lives', 'medias'));
    }

    public function edit($id)
    {
        $live = Live::findOrFail($id);
        return view('edit_live', compact('live'));
    }

    public function delete_pic($id)
    {
        $live = Live::findOrFail($id);
        return view('delete_live_pics', compact('live'));
    }

    public function update(Request $request, $id)
    {
    // Validate the form data
    $request->validate([
        'location' => 'required|string|max:255',
        'live_date' => 'required|date',
        'songs_played' => 'required|string',
        'description' => 'required|string',
        
        // Add any other validation rules for your fields
    ]);

    // Find the track by ID
    $live = Live::findOrFail($id);

    // Update track information based on the form data
    $live->update([
        'location' => $request->input('location'),
        'live_date' => $request->input('live_date'),
        'songs_played' => $request->input('songs_played'),
        'description' => $request->input('description'),
        // Update with other fields as needed
    ]);

    // Redirect or respond as needed
    return redirect('/live')->with('success', 'Live updated successfully!');

    }

    // In your controller
public function deleteGallery(Request $request, $live_id)
{
    // Validate the request if needed

    $selectedPictures = $request->input('selected_pictures', []);

    // Loop through selected pictures and delete them
    foreach ($selectedPictures as $pictureId) {
        // Find the picture by ID and delete it
        // Assuming you have a model for the media (adjust accordingly)
        $media = Media::find($pictureId);

        if ($media) {
            // Delete the media record from the database
            $media->delete();

            // Delete the actual file from storage if needed
            // Storage::delete($media->file_path);
        }
    }

    // Redirect back or wherever needed
    return redirect()->back()->with('success', 'Selected pictures deleted successfully.');
}


    public function AddPictures(Request $request, $live_id)
    {
    $live = Live::findOrFail($live_id);

    // Validate the request data
    $request->validate([
        'pictures.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file types and size as needed
    ]);

    // Handle picture uploads
    foreach ($request->file('pictures') as $picture) {
        $savePicture = $picture->store('public/images');
        $picturePath = str_replace('public/', '', $savePicture);

        // Create a media record for each picture
        $live->media()->create([
            'relation_id' => $live->id,
            'file_path' => $picturePath,
        ]);
    }

    // Redirect back or handle the response as needed
    return redirect()->back()->with('success', 'Pictures added successfully!');

    }

    public function create(Request $request)
{
    // Validate the request data
    $request->validate([
        'location' => 'required|string',
        'live_date' => 'required|date',
        'songs_played' => 'nullable|string',
        'description' => 'nullable|string',
        'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file types and size as needed
    ]);

    // Create a new live event
    $live = Live::create([
        'location' => $request->input('location'),
        'live_date' => $request->input('live_date'),
        'songs_played' => $request->input('songs_played'),
        'description' => $request->input('description'),
    ]);

    // Handle thumbnail upload
    if ($request->hasFile('thumbnail')) {
        $savethumbnail = $request->file('thumbnail')->store('public/images');
        $thumbnailpath = str_replace('public/', '', $savethumbnail);

        // Create a media record for the thumbnail
        $live->media()->create([
            'relation_id' => $live->id,
            'file_path' => $thumbnailpath,
        ]);
    }

    // Redirect back or handle the response as needed
    return redirect()->back()->with('success', 'Live event created successfully!');
}

    public function delete($id)
        {
            $live = Live::findOrFail($id);
            $live->delete();

            return redirect()->back()->with('success', 'Live deleted successfully');
        }

    public function addThumbnail(Request $request, $live_id)
        {
            $live = Live::findOrFail($live_id);
        
            // Validate the request data
            $request->validate([
                'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
        
            // Handle thumbnail upload
            $saveThumbnail = $request->file('thumbnail')->store('public/images');
            $thumbnailPath = str_replace('public/', '', $saveThumbnail);
        
            // Update the existing media record for the thumbnail
            if ($live->media->count() > 0) {
                $live->media[0]->update([
                    'file_path' => $thumbnailPath,
                ]);
            } else {
                // Create a new media record if none exists
                $live->media()->create([
                    'relation_id' => $live->id,
                    'file_path' => $thumbnailPath,
                ]);
            }
        
            // Redirect back or handle the response as needed
            return redirect()->back()->with('success', 'Thumbnail updated successfully!');
        }
            
}
