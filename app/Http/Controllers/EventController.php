<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;
use function PHPSTORM_META\type;

class EventController extends Controller
{

    // send certificates
    function sendCertificates(Request $req){
        // make certificate
        header('content-type:image/png');
        // load template image
        $font = '/home/tanvir/Desktop/workspace/Online-Certificate-Creator/AHT_sir_group/Certificate_Creator/public/template/BRUSHSCI.ttf';
        $image = imagecreatefrompng('template/certi.png');
        $color = imagecolorallocate($image, 19, 21, 22);;
        $name = "Iqbal Ahmed";
        imagettftext($image,50,0,170,250,$color,$font,$name);
        $date = "15th November 2021";
        imagettftext($image,20,0,400,595,$color,$font,$date);

        $file = time();
        $file_path="certificates/".$file.".png";
        $file_path_pdf="certificates/".$file.".pdf";
        imagepng($image,$file_path);
        //imagepng($image);
        imagedestroy($image);
        // make pdf and save as pdf
        $pdf = new Fpdf();
        $pdf->AddPage();
        $pdf->Image($file_path,0,0,210,150);
        $pdf->Output($file_path_pdf,"F");
        // send by email



        return "done";
    }







    // see registered users records
    function participantsList(){}
    // send message to any user or user-group
    function sendEmail(){}

}
