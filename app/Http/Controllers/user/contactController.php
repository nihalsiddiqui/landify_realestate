<?php

namespace App\Http\Controllers\user;

use App\Notifications\contactUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\contactagentmail;
use App\Models\City;
use App\Notifications\contactAgentNotification;
use App\Notifications\contactNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Mail;


class contactController extends Controller
{
    public function index()
    {
        return view('npls.contact');
    }
    public function contactsubmitmail(Request $request)
    {
        // dd($request->all());
        $contactNotification = $request->all();
        Notification::route('mail', 'iftikharahsan94@gmail.com')
            ->notify(new contactNotification($contactNotification));
        return back();
    }
    public function contactagent(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => 'required'
        ]);
        $contactAgent = $request->all();
        Notification::route('mail', 'support@npls.pk')
            ->notify(new contactAgentNotification($contactAgent));

        return view('npls.redirectmessage');
    }
    public function userContacttoAgent(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => 'required'
        ]);
        $contactUser =  $request->all();
        Notification::route('mail', 'iftikharahsan94@gmail.com')
            ->notify(new contactUser($contactUser));
        return back();

    }
}
