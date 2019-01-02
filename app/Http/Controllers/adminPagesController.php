<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;
use App\Boooking;

class adminPagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Admin pages
    public function admincontact() {
        $inquiries = Inquiry::where('Status', '1')->get();
        return view('pages.admin.contact')->with('inquiries', $inquiries);
    }
    public function adminbook() {
        $bookings = Boooking::where('Status', '1')->get();
        return view('pages.admin.book')->with('bookings', $bookings);
    }
}
