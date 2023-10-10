<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    //
    public function caht()
   {
        //return view('chat/chat');
        return view('chat.chat')->with(['posts' => $post->get()]);  
   }
}
