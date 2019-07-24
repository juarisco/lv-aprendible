<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store()
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3',
        ], [
            'name.required' => __('I need your name')
        ]);

        // Enviar email
        Mail::to('juarisco@outlook.com')->queue(new MessageReceived($message));

        // return new MessageReceived($message);

        return back()->with('status', __('We received your message, we will reply you in less than 24 hours'));
    }
}
