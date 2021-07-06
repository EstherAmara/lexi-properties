<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

use App\Models\BookInspection;
use App\Models\Properties;
use App\Models\Settings;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $allProperties = Properties::latest()->paginate(9);
        $indexProperty = Properties::where('status', Properties::INDEX)->first();

        $settings = Settings::first();
        if($settings->whatsapp[0] === 2) {
            $whatsapp = $settings->whatsapp;
        } else {
            $whatsapp = substr_replace($settings->whatsapp, '234', 0, 1);
        }

        return view('home')->with(compact('allProperties', 'indexProperty', 'settings', 'whatsapp'));
    }

    public function about() {
        $settings = Settings::first();

        return view('home.about')->with(compact('settings'));
    }

    public function landBankingInvestment() {
        return view('home.landBankingInvestment');
    }

    public function properties() {
        $allProperties = Properties::paginate(12);

        return view('home.properties')->with(compact('allProperties'));
    }

    public function singleProperty($slug) {
        $property = Properties::where('slug', $slug)->first();

        return view('home.singleProperty')->with(compact('property'));
    }

    public function bookInspection(Request $request, $id = null) {
        $validatedData = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);

        if($validatedData->fails()) {
            return redirect()->back()
                ->withErrors($validatedData)
                ->withInput()
                ->with('error', 'There\'s an error in one or more fields');
        }
        $inspection = new BookInspection;
        $inspection->property_id = $id;
        $inspection->name = $request->name;
        $inspection->email = $request->email;
        $inspection->phone = $request->phone;
        $inspection->message = $request->message;
        $inspection->date = $request->date;
        $inspection->time = $request->time;

        $inspection->save();

        return redirect()->back()->with('success', 'You\'ve successfully book an inspection for this property');
    }
}
