<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use App\Models\Image ;
use App\Models\Blog ;

class StudentController
{
FUNCTION mail(Request $request){


return "THIS IS CODE ";
}
FUNCTION mailS(Request $request){


    return "THIS IS CODE ";
    }
    function blog (Request $request){
        $path = $request->file('image')->store('public'); // Store the file
$patharray = explode('/', $path); // Split the path into an array
$imagpath = $patharray[1]; // Get the second part of the array (the actual file name)

// Create a new Image instance
$images = new Image();
$images->title = $request->input('title'); // Get title from the form
$images->content = $request->input('content'); // Get content from the form
// Save the correct image path
$images->path = $imagpath;

// Save the image and return success
if($images->save()){
    return redirect('list');
}else{
    return 'error';
}
}
    
function list(){
    $images=Image::all();
    return view('home',['imagdata'=>$images]);
}
//delte code 
public function destroy($id)
{
    $image = Image::find($id); // Find the blog entry by ID

    if ($image) {
        $image->delete(); // Delete the blog entry
        return redirect('list')->with('success', 'Blog deleted successfully!');
    }

    return redirect('home')->with('error', 'Blog not found!');
}
//edit code 
function edit($id){
    {
        $image = Image::find($id);
        return view('dummy', ['image' => $image]);
    }
}

    // Function to update the image details
    public function update(Request $request, $id)
    {
        // Validate input data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Find the existing image entry
        $image = Image::find($id);

        // Update title and content
        $image->title = $request->input('title');
        $image->content = $request->input('content');

        // Update the image if a new one is uploaded
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public');
            $pathArray = explode('/', $imagePath);
            $image->path = $pathArray[1]; // Save the new image path
        }

        // Save the updated image entry
        $image->save();

        return redirect('list')->with('success', 'Image updated successfully!');
    }
    public function show($id)
    {
        // Find the image data by its ID
        $img = Image::findOrFail($id); // Replace 'Image' with your actual model name
    
        // Pass the data to the view
        return view('detail', compact('img'));
    }
}