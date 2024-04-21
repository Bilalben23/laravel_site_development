<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function __invoke(StoreContactRequest $request)
    {
        $contact = Contact::find($request->email);

        $contact = Contact::where('email', $request->email)->first();

        if ($contact) {
            $contact->update([
                "name" => $request->name,
                "email" => $request->email
            ]);
            return back()->with("success-message", "Contact Updated Successfully!");
        } else {
            Contact::create([
                "name" => $request->name,
                "email" => $request->email
            ]);
            return back()->with("success-message", "Contact Created Successfully!");
        }

    }
}