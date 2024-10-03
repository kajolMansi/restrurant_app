<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'datetime' => 'required|date',
            'people' => 'required|integer',
            'special_request' => 'nullable|string|max:500',
        ]);

        $formattedDateTime = Carbon::createFromFormat('m/d/Y h:i A', $request->datetime);

        Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'datetime' => $formattedDateTime,
            'people' => $request->people,
            'special_request' => $request->special_request,
        ]);

        return redirect()->back()->with('success', 'Reservation made successfully!');
    }
}
