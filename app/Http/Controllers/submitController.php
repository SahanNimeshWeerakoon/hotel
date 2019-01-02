<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;
use App\Boooking;

class submitController extends Controller
{
    // Save The Inquiry
    public function contact(Request $request) {
        $this->validate($request, [
            'name'=>'required|max:100',
            'phone'=>'required|min:9',
            'email'=>'required|min:7',
            'message'=>'required|max:1000'
        ]);

        $status = 1;

        $inquiry = new Inquiry();
        $inquiry->name=$request->input('name');
        $inquiry->phone=$request->input('phone');
        $inquiry->email=$request->input('email');
        $inquiry->message=$request->input('message');
        $inquiry->status=$status;
        $inquiry->save();

        return redirect('/')->with('success', 'Inquiry successfully sent');
    }

    // Save The Booking
    public function book(Request $request) {
        $this->validate($request, [
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'nic'=>'required',
            'cid'=>'required',
            'cod'=>'required',
            'acRoom'=>'required',
            'nonac'=>'required'
        ]);
        
        $status = 1;

        $book = new Boooking();
        $book->name=$request->input('name');
        $book->phone=$request->input('phone');
        $book->email=$request->input('email');
        $book->nic=$request->input('nic');
        $book->cid=$request->input('cid');
        $book->cod=$request->input('cod');
        $book->ac=$request->input('acRoom');
        $book->nonac=$request->input('nonac');
        $book->status=$status;
        $book->save();

        return redirect('/')->with('success', 'Your rooms are successfully booked.');
    }

}
