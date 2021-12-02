<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // pay info
    // verify payment



    function transactionInfo(Request $req){

        $payment_token = $req->payment_token;
        $transaction_id = $req->transaction_id;
        $name = $req->transaction_reference;

        // update record
        $record = Record::where('payment_token',$payment_token)->first();

        $record->transaction_id = $transaction_id;

        $record->save();

        return "Payment information will be verified.Thank you.";



    }








}
