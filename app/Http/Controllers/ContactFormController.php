<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create(){
        return view('contactForm.create');
    }
    public function store(){
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        
        Mail::to('test@test.com')->send(new ContactFormMail($data));

        return redirect('contact_us')
        ->with('message', 'Thanks for your message.');
    }
}
