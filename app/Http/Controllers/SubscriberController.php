<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function form(Request $request)
    {
        request()->validate([
            'email'=>'required'
        ]);
        $subscriber = Subscribe::where('email', $request->email)->first();
        if($subscriber)
        {
            return redirect('/');
        }
        else
        {
            $data = request()->only('email');
            Subscribe::create($data);
            return view('subscribe-message', compact('data'));
        }
    }
}
