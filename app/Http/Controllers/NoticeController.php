<?php

namespace App\Http\Controllers;

use App\Events\NoticeEvent;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function notify(){
        NoticeEvent::dispatch("Hello World");
    }
}
