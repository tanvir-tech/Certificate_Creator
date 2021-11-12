<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // pay info
    // verify payment

    function verifypayment(Request $req){

        $record_id = $req->record_id;
        $transaction_id = $req->transaction_id;
        $name = $req->transaction_reference;

        // verify payment
        // 

}
}
