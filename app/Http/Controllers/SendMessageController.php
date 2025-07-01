<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendMessageController extends Controller
{
    public function send(Request $request)
    {
        dd($request->all());
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|max:255',
            'subject'=>'required|string|max:255',
            'message'=>'required|string|max:5000',
        ]);

        //send message logic here via gmail or any other service
    }
}
