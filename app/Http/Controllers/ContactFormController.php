<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
       {
        return view('contact.create');
       }

    public function store()
       {
           $data = request()->validate([
               'name' => 'required|max:30',
               'email' => 'required|email',
               'msg' => 'required|max:255',
               'phone' => 'required|numeric',
           ]);
           
        //    Sending an mail
        Mail::to('test@test.com')->send(new ContactFormMail($data));

        return redirect('contact')->with('message','Thanks for your message.');
       }
}
