<?php

namespace App\Http\Controllers;

use App\Subscriber;

class SubscriberController extends Controller
{

    public function store()
    {
        $this->validate(request(), [
            'email' => 'required|email|unique:subscribers',
        ]);

        Subscriber::create([
            'email' => request('email'),
        ]);

        session()->flash('message', 'Votre inscription à la newsletter a bien été prise en compte.');


        return back();
    }


    public function destroy(Subscriber $subscriber)
    {
        //
    }
}
