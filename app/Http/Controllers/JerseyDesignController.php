<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JerseyDesignController extends Controller
{
    public function saveDesign(Request $request)
    {
        $image = $request->input('image'); // Gambar dalam format base64
        $imageName = 'jersey_design_' . time() . '.png';
        $path = public_path('storage/jersey_designs/' . $imageName);

        // Decode gambar base64 dan simpan
        file_put_contents($path, base64_decode($image));

        return response()->json(['message' => 'Design saved successfully!', 'path' => $path]);
    }
}
