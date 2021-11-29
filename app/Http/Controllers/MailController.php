<?php

namespace App\Http\Controllers;

use App\Mail\SendInfo;
use App\Models\User;
use App\Notifications\NotifyAll;
use App\Notifications\NotifyInfo;
use Codedge\Fpdf\Fpdf\Fpdf;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Mockery\Matcher\Not;
use PhpParser\Node\Expr\Cast\String_;
use function PHPSTORM_META\type;
class MailController extends Controller
{


    // send certificates
    function sendCertificates(String $name, String $gmail,String $date){
        // make certificate
        header('content-type:image/png');
        // load template image
        $font = '/home/tanvir/Desktop/workspace/Online-Certificate-Creator/AHT_sir_group/Certificate_Creator/public/template/BRUSHSCI.ttf';
        $image = imagecreatefrompng('template/ict-certi3.png');
        $color = imagecolorallocate($image, 19, 21, 22);;
        //$name = "Tanvir Ahmed";
        //$date = "15th November 2021";

        imagettftext($image,50,0,430,730,$color,$font,$name);
        imagettftext($image,40,0,1100,800,$color,$font,$date);

        $file = time();
        $file_path="certificates/".$name.$file.".png";
        $file_path_pdf="certificates/".$name.$file.".pdf";
        imagepng($image,$file_path);
        //imagepng($image);
        imagedestroy($image);
        // make pdf and save as pdf
        $pdf = new Fpdf();
        $pdf->AddPage();
        $pdf->Image($file_path,0,0,210,150);
        $pdf->Output($file_path_pdf,"F");
        // send by email



        $maildata=[
            'name'=>$name,
            'file_path_pdf'=>$file_path_pdf
        ];

        Mail::to($gmail)->send(new SendInfo($maildata));

        Storage::delete("certificates/".$file_path_pdf);
        return "Certificate sent";
    }

    function sendtoall(){
        $date = "20 November 2021";
        $users = User::all();
        foreach($users as $user){
            $this->sendCertificates($user->name,$user->email,$date);
        }
    }

    function sendtopaidusers(){
        $date = "20 November 2021";
        $users = DB::table('users')
            ->join('records', 'users.id', '=', 'records.perticipant_id')
            ->select('users.*', 'records.id as record_id', 'records.transaction_id')
            ->where('records.paid','=',1)
            ->get();
        foreach($users as $user){
            $this->sendCertificates($user->name,$user->email,$date);
        }
        // return $users;
        redirect('admin/adminDashboard')->with('success','Success! Certificate Sent');
    }


    // send message to any user or user-group
    function sendmailfrombox(Request $req){

        $paymentstatus = $req->paymentstatus;
        $eventid = $req->eventid;
        $subject = $req->subject;
        $message = $req->message;

        $users = User::join('records', 'users.id', '=', 'records.perticipant_id')
        ->where('records.paid','=',$paymentstatus)
        ->where('records.event_id','=',$eventid)
        ->get();

        foreach($users as $user){
            $userName = $user->name;
            $user->notify(new NotifyInfo($userName,$subject,$message));
        }

        sleep(10);
        redirect('mailbox')->with('success','Success! Message Sent');

    }






}
