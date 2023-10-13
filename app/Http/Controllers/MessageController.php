<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\Room; 

class MessageController extends Controller
{
    public function test() {
        return view('test');
      }

    public function add(Request $request) 
    { 
        $post = new Chat();
        $post->Message = $request->Message;
        $post->user_id = $request->user_id;
        $post->room_id = $request->room_id;
        $post->save();

        return redirect('/test');
    }
     
    public function room(){
        $object = new Chat();
   	    //users テーブルのデータを User Model のgetData メソッド経由で取得する
   	    #$data = $object->getData();
   	    //データを一旦出力
   	    $chat=Chat::where('room_id', '1')->get();
   	    return view('/room', ['data' => $chat]); 
    }
}