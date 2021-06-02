<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contacts;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function contact() {
        $contacts = Contacts::orderby('created_at', 'desc')->get();

        return view('admin.contacts')->with(compact('contacts'));
    }

    public function newProperties() {
        return view('admin.properties.newProperties');
    }

    public function properties() {
        return view('admin.properties.properties');
    }
}
