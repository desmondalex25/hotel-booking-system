<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\Http\Requests\CreateGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.gallery.all_gallery')
            ->with('galleries', Gallery::simplePaginate(4));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGalleryRequest $request, Gallery $gallery)
    {

        Gallery::Create([
           'image_title' => $request->image_title,
            'description' => $request->description,
            'image_name' => $request->image_name->store('public/images/gallery'),
            'slug' => str_slug($request->image_title),

        ]);

        return redirect(route('gallery.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.create')
            ->with('gallery', $gallery);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
//        dd($request->all());
        if ($request->hasFile('image_name'))
        {
            $gallery->update([
                'image_title' => $request->image_title,
                'description' => $request->description,
                'image_name' => $request->image_name->store('public/images/gallery'),
                'slug' => str_slug($request->image_title),

            ]);
        }
        else {
            $data = $request->only(['image_title', 'description', 'slug',]);

            $gallery->update($data);
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        if (file_exists(public_path() . '/images/gallery/'.$gallery->image)){
            unlink(public_path() . '/images/gallery/'.$gallery->image);
            $gallery->delete();

        }
        else
        {
            $gallery->delete();

        }

        return redirect()->back();
    }
}
