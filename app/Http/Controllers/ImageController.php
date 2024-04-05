<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function upload(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB
    ]);

    // Store the uploaded image
    $imagePath = $request->file('image')->store('images', 'public');

    // Save the image details to the database
    $image = new Image();
    $image->user_id = auth()->user()->id; // Assuming you have user authentication
    $image->filename = $imagePath;
    $image->original_filename = $request->file('image')->getClientOriginalName();
    $image->save();

    return response()->json(['success' => true]);
}

}
