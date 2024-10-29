<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = $request->only([
            'name',
            'email',
            'mobile_number',
            'subject',
            'message',
        ]);

        $clientName = $data['name'];

        Mail::to("style@fatieluxe.com")
            ->send(new SendEmail($data['subject'], $data , $clientName));
        return back()->with('message', 'Your request has been submitted successfully.');






















        new SendEmail($data['subject'], $data, $clientName);
 
    }
}
