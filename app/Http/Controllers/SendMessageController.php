<?php

namespace App\Http\Controllers;

use App\Mail\SendMessage;
use App\Models\MailMessage;
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
            $customSubject = $request->input('subject');
            $Usermessage = $request->input('message');
            //saving message to database

            $saveMessage = new MailMessage();
            $saveMessage->name = $name;
            $saveMessage->email = $email;
            $saveMessage->subject = $customSubject;
            $saveMessage->message = $Usermessage;
            $saveMessage->save();
            //Mail facade functionalitu can be used here
            Mail::to($email)->send(new SendMessage($name, $email, $customSubject, $Usermessage));

            return redirect()->back()->with('success', 'Message sent successfully and saved successfully 😊');
        } else {
            return redirect()->back()->with('error', 'All fields are required');
        }
    }

    public function showMessages(){
        $message = MailMessage::all();
//check role from middleware
if()



        if($message->isEmpty()){
            return redirect()->back()->with('error', 'No messages found');
        }else{
            return view('dashboard.showMessage', compact('message'));
        }
    }
}
