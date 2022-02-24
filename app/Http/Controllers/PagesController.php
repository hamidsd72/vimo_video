<?php

namespace App\Http\Controllers;

use App\Content;
use App\Movie;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {

        $content     = Content::with('pictures')->get();
        $content0    = $content;
        $content1    = $content;
        $content2    = $content;
        $content3    = $content;
        $content4    = $content;
        $content5    = $content;
        $content6    = $content;
        $content7    = $content;
        $content8    = $content;
        $content9    = $content;
        $circle      = $content;
        $circle0     = $content;
        $circle1     = $content;
        $circle2     = $content;
        $special     = $content->take(4);
        $hero        = $content->take(4);
        $superstar   = $content;
        $genre       = ['کلاسیک و فاخر','جنایی و فکری','مستند و علمی','مسابقات و آموزشی','کمدی و خنده دار','انیمیشن و کارتون','تاریخی و حماسی','درام و عاشقانه','علمی و تخیلی','وحشت و ترسناک','هیجان و ماجرایی','اکشن و رزمی'];
        $array       = [$content,$content0,$content1,$content2,
        $content3,$content4,$content5,$content6,$content7,$content8,$content9];
        $arrayCircle = [$circle,$circle0,$circle1,$circle2];

        return view('pages.index',
            compact('array','arrayCircle','special','hero','superstar','genre'));
    }
    public function player($id)
    {
        // $movieMp4 = Movie::findOrFail($id);
        // $movieMp4 = $movieMp4->path;
        // return view('pages.player', compact('movieMp4'));
        return view('pages.player');
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        $content     = Content::with('pictures')->findOrFail($id);
        if($content->is_serial)
        {
            $movie   = Movie::where('content_id',$content->id)->get()->sortBy('number');
        }else{
            $movie   = Movie::where('content_id',$content->id)->first();
        }
        $item        = Content::with('pictures')->get();
        return view('pages.show', compact('content','movie','item'));
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
