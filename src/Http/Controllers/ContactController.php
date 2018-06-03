<?php

namespace Azizur\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Azizur\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Azizur\Contact\Mail\ContactMailable;
// modify contact page name for vendor
class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
    public function send(Request $request)
    {
        Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($request->message,$request->name));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
