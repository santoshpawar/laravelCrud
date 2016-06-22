<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewGalleryList()
    {
        $gallery = Gallery::latest()->get();
        return view('gallery.gallery', compact('gallery'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function saveGallery(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',

        ]);
        //Auth::user();

        $request['created_by'] = Auth::user()->id;
        $request['published'] = Auth::user()->id;
        $galleryData = Gallery::create($request->all());

        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function viewGalleryPics($id)
    {
        $gallery = Gallery::findOrfail($id);
        return view('gallery.gallery-view', compact('gallery'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function doImageUpload(Request $request)
    {
        //get the file from post request
        $file = $request->file('file');

        //set my filename
        $filename = uniqid() . $file->getClientOriginalName();

        //move file to corect location
        $file->move('gallery/images/', $filename);
        //save in db
        $gallery = Gallery::find($request->input('gallery_id'));

        $image = $gallery->images()->create([
            'gallery_id' => $request->input('gallery_id'),
            'file_name' => $filename,
            'file_size' => $file->getClientSize(),
            'file_mime' => $file->getClientMimeType(),
            'file_path' => 'Gallery/images/' . $filename,
            'created_by' => Auth::user()->id,

        ]);
        return $image;
    }
}
