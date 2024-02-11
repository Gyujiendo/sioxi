<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tracks;
use App\Models\Media;
use App\Models\Live;


class StoreController extends Controller
{
    public function read()
    {
        return view('store');
    }
}
