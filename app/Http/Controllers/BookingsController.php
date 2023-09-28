<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\CommonMark\CommonMarkConverter;
use Stevebauman\Purify\Facades\Purify;
use App\Models\Booking;
use Mail;

class BookingsController extends Controller
{
    public function AddBooking(Request $request) {
        $request->validate([
            'name' => 'required',
            'nr_people' => 'required',
            'date' => 'required',
            'phone' => 'required',
            'pickup' => 'required',
            'destination' => 'required',
            'email' => 'required|email'
        ]);

        $converter = new CommonMarkConverter([
            'html_input' => 'strip',
            'allow_unsafe_links' => false,
        ]);

        Booking::create([
            'name' => $request->input('name'),
            'nr_people' => $request->input('nr_people'),
            'date' => $request->input('date'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'pickup' => $request->input('pickup'),
            'destination' => $request->input('destination'),
            'comment' => " ",
            'status' => true
        ]);

        Mail::send('booking-notification',
        array(
            'name' => $request->input('name'),
            'nr_people' => $request->input('nr_people'),
            'date' => $request->input('date'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'pickup' => $request->input('pickup'),
            'destination' => $request->input('destination'),
        ), function($message) use ($request)
          {
             $message->from($request->email, $request->name);
             $message->subject("New Booking");
             $message->to('buzz_taxi@yahoo.com');
             $message->replyTo($request->email);
          });
          
        return redirect('/home')->with('booking_success_message', 'Your booking order has been submitted! Thank you for using our services!');

    }

    public function setBookingInactive($id) {
        Booking::where('id', $id)->update([
            'status' => 0
        ]);
        
        return redirect('/dashboard/bookings')->with('message', 'Booking successfully removed');
    }
}
