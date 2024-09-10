<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class MessageContoller extends Controller
{
    public function hello()
    {
        return view('message.hello');
    }

    public function var ()
    {
        return view('message.var', ['variable' => 'Hello from MessageController']);
    }

    public function word ($msg)
    {
        return view('message.word', ['msg' => $msg]);
    }

    public function word2 ($name, $msg)
    {
        return view('message.word2', ['name' => $name, 'msg' => $msg]);
    }
}

    
