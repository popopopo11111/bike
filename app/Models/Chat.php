<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Chat extends Model
{
    use HasFactory;
    protected $table = 'chats';
    protected $fillable = ['message', 'user_id', 'room_id'];
    protected $dates =  ['created_at', 'updated_at'];
    
    public function getData(){
       $data = DB::table($this->table)->get();
       return $data;
   }
}
