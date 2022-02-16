<?php

namespace App\Mail;

use App\Models\BookShowing;
use App\Models\Listing;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyTestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $details = BookShowing::orderBy('id','DESC')->first();
        $listing = Listing::orderBy('name')->first();
        $listingPrice = $listing->price;

        $similarListings = Listing::where('price', '<=', $listingPrice)->limit(10)->orderBy('price', 'desc')->get();

//        dd($listing);
        return $this->subject('Mail from npls.xemcorps.com')
            ->view('npls.email',compact('details','listing','similarListings'));
//        ->with('details',$this->details)
    }
}
