<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Newsletter;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function insert(Request $request)
    {
           $contact = new Contact();
           $contact->nume = $request->input('nume');
           $contact->email = $request->input('email');
           $contact->telefon = $request->input('telefon');
           $contact->mesaj = $request->input('mesaj');
           $contact->save();
           return redirect('/')->with('message', 'Mesaj trimis cu succes!');
    }

    public function newsletter(Request $request)
    {
           $newsletter = new Newsletter();
           $newsletter->email = $request->input('email');
           $newsletter->save();
           return redirect('/')->with('message', 'Te-ai abonat la newsletter!');
    }
}
