<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
use App\Rules\Captcha;
use Illuminate\Support\Facades\Redirect;
use League\CommonMark\CommonMarkConverter;
use Stevebauman\Purify\Facades\Purify;


class ContactController extends Controller
{

  public function create (){
    return view('contact');
  }

  public function sendMessage(Request $request)
{
  $converter = new CommonMarkConverter([
    'html_input' => 'strip',
    'allow_unsafe_links' => false,
]);
  $this->validate($request, [
    'name' => 'required',
    'email' => 'required|email',
    'message' => 'required',
  ]);

  Contact::create([
    'name' => $request->input('name'),
    'email' => $request->input('email'),
    'comment' => $converter->convertToHtml(Purify::clean($request->get('message'))),
    'phone' => $request->input('phone')
  ]);

  Mail::send('email-receive',
 array(
     'name' => $request->get('name'),
     'email' => $request->get('email'),
     'phone' => $request->get('phone'),
     'user_message' => $converter->convertToHtml(Purify::clean($request->get('message'))),
 ), function($message) use ($request)
   {
      $message->from($request->email, $request->name);
      $message->subject("New Message");
      $message->to('buzz_taxi@yahoo.com');
      $message->replyTo($request->email);
   });

   return redirect('/home')->with('contact_success_message', 'We have received your message! Thank you for contacting us!');
}

}