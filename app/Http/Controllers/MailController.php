<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{

    public function index(){
      session()->forget('datavalue');
        return view('mail');
    }

    public function sendmail(Request $request){
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'name' => 'required',
            'message' => 'required',
          ]);
  
          $data = [
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
          ];
  
          Mail::send('email-template', $data, function($message) use ($data) {
            $message->to($data['email'])
            ->subject($data['subject']);
            $message->from('blackplayerbk@gmail.com', 'LwinMoeAung');
          });
          echo "Email Sent with attachment. Check your inbox.";
        
       
      }
}
