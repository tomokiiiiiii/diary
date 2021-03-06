<?php

namespace App\Http\Controllers;

use App\Diary;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function diaries(Diary $diary)
    {
       return view('diaries/top')->with(['diaries'=> $diary->getPaginateByLimit()]);
    }
    
    public function show(Diary $diary)
    {
        return view('show')->with(['diary' => $diary]);
    }
    
    public function create()
    {
        return view('create');
    }
    public function store(Request $request, Diary $diary)
    {
        $input = $request['diary'];
        $diary->fill($input)->save();
        return redirect('/top/' . $diary->id);
    }
}


    
    
      
