<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhotoRequest;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        
        $photo = new Photo();

        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $ext = $request->file('file')->extension();
            $filename = Str::uuid().'.'.$ext;
            $slug = Str::slug($validData['title']);

            $photo->title = $validData['title'];
            $photo->filename = $filename;
            $photo->slug = $slug;
            $photo->path = $validData['file']->storeAs('photos', $filename, 'public');
            $photo->url = Storage::disk('public')->url($photo->path);
            $photo->size = Storage::disk('public')->size($photo->path);

            $photo->save();
        }
        

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
