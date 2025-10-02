<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function post(request $request)
    {
        $validated = $request->validate([
            'inquiry' => 'required|string',
            'name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|email|max:100',
            'message' => 'required|string|max:250',
        ]);
        $recepient = config('app.contact_form.recipient');

        Mail::to($recepient)->send(new ContactFormMail($validated));

        return response()->json(['message' => 'Your message has been sent successfully.']);

    }
}
