<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

use App\Models\BookInspection;
use App\Models\Contacts;
use App\Models\Properties;
use App\Models\Settings;

class AdminController extends Controller
{
    public function index() {
        $numberOfContacts = Contacts::count();
        $numberOfInspections = BookInspection::count();
        $numberOfProperties = Properties::count();

        $contacts = Contacts::orderBy('replied', 'DESC')->paginate(5);
        $properties = Properties::orderBy('updated_at', 'DESC')->paginate(5);
        $inspections = BookInspection::orderBy('updated_at', 'DESC')->paginate(5);

        return view('admin.index')->with(compact('numberOfContacts', 'numberOfInspections', 'numberOfProperties', 'contacts', 'properties', 'inspections'));
    }

    public function contact() {
        $contacts = Contacts::orderby('created_at', 'desc')->get();

        return view('admin.contacts.contacts')->with(compact('contacts'));
    }

    public function editProperty(Request $request, $slug = null) {
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
            $property->slug = implode('-', explode(' ', strtolower($request->title))) . '-' . strtotime(date('H:i:s'));
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

    public function inspections() {
        $inspections = BookInspection::all();

        return view('admin.inspections.inspections')->with(compact('inspections'));
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
            $property->slug = implode('-', explode(' ', strtolower($request->title))) . '-' . strtotime(date('H:i:s'));
            $property->state = $request->state;
            $property->title = $request->title;
            $property->topography = $request->topography;

            $indexPicture = $request->index;
            $indexName = Str::slug($request->index).'_'.time();
            $filePath = '/assets/images/uploads/';
            $file = $indexName. '.' . $indexPicture->getClientOriginalExtension();
            $indexPicture->move(public_path($filePath), $file);
            $indexPicture = $filePath.$file;
            $property->index_image = $indexPicture;

            $video = $request->video;
            $videoName = Str::slug($request->video).'_'.time();
            $filePath = '/assets/videos/uploads/';
            $file = $videoName . '.' . $video->getClientOriginalExtension();
            $video->move(public_path($filePath), $file);
            $video = $filePath.$file;
            $property->video = $video;

            foreach($request->pictures as $picture) {
                $image = $picture;
                $name = Str::slug($picture).'_'.time();
                $filePath = '/assets/images/uploads/';
                $file = $name. '.' . $image->getClientOriginalExtension();
                $image->move(public_path($filePath), $file);
                $allPictures[] = $filePath.$file;
            }
            $pictures = implode($allPictures, ',');
            $property->pictures = $pictures;
            $property->save();

            return redirect('/admin/properties')->with('success', 'New property listed');
        }

        return view('admin.properties.newProperties');
    }

    public function properties() {
        $allProperties = Properties::latest()->get();
        return view('admin.properties.properties')->with(compact('allProperties'));
    }

    public function replyContact(Request $request, $contact_id = null) {
        $contact = Contacts::findOrFail($contact_id);
        $contact->replied = true;
        $contact->subject = $request->subject;
        $contact->reply = $request->message;
        $contact->update();

        return redirect()->back()->with('success', 'You\'ve successfully replied this contact');
    }

    public function settings(Request $request) {
        $settings = Settings::first();
        if($request->ismethod('post')) {
            if($settings) {

                $settings->about_first = $request->about_first ?? null;
                $settings->about_second = $request->about_second ?? null;
                $settings->agents_note = $request->agent_note ?? null;
                $settings->email = $request->email ?? null;
                $settings->phone = $request->phone ?? null;
                $settings->whatsapp = $request->whatsapp ?? null;
                $settings->twitter = $request->twitter ?? null;
                $settings->instagram = $request->instagram ?? null;
                $settings->facebook = $request->facebook ?? null;
                $settings->youtube = $request->youtube ?? null;
                $settings->address = $request->address ?? null;

                if($request->image) {
                    $image = $request->file('image');
                    $name = Str::slug($request->image).'_'.time();
                    $filePath = '/assets/images/settings/';
                    $file = $name. '.' . $image->getClientOriginalExtension();
                    $image->move(public_path($filePath), $file);
                    $settings->image = $filePath.$file;
                }

                $settings->update();
            } else {
                $settings = new Settings;

                $settings->about_first = $request->about_first ?? null;
                $settings->about_second = $request->about_second ?? null;
                $settings->agents_note = $request->agent_note ?? null;
                $settings->email = $request->email ?? null;
                $settings->phone = $request->phone ?? null;
                $settings->whatsapp = $request->whatsapp ?? null;
                $settings->twitter = $request->twitter ?? null;
                $settings->instagram = $request->instagram ?? null;
                $settings->facebook = $request->facebook ?? null;
                $settings->youtube = $request->youtube ?? null;
                $settings->address = $request->address ?? null;

                if($request->image) {
                    $image = $request->file('image');
                    $name = Str::slug($request->image).'_'.time();
                    $filePath = '/assets/images/settings/';
                    $file = $name. '.' . $image->getClientOriginalExtension();
                    $image->move(public_path($filePath), $file);
                    $settings->image = $filePath.$file;
                }

                $settings->save();
            }

            return redirect()->back()->with('success', 'You have successfully set your details');
        }
        return view('admin.personal.personal')->with(compact('settings'));
    }

    public function singleContact($contact_id = null) {
        $contact = Contacts::findOrFail($contact_id);

        return view('admin.contacts.singleContact')->with(compact('contact'));
    }

    public function singleInspection($id = null) {
        $inspection = BookInspection::findOrFail($id);

        return view('admin.inspections.singleInspection')->with(compact('inspection'));
    }

    public function singleProperty($slug = null) {
        $property = Properties::where('slug', $slug)->first();
        $allPictures = [];
        if($property) {
            $allPictures = explode(',', $property->pictures);

        }

        return view('admin.properties.singleProperty')->with(compact('allPictures', 'property'));
    }

    public function togglePropertyIndex($slug = null) {
        $property = Properties::where('slug', $slug)->first();
        if($property->isIndex()) {
            $property->status = Properties::ACTIVE;
            $property->update();
        } else {
            $index = Properties::where('status', Properties::INDEX)->first();
            if($index) {
                $index->status = Properties::ACTIVE;
                $index->update();
            }

            $property->status = Properties::INDEX;
            $property->update();
        }


        return redirect()->back()->with('success', 'Successful');
    }
}
