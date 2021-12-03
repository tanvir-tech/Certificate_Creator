<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\User;
use App\Notifications\PaymentToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Random;

class RecordController extends Controller
{
    //
    function participate(Request $req){

        if($req->session()->has('user')){
            $record = new Record();
            $record->perticipant_id = session()->get('user')['id'];
            $record->event_id = $req->event_id;
            $record->paid = 0;
            $record->verified = 0;
            $record->attended = 0;
            $record->certified = 0;

            $record->transaction_gateway = "bkash";
            $record->transaction_id = null;
                $payment_token = $req->event_id."OCC".session()->get('user')['id']."-T".time();
            $record->payment_token = $payment_token;

            $record->save();


            // return $payment_token;
            // send $payment_token by email

            $user = User::join('records', 'users.id', '=', 'records.perticipant_id')
            ->where('records.payment_token','=',$payment_token)
            ->first();

            $user->notify(new PaymentToken($payment_token));

            return redirect('pay');

        }else{
            return view('auth/login');
        }


    }


    function registrationlist(){


        $records = DB::table('records')
            ->join('users', 'records.perticipant_id', '=', 'users.id')
            ->select('users.*', 'records.id as record_id', 'records.paid', 'records.transaction_id','records.payment_token','records.verified')
            // ->where('records.paid','=',1)
            ->get();

        // return $records;
        return view('admin/registrationlist',['records'=>$records]);
    }














}
