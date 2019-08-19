<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $title = 'Hillcrest';
        return view ('pages.index')->with('title', $title);
    }

    public function about() {
        $title = 'Hillcrest';
        $pageTitle = 'About Us';
        return view('pages.about') -> with('title', $title)->with('pageTitle',$pageTitle);
    }

    public function contact() {
        $title = 'Hillcrest';
        $pageTitle = 'Contact Us';
        return view('pages.contact') ->with('title', $title)->with('pageTitle',$pageTitle);
    }

    public function services() {
        $title = 'Hillcrest';
        $pageTitle = 'Services';
        return view('pages.services') ->with('title', $title)->with('pageTitle',$pageTitle);
    }

    public function blog() {
        $title = 'Hillcrest';
        $pageTitle = 'Our Blog';
        return view('pages.blog')->with('title', $title)->with('pageTitle',$pageTitle);
    }
}
