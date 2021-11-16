<?php

namespace App\Http\Controllers;

use App\Mail\SendInfo;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\Cast\String_;

use function PHPSTORM_META\type;

class EventController extends Controller
{

    // see registered users records
    function participantsList()
    {
        $users = User::where('paid', 1)->get();
        return view('admin/registrationlist', ['users' => $users]);
    }


    function createEvent(Request $request)
    {

        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;

        $event->date = $request->date;
        $event->time = $request->time;

        $event->venue = $request->venue;

        $event->fee = $request->fee;
        $event->coupon = $request->coupon;

        $event->status = "registration-on-going";


        $event->save();

        return view('admin/createEvent');
    }

    function eventlist()
    {

        $events=Event::all();
        return view('/home',['events'=>$events]);

    }




    function detail($id){
        $event = Event::find($id);
        return view('eventdetail',['event'=>$event]);
    }



}
