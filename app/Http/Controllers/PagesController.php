<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
    // Public pages
    public function home() {
        return view('pages.home');
    }
    public function contact() {
        return view('pages.contact');
    }
    public function about() {
        return view('pages.about');
    }
    public function book() {
        return view('pages.book');
    }

}
