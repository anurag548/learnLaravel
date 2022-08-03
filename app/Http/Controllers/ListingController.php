<?php

namespace App\Http\Controllers;

use App\Models\Listing;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    //
    //show all listings
    public function index(){
        return view('listing.index', [
            'listings' =>  Listing::all()
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
}
