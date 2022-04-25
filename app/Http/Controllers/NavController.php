<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function navigate($page)
    {
        switch($page) {
            case('index'):
                return view('landing_pages.index');
                break;
            case('landing_page_about'):
                return view('landing_pages.about');
                break;
            case('causes'):
                return view('landing_pages.causes');
                break;
            case('donation'):
                return view('landing_pages.donation');
                break;
            case('blog'):
                return view('landing_pages.blog');
                break;
            case('gallery'):
                return view('landing_pages.gallery');
                break;
            case('events'):
                return view('landing_pages.event');
                break;
            case('financing'):
                return view('landing_pages.financing');
                break;
            case('projects') :
                return view('landing_pages.projects');
                break;
            case('news'):
                    return view('landing_pages.news');
            break;
            case('help_us'):
                    return view('landing_pages.help_us');
                break;
            case('contact'):
                return view('landing_pages.contact');
                break;
            case('blog-single'):
                return view('landing_pages.blog-single');
                break;
        }
    }
}
