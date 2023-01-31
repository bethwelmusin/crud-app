<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{



    public function index(){

        return view("listings.index", [
        
            'listings' => Listing::all()
        ]);

    }


    public function show($id){
        $listing = Listing::find($id);
        return view('listings.show', compact('listing'));
    }
}


