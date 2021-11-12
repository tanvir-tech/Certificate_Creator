<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

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
            $record->save();

            return redirect('home');

        }else{
            return view('auth/login');
        }


    }














}
