<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function home(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        return view('pages.services');
    }

    public function serviceDetails()
    {
        return view('pages.serviceDetails');
    }

    public function team(){
        return view('pages.team');
    }

    public function blog(){
        return view('pages.blogs');
    }
    public function blogDetail(){
        return view('pages.blog_details');
    }


    public function companies(){
        return view('pages.companies');
    }


    public function contact(){
        return view('pages.contact');
    }
    

    public function careers(){
        return view('pages.career');
    }
}
