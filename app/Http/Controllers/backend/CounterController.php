<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function create(Request $request)
    {
        return view('backend.counter.add');
    }

    public function store(Request $request)
    {
        $counter = new Counter();
        $counter->title = $request->title;
        $counter->number = $request->number;
        $counter->icon = $request->icon;
        $counter->save();

        $notification = array(
            'message' => 'Counter Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function show()
    {
        $counter = Counter::get();
        return view('backend.counter.show', compact('counter'));
    }

    public function edit()
    {
        $counter = Counter::find(1);
        return view('backend.counter.edit', compact('counter'));
    }

    public function update(Request $request, $id)
    {
        $counter = Counter::find($id);
        $counter->title = $request->title;
        $counter->number = $request->number;
        $counter->icon = $request->icon;
        $counter->save();

        $notification = array(
            'message' => 'Counter Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        $delete = Counter::find($id);
        $delete->delete();

        $notification = array(
            'message' => 'Counter Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('counter.show')->with($notification);
    } // end method
}
