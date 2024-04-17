<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMail;
use Mail;

class ContactFormController extends Controller
{
    public function ContactForm(Request $request) {

        $request->validate([
            'name' => 'nullable|min:3|max:50',
            'email' => 'required|email',
            'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message' => 'required|min:3|max:1000'
        ]);

        $lang = app()->getLocale();

        // create new contact
        $contact = Contact::create($request->all());

        // create new email
        $mail = new ContactMail($contact);

        // get admin email
        $admin = config('settings.admin_email');

        // form checkbox: "Send me a copy of this message ?"
        if ($request->has('check-send-copy')) {
            // send email to admin and copy to guest
            Mail::to($admin)->cc($contact->email)->locale($lang)->queue($mail->onQueue('notification'));
        } else {
            // send email to admin
            Mail::to($admin)->locale($lang)->queue($mail->onQueue('notification'));
        }

        return response('Created', 201);
    }
}
