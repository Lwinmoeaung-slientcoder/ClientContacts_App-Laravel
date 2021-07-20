<?php

namespace App\Http\Controllers;

use App\Mail\SendingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        Mail::to($data['email'])->send(new SendingMail($data));
     return redirect()->route('mail')->with('status','Email Sent Successfully!!!');

      }
}
