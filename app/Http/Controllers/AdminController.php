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
        $contacts = Contacts::all();

        return view('admin.contacts')->with(compact('contacts'));
    }
}
