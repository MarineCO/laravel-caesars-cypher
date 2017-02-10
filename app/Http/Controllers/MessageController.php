<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function getMessage() {

    	$messages = \App\Message::all();

    	return view('messages.allMessages', ['messages' => $messages]);
    }
}
