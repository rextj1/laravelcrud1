<?php

namespace App\Http\Controllers;

use auth;
use App\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        $listings= Listing::all();
        return view('home',compact('listings'));       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('listing.createlisting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required'
        ]);
        $listing= new Listing;
        $listing->name= $request->get('name');
        $listing->address= $request->get('address');
        $listing->website= $request->get('website');
        $listing->email= $request->get('email');
        $listing->phone= $request->get('phone');
        $listing->bio= $request->get('bio');
        $listing->user_id= Auth::user()->id;
        $listing->save();
        return redirect('home')->with('success','Listing Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $listing= Listing::find($id);
        return view('listing.edit',compact('listing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $listing=Listing::find($id);
        $listing->name= $request->get('name');
        $listing->address= $request->get('address');
        $listing->website= $request->get('website');
        $listing->email= $request->get('email');
        $listing->phone= $request->get('phone');
        $listing->bio= $request->get('bio');
        $listing->user_id= Auth::user()->id;
        $listing->save();
        return redirect('home')->with('success','Listing Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $listing= Listing::find($id);
        $listing->delete();
        return redirect('/home')->with('success','Listing Deleted');
    }
}
