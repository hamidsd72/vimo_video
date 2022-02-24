<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Requests\BannerRequest;

class BannersController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $countries = \App\Http\Utilities\Country::all();
        return view('banners.create', compact('countries'));
    }
    public function store(BannerRequest $request)
    {
        Banner::create($request->all());
        return back();
    }
    public function show($zip, $street)
    {
        $banner = Banner::locatedAt($zip, $street);
        return view('banners.show', compact('banner'));
    }
    public function addPhotos($zip, $street, Request $request)
    {
        $this->validate($request,
        [
            'file' => 'required|mimes:jpeg,png,bmp,jpg'
        ]);
        $photo = Photo::formFrom($request->file('file'));
        Banner::locatedAt($zip, $street)->addPhoto($photo);
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
