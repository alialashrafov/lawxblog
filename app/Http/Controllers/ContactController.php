<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contact\Contact;
use App\Mail\ContactFormEmail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function send(Contact $request)
    {
        $validated = $request->validated();
        Mail::to($request->email)->send(new ContactFormEmail());
        $contact = new \App\Models\Contact();
        $contact->createFromRequest($validated);
        $contact->save();

    }
}
