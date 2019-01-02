<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;
use App\Boooking;

class AdminSubmitController extends Controller
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
    
    public function removeInquiry($id) {
        $inquiry = Inquiry::find($id);
        // $inquiry->delete();
        $inquiry->status=0;
        $inquiry->save();
        return redirect('/admincontact')->with('success', 'Inquiry removed successfully');
    }

    public function removeBooking($id) {
        $booking = Boooking::find($id);
        // $inquiry->delete();
        $booking->status=0;
        $booking->save();
        return redirect('/adminbook')->with('success', 'Booking removed successfully');
    }
}
