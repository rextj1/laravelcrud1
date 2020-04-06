<?php

namespace App\Http\Controllers;


use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    //
    public function submit(Request $request){
        // form validation
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);

        $message= new Message;
        $message->name= $request->get('name');
        $message->email= $request->get('email');
        $message->message= $request->get('message');
        $message->save();
        return redirect('Home')->with('success','Message has been sent'); 
    }

    // read message from database
    public function show(){
        $messages= Message::all();
        return view('/messages.messages',compact('messages'));
    }
   
}
