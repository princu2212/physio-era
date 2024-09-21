<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $appointment = new Appointment();
        $appointment->name = $request->name;
        $appointment->email = $request->email;
        $appointment->phone = $request->phone;
        $appointment->date = $request->date;
        $appointment->type = $request->type;
        $appointment->comment = $request->comment;
        $appointment->save();

        $notification = array(
            'message' => 'Your Message has been sent',
            'alert-type' => 'success'
        );

        return redirect('/')->with($notification);
    }

    public function show()
    {
        $appointment = Appointment::latest()->get();
        return view('backend.appointment.show', compact('appointment'));
    }

    public function edit($id)
    {
        $appointment = Appointment::find($id);
        return view('backend.appointment.edit', compact('appointment'));
    }


    public function destroy($id)
    {
        $delete = Appointment::find($id);
        $delete->delete();

        $notification = array(
            'message' => 'Data Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('appointment.show')->with($notification);
    } // end method
}
