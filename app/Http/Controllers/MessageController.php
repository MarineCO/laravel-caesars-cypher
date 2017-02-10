<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function getMessage() {
    	$messages = \App\Message::all();

    	return view('messages.allMessages', ['messages' => $messages]);
    }

    public function getNewEncryptMessage() {
    	return view('messages.addMessage');   	
    }

    public function postNewEncryptMessage(Request $request) {
    	$mess = $request->content;
    	$offset = $request->offset;

    	$message = new \App\Message;
    	$message->content = $this->encryptMessage($mess, $offset);
    	$message->offset = $offset;

    	$message->save();

    	return redirect('/messages');
    }

    public function encryptMessage($mess, $offset) {
    	$newMess='';
    	$messLen = strlen($mess);
    	 
    	for ($i = 0; $i < $messLen; $i++) {
    		$char = substr($mess, $i, 1);
    		$test = ord($char) + $offset;
    		$newMess .= chr($test);
    	};

    	return $newMess;
    }

    public function deleteMessage($id) {
    	$deleteMessage = \App\Message::find($id);
    	$deleteMessage->delete();

    	return back();
    }

}
