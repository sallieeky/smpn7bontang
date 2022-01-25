<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {
        return view("landing.home");
    }

    public function profile()
    {
        return view("landing.profile");
    }

    public function guru()
    {
        return view("landing.guru");
    }

    public function perpustakaan()
    {
        return view("landing.perpustakaan");
    }
    public function detail()
    {
        return view("landing.information_detail");
    }

    public function ekskul()
    {
        return view("landing.ekskul");
    }

    public function blog()
    {
        return view("landing.blog");
    }

    public function contact()
    {
        return view("landing.contact");
    }
}
