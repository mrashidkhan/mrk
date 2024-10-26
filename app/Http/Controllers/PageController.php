<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
{
    $firsttext = 'Home Page';
    $secondtext = 'MRK Wholesales';

    return view('pages.index', compact('firsttext', 'secondtext'));
}


    // public function ourTeam()
    // {


    //     $studios = '3Sixty';
    //     $threeSixty = 'Team';

    //     return view('pages.our-team')->with([
    //     'studios' => $studios,
    //     'threeSixty' => $threeSixty,
    // ]);

    // }

    public function jewellery()
    {
        $firsttext = 'Jewellery';
        $secondtext = 'MRK Wholesales';

    return view('pages.jewellery', compact('firsttext', 'secondtext'));


    }

    // public function logIn()
    // {
    //     return view('pages.log-in');
    // }

    public function contactUs()
    {

        $firsttext = 'Contact US';
        $secondtext = 'MRK Wholesales';

    return view('pages.contact-us', compact('firsttext', 'secondtext'));
    }

    public function electronics()
    {


        $firsttext = 'Electronics';
        $secondtext = 'MRK Wholesales';

    return view('pages.electronics', compact('firsttext', 'secondtext'));
    }

    public function aboutUs()
    {


        $firsttext = 'About US';
        $secondtext = 'MRK Wholesales';

    return view('pages.about-us', compact('firsttext', 'secondtext'));
    }

    public function fashion()
    {


        $firsttext = 'Fashion';
        $secondtext = 'MRK Wholesales';

    return view('pages.fashion', compact('firsttext', 'secondtext'));
    }
}
