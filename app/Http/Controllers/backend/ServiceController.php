<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create(Request $request)
    {
        return view('backend.service.add');
    }

    public function store(Request $request)
    {
        $service = new Service();
        $service->title = $request->title;
        $service->link = $request->link;
        $service->description = $request->description;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/service/' . $service->image));
            $filename = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/service'), $filename);
            $service['image'] = $filename;
        }

        $service->save();

        $notification = array(
            'message' => 'Service Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function show()
    {
        $service = Service::get();
        return view('backend.service.show', compact('service'));
    }

    public function edit()
    {
        $service = Service::find(1);
        return view('backend.service.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->title = $request->title;
        $service->link = $request->link;
        $service->description = $request->description;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/service/' . $service->image));
            $filename = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/service'), $filename);
            $service['image'] = $filename;
        }

        $service->save();

        $notification = array(
            'message' => 'Service Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        $delete = Service::find($id);
        @unlink(public_path('upload/service/' . $delete->image));
        $delete->delete();

        $notification = array(
            'message' => 'Service Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('service.show')->with($notification);
    } // end method
}
