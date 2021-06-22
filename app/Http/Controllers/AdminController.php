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

    public function editProperty(Request $request, $slug) {
        $property = Properties::where('slug', $slug)->first();

        if($request->isMethod('post')) {
            $validatedData = Validator::make($request->all(), [
                'address' => 'required',
                'amount' => 'required',
                'city' => 'required',
                'description' => 'required',
                'measurement' => 'required',
                'payment_plan' => 'required',
                // 'pictures' => 'required',
                'proximity' => 'required',
                'state' => 'required',
                'title' => 'required',
                'topography' => 'required',
            ]);

            if($validatedData->fails()) {
                return redirect()->back()
                    ->withErrors($validatedData)
                    ->withInput()
                    ->with('error', 'There\'s an error in one or more fields');
            }

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

            if($request->pictures) {
                $image = $request->file('pictures');
                $name = Str::slug($request->pictures).'_'.time();
                $filePath = '/assets/images/uploads/';
                $file = $name. '.' . $image->getClientOriginalExtension();
                $image->move(public_path($filePath), $file);
                $property->pictures = $filePath.$file;
            }

            $property->update();

            return redirect('/admin/properties')->with('success', 'You\'ve successfully edited this property');
        }

        return view('admin.properties.editProperty')->with(compact('property'));
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

            if($validatedData->fails()) {
                return redirect()->back()
                    ->withErrors($validatedData)
                    ->withInput()
                    ->with('error', 'There\'s an error in one or more fields');
            }

            $property = new Properties;

            $property->address = $request->address;
            $property->amount = $request->amount;
            $property->city = $request->city;
            $property->description = $request->description;
            $property->measurement = $request->measurement;
            $property->payment_plan = $request->payment_plan;
            $property->proximity = $request->proximity;
            $property->slug = implode('-', explode(' ', strtolower($request->title)));
            $property->state = $request->state;
            $property->title = $request->title;
            $property->topography = $request->topography;

            $image = $request->file('pictures');
            $name = Str::slug($request->pictures).'_'.time();
            $filePath = '/assets/images/uploads/';
            $file = $name. '.' . $image->getClientOriginalExtension();
            $image->move(public_path($filePath), $file);
            $property->pictures = $filePath.$file;

            $property->save();

            return redirect('/admin/properties')->with('success', 'New property listed');
        }

        return view('admin.properties.newProperties');
    }

    public function properties() {
        $allProperties = Properties::latest()->get();
        return view('admin.properties.properties')->with(compact('allProperties'));
    }

    public function singleContact($contact_id) {
        $contact = Contacts::findOrFail($contact_id);

        return view('admin.contacts.singleContact')->with(compact('contact'));
    }

    public function singleProperty($slug) {
        $property = Properties::where('slug', $slug)->first();

        return view('admin.properties.singleProperty')->with(compact('property'));
    }
}
