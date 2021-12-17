<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\User;
use App\Notifications\PaymentToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\String_;

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


    function verifyPayment($paymentToken){

        $record = Record::where(['payment_token'=>$paymentToken])->first();

        if($record->transaction_id){
            $record->paid = 1;
            $record->verified = 1;
            $record->save();
        }


        return redirect('registrationlist');
    }








}
