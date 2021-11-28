<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertCreatorController extends Controller
{
    // create certificates
    //p = String $name, String $gmail,String $date
    function createCertificates(){
        // make certificate
        header('content-type:image/png');
        // load template image
        $font = '/home/tanvir/Desktop/workspace/Online-Certificate-Creator/AHT_sir_group/Certificate_Creator/public/template/BRUSHSCI.ttf';
        $image = imagecreatefrompng('template/ict-certi3.png');
        $color = imagecolorallocate($image, 19, 21, 22);;
        $name = "Tanvir Ahmed";
        $date = "15th TestMonth 2021";

        //imagettftext($image,50,0,170,250,$color,$font,$name);
        imagettftext($image,50,0,430,730,$color,$font,$name);
        imagettftext($image,40,0,1100,800,$color,$font,$date);

        $file = time();
        $file_path="certificates/".$name.$file.".png";
        $file_path_pdf="certificates/".$name.$file.".pdf";
        imagepng($image,$file_path);
        //imagepng($image);
        imagedestroy($image);

        return "Certificate created";
    }
}
