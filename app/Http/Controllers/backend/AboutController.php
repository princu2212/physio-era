<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function create(Request $request)
    {
        return view('backend.about.add');
    }

    public function store(Request $request)
    {
        $about = new About;
        $about->title = $request->title;
        $about->description = $request->description;
        $about->link = $request->link;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/about/' . $about->image));
            $filename = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/about'), $filename);
            $about['image'] = $filename;
        }

        $about->save();

        $notification = array(
            'message' => 'About Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function show()
    {
        $about = About::get();
        return view('backend.about.show', compact('about'));
    }

    public function edit()
    {
        $about = About::find(1);
        return view('backend.about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = About::find($id);
        $about->title = $request->title;
        $about->description = $request->description;
        $about->link = $request->link;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/about/' . $about->image));
            $filename = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/about'), $filename);
            $about['image'] = $filename;
        }

        $about->save();

        $notification = array(
            'message' => 'About Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        $delete = About::find($id);
        @unlink(public_path('upload/about/' . $delete->image));
        $delete->delete();

        $notification = array(
            'message' => 'Data Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('about.show')->with($notification);
    } // end method
}
