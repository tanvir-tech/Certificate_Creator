<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class EventController extends Controller
{

    // send certificates
    function sendCertificates(Request $req){
        header('content-type:image/png');
    // load template immage
        $font = '/home/tanvir/Desktop/workspace/Online-Certificate-Creator/AHT_sir_group/Certificate_Creator/public/template/BRUSHSCI.ttf';
        $image = imagecreatefrompng('template/certi.png');
    //$image = imagecreatefrompng("cert.png");
        $color = imagecolorallocate($image, 19, 21, 22);;
        $name = "Tanvir Ahmed";
        imagettftext($image,50,0,170,250,$color,$font,$name);
        $date = "15th November 2021";
        imagettftext($image,20,0,400,595,$color,$font,$date);

        imagepng($image);
        imagedestroy($image);

// make certificate
// save as pdf
// send by email

return "done";
    }


    // see registered users records
    function participantsList(){}
    // send message to any user or user-group
    function sendEmail(){}

}
