<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getAbout(){
    	return view('pages.about');
    }

    public function getResearch(){
        return view('pages.research');
    }

    public function getFunding(){
        return view('pages.funding');
    }

    public function getFuture(){
        return view('pages.future');
    }

    public function getPolicy(){
        return view('pages.policy');
    }

    public function getContact(){
        return view('pages.getintouch');
    }


}
