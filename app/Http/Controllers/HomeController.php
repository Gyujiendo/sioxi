<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tracks;
use App\Models\Media;
use App\Models\Live;


class HomeController extends Controller
{
    public function read()
    {
        $lives = Live::orderBy('live_date', 'desc')->first();
        $medias = Media::all();
        $tracks = Tracks::orderBy('id', 'desc')->get();
        return view('home', compact('lives', 'medias', 'tracks'));
    }
}
