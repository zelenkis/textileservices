<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class IndexController extends Controller
{
    public function index()
    {
        $images = Photo::latest()->get();
        $id = Photo::orderBy('id')->get();


        return view('index', [
            'id' => $id,
            'images' => $images,
        ]);

    }
}
