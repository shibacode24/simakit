<?php

namespace App\Http\Controllers;
use App\Models\Serve\NewServeForm;
use App\Http\Controllers\Controller;
use App\Models\Master\BussinessReg;
use Illuminate\Http\Request;
use App\Models\Master\BussinessType;



class PrintController extends Controller
{
    public function print(Request $request)
   {

    $data=NewServeForm::where('serves.id',$request->id)
    ->leftjoin('bussiness_types','bussiness_types.id','=','serves.type_of_bussiness_id')

    ->leftjoin('bussiness_registrations','bussiness_registrations.id','=','serves.type_of_licence_id')
 
      ->select('serves.*','bussiness_types.bussiness_type','bussiness_registrations.bussiness_reg_type1','bussiness_registrations.bussiness_reg_type')
        //->orderby('serves.id','desc')
        ->first();

     // $serve_all=NewServeForm::all();

      $serve_all=NewServeForm::leftjoin('bussiness_types','bussiness_types.id','=','serves.type_of_bussiness_id')

      ->leftjoin('bussiness_registrations','bussiness_registrations.id','=','serves.type_of_licence_id1')
   
        ->select('serves.*','bussiness_types.bussiness_type','bussiness_registrations.bussiness_reg_type1','bussiness_registrations.bussiness_reg_type')
          //->orderby('serves.id','desc')
          ->get();

          $ty_licence=BussinessReg::all();
          $ty_bussiness=BussinessType::all();
     // $serve_all=NewServeForm::all();

    //  echo json_encode($data);
    //  exit();
    return view('print.new_survey_print',compact('ty_bussiness','ty_licence','data','serve_all'));
   }

}
