<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submitContact(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:10',
            'subject' => 'required',
            'message' => 'required|min:10',
        ]);

        // Find existing contact by email
        $existingContact = Contact::where('email', $request->email)->first();

        if ($existingContact) {
            // Update the existing contact
            $existingContact->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);
            
            return redirect()->route('contact')->with('success', 'Your message has been updated successfully!');
        }

        // Store the form submission in the contacts table
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->route('contact')->with('success', 'Your message has been successfully sent!');
    }
}
