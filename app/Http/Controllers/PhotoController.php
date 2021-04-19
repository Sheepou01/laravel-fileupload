<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        // TODO
        return view('photo.index');
    }

    public function store()
    {
        // TODO
    }

    public function download(Photo $photo)
    {
        // TODO
    }

    public function destroy(Photo $photo)
    {
        // TODO
    }
}
