<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Counter;
use App\Models\Header;
use App\Models\Review;
use App\Models\Service;

class IndexController extends Controller
{
    public function index()
    {
        $header = Header::find(1);
        $about = About::first();
        $aboutlast = About::find(2);
        $contact = Contact::find(1);
        $counter = Counter::all();
        $service = Service::all();
        $review = Review::latest()->get();

        return view('frontend.index', compact('header', 'about', 'aboutlast', 'contact', 'counter', 'service', 'review'));
    }
}
