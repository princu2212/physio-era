<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function edit()
    {
        $header = Header::find(1);
        return view('backend.header.edit', compact('header'));
    }

    public function update(Request $request, $id)
    {
        $header = Header::find($id);
        $header->title = $request->title;
        $header->short_title = $request->short_title;
        $header->description = $request->description;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/header/' . $header->image));
            $filename = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/header'), $filename);
            $header['image'] = $filename;
        }

        $header->save();

        $notification = array(
            'message' => 'Header Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // end method
}
