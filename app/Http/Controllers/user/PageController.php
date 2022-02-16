<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin;
use App\Models\BookShowing;
use App\Models\City;
use App\Models\Listing;
use App\Models\post;
use App\Notifications\preQualified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class PageController extends Controller
{
    public function aboutUS()
    {
        return view('npls.aboutUs');
    }
    public function BookShowing(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => 'required'
        ]);
        $book_showing = new BookShowing;
        $book_showing->firstname = $request->name;
        $book_showing->lastname = $request->lastname;
        $book_showing->email = $request->email;
        $book_showing->phone_no = $request->phone;
        $book_showing->message = $request->message;
        $book_showing->time = $request->time;
        $book_showing->preference = $request->preference;
        $book_showing->date = $request->date;
        $book_showing->time = $request->time;
        $book_showing->first_and_last_name = $request->first_and_last_name;
        $book_showing->pre_approved = $request->pre_approved;

        $book_showing->save();

//        [
//            'title' => 'Mail from npls.xencorps.com',
//            'body' => 'This is for testing email using smtp'
//        ];
//
        $details = BookShowing::orderBy('id','DESC')->get();
        \Mail::to('iftikharahsan94@gmail.com')->send(new \App\Mail\MyTestMail($details));
        return back();

    }
    public function email_page()
    {
        $details = BookShowing::orderBy('id','DESC')->first();
        $listing = Listing::orderBy('id','ASC')->first();
        $listingPrice = $listing->price;

        $similarListings = Listing::where('price', '<=', $listingPrice)->limit(10)->orderBy('price', 'desc')->get();


        return view('npls.email',compact('details','listing','similarListings'));
    }

    public function agent()
    {
        $agents = admin::role('agent')->latest()->paginate(12);
        return view('npls.agent', compact('agents'));
    }

    public function agentDetail($id)
    {
        $agent = admin::where('id', $id)->first();
        // dd($agent->listing->isEmpty());
        return view('npls.agentDetail', compact('agent'));
    }
    public function agentContact()
    {
        $cities = City::all();

        // dd($cities->name);
        return view('npls.contact_agents', compact('cities'));
    }

    public function agentApply()
    {
        return view('npls.applyAgent');
    }

    public function blog()
    {
        $posts = post::latest()->paginate(12);
        return view('npls.blog', compact('posts'));
    }
    public function why_npls()
    {
        return view('npls.why_npls');
    }

    public function singleBlog($id)
    {
        $singlepost = post::where('id', $id)->first();
        return view('npls.single-blog', compact('singlepost'));
    }

    public function contact()
    {
        return view('npls.contact');
    }

    public function findProperty()
    {
        return view('npls.findProperty');
    }

    public function pre_qualified()
    {
        return view('npls.pre_qualified');
    }

    public function preQualified(Request $request)
    {
        //        dd($request->first);
        $preQualified = $request->all();
        Notification::route('mail', 'nihalsiddiqui40@gmail.com')
            ->notify(new preQualified($preQualified));
        return back();
    }
}
