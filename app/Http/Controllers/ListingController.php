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


    // public function scopeFilter($query, array $filters) {
    //     if($filters['search'] ?? false) {
    //         $query->where('title', 'like', '%' . request('search') . '%')
    //             ->orWhere('description', 'like', '%' . request('search') . '%')
    //             ->orWhere('tags', 'like', '%' . request('search') . '%');
    //     }
    // }

   

    public function create(){
        return view('listings.create');
    }



    public function show($id){
        $listing = Listing::find($id);
        return view('listings.show', compact('listing'));
    }


    public function store(Request $request){

        $formFields =$request ->validate([

            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'company' => 'required',
            'tags' => 'required',
            'description' => 'required',

        ]);

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');

    }


   


   
}


   




