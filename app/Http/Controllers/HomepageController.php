<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function price(){
        return view('price');
    }

    public function quote(){
        return view('quote');
    }

    public function feature(){
        return view('feature');
    }
    public function contact(){
            return view('contact');
    }

    public function product(){
        return view('product');
}

    public function about(){
            return view('about');
    }

    public function gallery(){
        return view('gallery');
}

    public function service(){
        return view('service');
    }
    public function team(){
        return view('team');
    }
    public function testimonial(){
        return view('testimonial');
    }
    public function error(){
        return view('404');
    }
}
