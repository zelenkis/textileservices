<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class GalleryController extends Controller
{
    public function index() {

        $images = Photo::latest()->paginate(15);
        $id = Photo::orderBy('id')->get();

        return view('/gallery', [
            'id' => $id,
            'images' => $images,
        ]);

        

    }

   
}
