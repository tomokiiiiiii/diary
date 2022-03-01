<?php

namespace App\Http\Controllers;

use App\Top;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function diaries(Top $post)
    {
        return $post->get();
    }
}
