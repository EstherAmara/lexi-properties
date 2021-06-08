<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

use App\Models\Contacts;
use App\Models\Properties;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function contact() {
        $contacts = Contacts::orderby('created_at', 'desc')->get();

        return view('admin.contacts.contacts')->with(compact('contacts'));
    }

    public function newProperties(Request $request) {
        if($request->isMethod('post')) {

            $validatedData = Validator::make($request->all(), [
                'address' => 'required',
                'amount' => 'required',
                'city' => 'required',
                'description' => 'required',
                'measurement' => 'required',
                'payment_plan' => 'required',
                'pictures' => 'required',
                'proximity' => 'required',
                'state' => 'required',
                'title' => 'required',
                'topography' => 'required',
            ]);

            $property = new Properties;

            $property->address = $request->address;
            $property->amount = $request->amount;
            $property->city = $request->city;
            $property->description = $request->description;
            $property->measurement = $request->measurement;
            $property->payment_plan = $request->payment_plan;
            $property->proximity = $request->proximity;
            $property->state = $request->state;
            $property->title = $request->title;
            $property->topography = $request->topography;

            $image = $request->file('pictures');
            $name = Str::slug($request->pictures).'_'.time();
            $folder = '/assets/images/uploads/';
            $filePath = $name. '.' . $image->getClientOriginalExtension();
            $image->move(public_path($folder), $filePath);
            $property->pictures = $filePath;

            $property->save();

            return redirect('/admin/properties')->with('success', 'New property listed');
        }

        return view('admin.properties.newProperties');
    }

    public function properties() {
        return view('admin.properties.properties');
    }

    public function singleContact() {
        return view('admin.contacts.singleContact');
    }

    public function singleProperties() {
        return view('admin.properties.singleProperties');
    }
}