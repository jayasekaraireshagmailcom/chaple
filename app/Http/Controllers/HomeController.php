<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chaple;
use App\Parish;
use App\Parent1;
use App\People;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chapes = new Chaple();

        return view('home',['chaple' => $chapes->getchapledata()]);
    }
    public function loadsaint(Request $request){
        $chapes = new Chaple();
        return response()->json(array('result'=>$chapes->getsaintdata($request->chaple)));
    }
    public function create_part1(Request $request){
        $parish = new Parish;
        $parish->chaple_id = $request->chaple;
        $parish->zone = $request->zone;
        $parish->novena = $request->novena;
        $parish->save();
        $request->session()->put('record_id', $parish->id);
        return response()->json(array('result'=>$parish->getparishdata($request->chaple,$parish->id),'row_id'=>$parish->id));

    }
    public function gotofamily(Request $request){
        return view('familydetails/family',['record_id' => $request->record_id]);
    }
    public function create_part2(Request $request){
        $people = new People;
        $people->name_f = $request->fname;
        $people->dob_f = $request->fdob;
        $people->fdeath_date = $request->deaddate;
        $people->place_of_baptism_f = $request->fbaptism;
        $people->race_f = $request->frace;
        $people->religion_f = $request->freligion;
        $people->date_of_marriage = $request->fmarriagedate;
        $people->place = $request->fmarriageplace;
        $people->employment_f = $request->femployment;
        $people->resposibility_p_f = $request->fresponsibilities;
        $people->include_in_meetings_f = $request->fcompany;
        $people->remarks = $request->fremarks;
        $people->parish_id1 = $request->session()->get('record_id');
        $people->save();
        return response()->json(array('row_id'=>$request->record_id,'people_id'=>$people->id));

    }
    public function create_part3(Request $request){
        $people = new People;
        $create_part3 = array();
        $create_part3 = $request->mname;
        $create_part3 = $request->mdob;
        $create_part3 = $request->mdeaddate;
        $create_part3 = $request->mbaptism;
        $create_part3 = $request->mrace;
        $create_part3 = $request->mreligion;
        $create_part3 = $request->mmarriagedate;
        $create_part3 = $request->memployment;
        $create_part3 = $request->mresponsibilities;
        $create_part3 = $request->mcompany;
        $create_part3 = $request->mremarks;
        $people->recordupdate_2($request->record_id,$create_part3);
        dd("hi");
    }    
}
