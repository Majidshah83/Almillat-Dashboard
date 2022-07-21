<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class EventController extends Controller
{
    public function index()
    {
       $event=Event::all();
       return view('dashboard.event.index',compact('event'));
    }
    public function create()
    {
       return view('dashboard.event.create');
    }

    public function store(Request $request)
    {

        $event= new Event();
        if($request->file('image')) {
         $file = $request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=  time().'.'. $extension;
         $file->move('upload/event/',$filename);
         $event->image = $filename;
     }
     $event->title=$request->title;
     $event->event_Date=$request->event_Date;
     $currentDateTime =$request->event_from;
$newDateTime = date('h:i A', strtotime($currentDateTime));
   $event->event_from=$newDateTime;
    //  $event->event_from=$request->event_from;
      $currentDateTime =$request->event_to;
$neweDateTime = date('h:i A', strtotime($currentDateTime));
     $event->event_to=$neweDateTime;
     $event->location=$request->location;
     $event->short_description=$request->short_description;
     $event->long_description=$request->long_description;
     $event->save();
    return redirect()->route('event_index')
            ->with('success', 'Event created successfully.');

    }
    public function destroy($id)
    {
        $event=Event::find($id);
        $event->delete();
        return redirect()->route('event_index')
            ->with('success', 'Event deleted successfully.');
    }
}