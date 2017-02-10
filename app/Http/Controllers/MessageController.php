<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function getMessage() {
    	$messages = \App\Message::all();

    	return view('messages.allMessages', ['messages' => $messages]);
    }

    public function getNewMessage() {
    	return view('messages.addMessage');   	
    }

    public function postNewMessage(Request $request) {
    	$newMess = new \App\Message;
    	$newMess->content = $request->content;
    	$newMess->offset = $request->offset;
    	$newMess->save();

    	return redirect('/messages');
    }


}
