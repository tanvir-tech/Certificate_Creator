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

    // send certificates
    function sendCertificates(String $name, String $gmail, String $date)
    {
        // make certificate
        header('content-type:image/png');
        // load template image
        $font = '/home/tanvir/Desktop/workspace/Online-Certificate-Creator/AHT_sir_group/Certificate_Creator/public/template/BRUSHSCI.ttf';
        $image = imagecreatefrompng('template/certi.png');
        $color = imagecolorallocate($image, 19, 21, 22);;
        //$name = "Tanvir Ahmed";
        //$date = "15th November 2021";

        imagettftext($image, 50, 0, 170, 250, $color, $font, $name);
        imagettftext($image, 20, 0, 400, 595, $color, $font, $date);

        $file = time();
        $file_path = "certificates/" . $name . $file . ".png";
        $file_path_pdf = "certificates/" . $name . $file . ".pdf";
        imagepng($image, $file_path);
        //imagepng($image);
        imagedestroy($image);
        // make pdf and save as pdf
        $pdf = new Fpdf();
        $pdf->AddPage();
        $pdf->Image($file_path, 0, 0, 210, 150);
        $pdf->Output($file_path_pdf, "F");
        // send by email


        $maildata = [
            'name' => $name,
            'file_path_pdf' => $file_path_pdf
        ];

        Mail::to($gmail)->send(new SendInfo($maildata));
        return "Certificate sent";
    }

    function sendtoall()
    {
        $date = "20 November 2021";
        $users = User::all();
        foreach ($users as $user) {
            $this->sendCertificates($user->name, $user->email, $date);
        }
    }





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





}
