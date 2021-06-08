<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Properties;

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

        return view('home')->with(compact('allProperties'));
    }

    public function landBankingInvestment() {
        return view('landBankingInvestment');
    }
}
