<?php

namespace App\Http\Controllers;

use App\Diary;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function diaries( Diary $diary)
    {
       return view('diaries/top')->with(['diaries'=> $diary->get()]);
    }
}


    
    
      
