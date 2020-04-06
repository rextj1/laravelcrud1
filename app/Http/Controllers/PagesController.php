<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PagesController extends Controller
{
    //
    public function submit(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
        ]);

        $page= new Page;
        $page->name= $request->get('name');
        $page->email= $request->get('email');
        $page->save();
        return redirect('/Home')->with('success','page message sent');
    }
    public function show(){
        $page= Page::all();
        return view('/pages.pagemessage')->with('pages',$pages);
    }
}
