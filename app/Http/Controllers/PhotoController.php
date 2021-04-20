<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhotoRequest;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        // TODO
        return view('photo.index');
    }

    public function store(StorePhotoRequest $request)
    {
        $validData = $request->validated();
        dump($validData);

        return back();
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
