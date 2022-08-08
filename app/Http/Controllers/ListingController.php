<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //
    //show all listings
    public function index(Request $request){
        // dd(request('tag'));
        return view('listing.index', [
            'listings' =>  Listing::latest()->filter(request(['tag','search']))->get()
            // [[
            //     'id' => 1,
            //     'title' => 'Listing One',
            //     'description' => 'Lorem Ipsum is simply dummy, Lorem Ipsum, aute irut non ante. Lorem Ipsum et'
            // ], [
            //     'id' => 2,
            //     'title' => 'Listing Two',
            //     'description' => 'Lorem Ipsum is simply dummy, Lorem Ipsum, aute irut non ante. Lorem Ipsum et'
            // ]]
        ]);
    }

    //Show single listing
    public function show(Listing $listing){
        return view('listing.show',['listing'=> $listing]);
    }

    //create listing
    public function create(){
        return view('listing.create');
    }
}
