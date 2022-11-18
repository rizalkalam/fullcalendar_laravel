<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalendarController extends Controller
{
    public function index(Request $request)
    {
        $events = array();
        $bookings = Booking::all();
        foreach ($bookings as $booking) {
          $events[] = [
            'id'=>$booking->id,
            'title'=>$booking->title,
            'start'=>$booking->start_time,
            'end'=>$booking->end_time,
            'description'=>$booking->description,
          ];
        }

        return response()->json(['events'=>$events]);
    }

    public function store(Request $request)
    {
        $request->validate([
          'title'=>'required|string',
        ]);
        $booking = Booking::create([
                'title'=>$request->title,
                'start_time'=>$request->start_time,
                'end_time'=>$request->end_time,
                'description'=>$request->description,
        ]);
 
        return response()->json($booking);
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::find($id);
        if (! $booking) {
          return response()->json([
            'error'=>'Unable to locate the event'
          ], 404);
        }
        $booking->update([
          'start_time'=>$request->start_time,
          'end_time'=>$request->end_time,
        ]);

        return response()->json('Event updated');
    }

    public function edit(Request $request, $id)
    {
       $events = array();
       $booking = Booking::find($id)->update($events = [
            'title'=>$request->title,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
            'description'=>$request->description,
        ]);

        return response()->json($events);
    }

    public function destroy(Request $request, $id)
    {
      $booking = Booking::find($id);
      if (! $booking) {
        return response()->json([
          'error'=>'Unable to locate the event'
        ], 404);
      }
      $booking->delete();
      return response()->json('Delete Success');
    }

}
