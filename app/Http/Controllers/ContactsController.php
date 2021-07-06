<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;

use App\Models\Contacts;
use App\Models\Settings;

class ContactsController extends Controller
{

    public function index() {
        $settings = Settings::first();
        if($settings->whatsapp[0] === 2) {
            $whatsapp = $settings->whatsapp;
        } else {
            $whatsapp = substr_replace($settings->whatsapp, '234', 0, 1);
        }

        return view('home.contact')->with(compact('settings', 'whatsapp'));
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
