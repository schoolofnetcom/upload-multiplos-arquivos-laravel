<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function upload(Request $request) {
        // creating gallery
        $gallery = new Gallery();
        $gallery->title = $request->title;
        $gallery->save();

        for($i = 0; $i < count($request->file('file')); $i++) {
            $uploadedFile = $request->file('file')[$i];
            $image = new GalleryImage();
            $image->gallery_id = $gallery->id;
            $image->path = $uploadedFile->store('galleries/gallery-' . $gallery->id );
            $image->save();
            unset($image);
        }

        return redirect()->route('galleries-list');
    }

    public function index() {
        $galleries = Gallery::all();
        return view('gallery.index', compact('galleries'));
    }

    public function show(Gallery $gallery) {
        $images = $gallery->images;
        return view('gallery.show', compact('gallery', 'images'));
    }
}
