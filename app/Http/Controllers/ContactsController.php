<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;

use App\Models\Contacts;

class ContactsController extends Controller
{

    public function index() {
        return view('contact');
    }

    public function submitContactForm(Request $request) {

        $contact = new Contacts;
        $contact->name = $request->formData['name'];
        $contact->email = $request->formData['email'];
        $contact->phone = $request->formData['phone'];
        $contact->message = $request->formData['message'];
        $contact->save();

        return response()->json('successful', 200);
    }
}
