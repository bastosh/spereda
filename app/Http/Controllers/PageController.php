<?php

namespace App\Http\Controllers;

use App\ContactMessage;

class PageController extends Controller
{

    public function home()
    {
        return view('index');
    }

    public function cv()
    {
        return view('pages.cv');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function sendMail()
    {
        $this->validate(request(), [
            'name' => 'required|min:2|max:100',
            'email' => 'required|email',
            'body' => 'required|min:2'
        ]);

        $message = new ContactMessage();

        $message->name = request('name');
        $message->email = request('email');
        $message->body = request('body');

        \Mail::to('sebastien.pereda@gmail.com')->send(new ContactMessage($message));
    }

    public function about()
    {
        return view('pages.about');
    }
}
