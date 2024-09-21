<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        $contact = Contact::find(1);
        return view('backend.contact.show', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
        $contact->timing = $request->timing;
        $contact->whatsapp = $request->whatsapp;
        $contact->instagram = $request->instagram;
        $contact->facebook = $request->facebook;

        $contact->save();

        $notification = array(
            'message' => 'Contact Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // end method
}
