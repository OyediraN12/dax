<?php

namespace App\Http\Controllers;

use App\Message;
use App\MessageComment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessagesController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conversation = new MessageComment;
        $conversation->user_id = auth()->user()->id;
        $conversation->message = $request->message;
        $conversation->message_id = $request->message_id;
        $conversation->save();
        return response()->json($conversation);
    }

    public function getConversations(Request $request)
    {
        $conversations =  MessageComment::where(['message_id'=>$request->id])->with('user')->get();
        return $conversations;
    }

}
