<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecordController extends Controller
{
    //
    function participate(Request $req){

        if($req->session()->has('user')){
            $record = new Record();
            $record->perticipant_id = session()->get('user')['id'];
            $record->event_id = $req->event_id;
            $record->paid = 0;
            $record->attended = 0;
            $record->certified = 0;

            $record->transaction_gateway = "bkash";
            $record->transaction_id = null;
            $record->save();


            // send record id by email


            return redirect('pay');

        }else{
            return view('auth/login');
        }


    }


    function registrationlist(){


        $records = DB::table('records')
            ->join('users', 'records.perticipant_id', '=', 'users.id')
            ->select('users.*', 'records.id as record_id', 'records.paid', 'records.transaction_id')
            // ->where('records.paid','=',1)
            ->get();

        // return $records;
        return view('admin/registrationlist',['records'=>$records]);
    }














}
