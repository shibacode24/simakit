<?php

namespace App\Http\Controllers\Serve;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\BussinessReg;

use App\Models\Master\BussinessType;
use App\Models\Serve\ExistingServe; use App\Models\Serve\NewServeForm;
use PHPUnit\Util\Json;
use DB;

class ExistingServeController extends Controller
{


    public function existingserveform(Request $request)
    {
    $data1=NewServeForm::leftjoin('bussiness_types','bussiness_types.id','=','serves.type_of_bussiness_id')

    // where('survey_app_no',$request->survey_app_no)
    //  ->pluck('photo')
    // ->first();leftjoin('bussiness_types','bussiness_types.id','=','serves.type_of_bussiness_id')

      ->leftjoin('bussiness_registrations','bussiness_registrations.id','=','serves.type_of_licence_id1')
   
      ->select('serves.*','bussiness_types.bussiness_type','bussiness_registrations.bussiness_reg_type1')
        ->orderby('serves.id','desc')
        ->get();

        $ty_licence=BussinessReg::all();
        $ty_bussiness=BussinessType::all();

    $serve_all=NewServeForm::all();

  // return view('ServeForm.new_serve_form',compact('serve_all','ty_bussiness','ty_licence'));
    // $data = NewServeForm ::all();
    //  dd($data1);
    //  exit();
       return view('ServeForm.existing_serve_form',compact('data1','ty_bussiness','ty_licence'));
    }


    public function create(Request $request){

        $store=new ExistingServe;

      //   if ($request->hasFile('photo')) {
      //      $file = $request->file('photo');
      //      $filename = time() . '.' . $file->getClientOriginalExtension();
      //      $file->move(public_path('images/serve_photo'), $filename);
      //      $store->photo = $filename;
  
      //  }   
      
      $store->survey_app_no=$request->get('survey_app_no');
        $store->establishment=$request->get('establishment');
        $store->establishment1=$request->get('establishment1');
        $store->bussiness_owner=$request->get('bussiness_owner');
        $store->bussiness_owner1=$request->get('bussiness_owner1');
        $store->contact_person=$request->get('contact_person');
        $store->contact_person1=$request->get('contact_person1');
        $store->shop_house_no=$request->get('shop_house_no');
        $store->shop_house_no1=$request->get('shop_house_no1');
        $store->bulding=$request->get('bulding');
        $store->bulding1=$request->get('bulding1');
        $store->street_name=$request->get('street_name');
        $store->street_name1=$request->get('street_name1');
        $store->locality=$request->get('locality');
        $store->locality1=$request->get('locality1');
        $store->prabhag_name=$request->get('prabhag_name');
        $store->prabhag_name1=$request->get('prabhag_name1');
        $store->zone_no=$request->get('zone_no');
        $store->zone_no1=$request->get('zone_no1');
        $store->pincode=$request->get('pincode');
        $store->pincode1=$request->get('pincode1');
        $store->email=$request->get('email');
        $store->email1=$request->get('email1');
        $store->wht_app_no=$request->get('wht_app_no');
        $store->wht_app_no1=$request->get('wht_app_no1');
        $store->gst_no=$request->get('gst_no');
        $store->gst_no1=$request->get('gst_no1');
        $store->year=$request->get('year');
        // $store->nature_of_bussiness=$request->get('nature_of_bussiness');
        // $store->nature_of_bussiness1=$request->get('nature_of_bussiness1');
        $store->type_of_bussiness_id=$request->get('type_of_bussiness_id');
        $store->type_of_bussiness_id1=$request->get('type_of_bussiness_id1');
        $store->type_of_licence_id=$request->get('type_of_licence_id');
        $store->type_of_licence_id1=$request->get('type_of_licence_id1');
        $store->no_of_employee_working=$request->get('no_of_employee_working');
        $store->no_of_employee_working1=$request->get('no_of_employee_working1');
        $store->area_of_bussiness=$request->get('area_of_bussiness');
        $store->area_of_bussiness1=$request->get('area_of_bussiness1');
        $store->photo=$request->get('photo');
        
        $store->licence_name=$request->get('licence_name');
        $store->licence_no=$request->get('licence_no');
        $store->licence_name1=$request->get('licence_name1');
        $store->licence_no1=$request->get('licence_no1');
  
        $store->ac_room=$request->get('ac_room');
        $store->non_ac_room=$request->get('non_ac_room');
        $store->ac_room1=$request->get('ac_room1');
        $store->non_ac_room1=$request->get('non_ac_room1');


        $store->save();
        return redirect()->route('existingserve');
    }


    public function get_form_data(Request $request)
            {
              // dd($request->all());
              $data=DB::table('serves')
            //   ->join('add_medicines','add_medicines.data_id','=','data.id')
            //   ->join('primary__sales','primary__sales.id','=','data.batch_no_id')
              ->where([
                'survey_app_no' =>$request->serve,
                //   medicine_id=>$request->medicine,
              ])
              ->select('serves.*')->first();
              return response()->json($data);
            }

            public function get_busnes(Request $request)
            {
              // dd($request->all());
              $data=DB::table('bussiness_types')
              //->join('add_medicines','add_medicines.data_id','=','data.id')
            //   ->join('primary__sales','primary__sales.id','=','data.batch_no_id')
              ->where([
                'bussiness_types.id' =>$request->serve,
                //   medicine_id=>$request->medicine,
              ])
              ->select('bussiness_types.bussiness_type1')->first();
             //  dd($request->all);
              return response()->json($data);
            }
            
            public function get_licence(Request $request)
            {
              // dd($request->all());
              $data=DB::table('bussiness_registrations')
              //->join('add_medicines','add_medicines.data_id','=','data.id')
            //   ->join('primary__sales','primary__sales.id','=','data.batch_no_id')
              ->where([
                'bussiness_registrations.id' =>$request->serve,
                //   medicine_id=>$request->medicine,
              ])
              ->select('bussiness_registrations.bussiness_reg_type1')->first();
             //   dd($request->all);
              return response()->json($data);
            }

            
    public function get_estab(Request $request)
    {
      // dd($request->all());
      $data=DB::table('surveys')
    //   ->join('add_medicines','add_medicines.data_id','=','data.id')
    //   ->join('primary__sales','primary__sales.id','=','data.batch_no_id')
      ->where([
        'surveys.survey_number' =>$request->serve,
        //   medicine_id=>$request->medicine,
      ])
      ->select('surveys.establishment_name','surveys.image')->first();
      return response()->json($data);
    }
}
