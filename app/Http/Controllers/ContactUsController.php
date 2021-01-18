<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUS;
use Illuminate\contract\Mailer;
use Mail;


class ContactUsController extends Controller
{
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUS()
   {
       return view('contact');
   }

   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUSPost(Request $request)
   {
       
        $contact = new ContactUS;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();
        
        Mail::send('email',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message')
        ), function($message){
                $message->from('admin@mvtextile.com', 'MVTextile');
                $message->to('hell.maggotbone@gmail.com')->attach('message');
            });

        return back()->with('success', 'Va multumim pentru mesaj! Revenim la dvs. in cateva zile!');
       
             

    }

    public function reply(Request $request){
        $to_name = 'RECEIVER_NAME';
        $to_email = 'RECEIVER_EMAIL_ADDRESS';
        $data = array('name', 'body');
        
        Mail::send('email', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('Laravel Test Mail');
            $message->from('SENDER_EMAIL_ADDRESS','Test Mail');
            });
        }
}
