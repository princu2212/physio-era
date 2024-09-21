<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $review = new Review();
        $review->name = $request->name;
        $review->message = $request->message;
        $review->save();

        $notification = array(
            'message' => 'Your Message has been sent',
            'alert-type' => 'success'
        );

        return redirect('/')->with($notification);
    }

    public function show()
    {
        $review = Review::latest()->get();
        return view('backend.review.show', compact('review'));
    }

    public function edit($id)
    {
        $review = Review::find($id);
        return view('backend.review.edit', compact('review'));
    }

    public function update(Request $request, $id)
    {
        $review = Review::find($id);
        $review->name = $request->name;
        $review->message = $request->message;
        $review->save();

        $notification = array(
            'message' => 'Review Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('review.show')->with($notification);
    }

    public function destroy($id)
    {
        $delete = Review::find($id);
        $delete->delete();

        $notification = array(
            'message' => 'Data Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('review.show')->with($notification);
    } // end method
}
