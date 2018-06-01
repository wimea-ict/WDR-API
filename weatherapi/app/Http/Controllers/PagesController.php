<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        $title='about us';
        return view('pages.about')->with('title',$title);
    }
    public function home(){
        $title='home';
        return view('pages.home')->with('title',$title);
    }

    public function document(){
        $title='documents';
        return view('pages.document')->with('title',$title);
    }
    public function blog(){
        $title='blog';
        return view('pages.blog')->with('title',$title);
    }
    public function demo(){
        $title='Demo';
        return view('pages.demo')->with('title',$title);
    }

    public function loggeduser(){
        return view('loggeduser');
    }
}