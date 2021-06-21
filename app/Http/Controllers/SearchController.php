<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Properties;

class SearchController extends Controller
{
    public function simpleSearch(Request $request) {
        $q = $request->search;
        if ($q != "") {
            $listing = Properties::where('status', Properties::ACTIVE)->where(function($query) use ($q) {
                $query->where('address', 'LIKE', '%'.$q.'%')
                    ->orWhere('amount', 'LIKE', '%'.$q.'%')
                    ->orWhere('city', 'LIKE', '%'.$q.'%')
                    ->orWhere('description', 'LIKE', '%'.$q.'%')
                    ->orWhere('measurement', 'LIKE', '%'.$q.'%')
                    ->orWhere('proximity', 'LIKE', '%'.$q.'%')
                    ->orWhere('state', 'LIKE', '%'.$q.'%')
                    ->orWhere('title', 'LIKE', '%'.$q.'%')
                    ->orWhere('topography', 'LIKE', '%'.$q.'%');
            });
            $allProperties = $listing->paginate(15);

            if(count($allProperties) > 0) return view('home.search')->with(compact('allProperties', 'q'));
        }
        return redirect('/properties')->with('error','No properties found that match search term');
    }

    public function quickSearch(Request $request) {
        $location = $request->location;
        $minPrice = $request->minPrice;
        $maxPrice = $request->maxPrice;

        $properties = Properties::where('status', Properties::ACTIVE)
            ->whereBetween('amount', [$minPrice, $maxPrice])
            ->where(function($query) use ($location) {
                $query->where('city', 'LIKE', '%'.$location.'%')
                ->orWhere('state', 'LIKE', '%'.$location.'%')
                ->orWhere('address', 'LIKE', '%'.$location.'%')
                ->orWhere('proximity', 'LIKE', '%'.$location.'%');
            });
        $allProperties = $properties->paginate(15);
        $q = 'Properties Available';
        if(count($allProperties) > 0) return view('home.search')->with(compact('allProperties', 'q'));

        return redirect('/properties')->with('error', 'No properties found that match search term');
    }
}
