<?php

namespace App\Http\Controllers;

use App\Mail\SendMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMessageController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        //send message logic here via gmail or any other service
        if ($request->has('name') && $request->has('email') && $request->has('subject') && $request->has('message')) {
            $name = $request->input('name');
            $email = $request->input('email');
            $subject = $request->input('subject');
            $message = $request->input('message');

            //Mail facade functionalitu can be used here
            Mail::to($email)->send(new SendMessage($name, $email, $subject, $message));

            return redirect()->back()->with('success', 'Message sent successfully');
        } else {
            return redirect()->back()->with('error', 'All fields are required');
        }
    }
}
