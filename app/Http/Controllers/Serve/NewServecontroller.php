<?php

namespace App\Http\Controllers\Serve;
use App\Models\Serve\NewServeForm;
use App\Http\Controllers\Controller;
use App\Models\Master\BussinessReg;
use Illuminate\Http\Request;
use App\Models\Master\BussinessType;
use App\Models\Master\TypeofLicence;
use App\Models\Serve\ExistingServe;
use DB;

class NewServecontroller extends Controller
{
   public function index()
   {

      $data=NewServeForm::leftjoin('bussiness_types','bussiness_types.id','=','serves.type_of_bussiness_id')

      ->leftjoin('bussiness_registrations','bussiness_registrations.id','=','serves.type_of_licence_id1')
   
        ->select('serves.*','bussiness_types.bussiness_type','bussiness_registrations.bussiness_reg_type1')
          ->orderby('serves.id','desc')
          ->get();

          $ty_licence=BussinessReg::all();
          $ty_bussiness=BussinessType::all();

      $serve_all=NewServeForm::all();

      // echo json_encode( $data);
      // exit();
    return view('ServeForm.new_serve_form',compact('serve_all','ty_bussiness','ty_licence','data'));
   }


   public function showserve()
   {
      $serve_all=NewServeForm::all();

    $data1=ExistingServe::all();

    //  echo json_encode($data1);

      return view('ServeForm.show',compact('serve_all','data1'));
   }

   public function existingserveform()
    {
    return view('ServeForm.show',compact('data1'));

    }

  




   public function create(Request $request){

      $store=new NewServeForm;
      $store->survey_app_no=$request->get('survey_app_no');
      if ($request->hasFile('photo')) {
         $file = $request->file('photo');
         $filename = time() . '.' . $file->getClientOriginalExtension();
         $file->move(public_path('images/serve_photo'), $filename);
         $store->photo = $filename;

     }   
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
      $store->licence_name=$request->get('licence_name');
      $store->licence_no=$request->get('licence_no');
      $store->licence_name1=$request->get('licence_name1');
      $store->licence_no1=$request->get('licence_no1');

      $store->ac_room=$request->get('ac_room');
      $store->non_ac_room=$request->get('non_ac_room');
      $store->ac_room1=$request->get('ac_room1');
      $store->non_ac_room1=$request->get('non_ac_room1');
      
      $store->save();
     $var=  $store->id;
    //  echo json_encode($var);
    //  exit();
      return redirect()->back()->with(['var'=>$var]);
  }

  
  public function delete(Request $request)  
  {  
    $data=NewServeForm::where('id',$request->id)->delete();   
    //dd($request->id);
    return back();
  } 

  public function edit(request $request)
    {
   // echo json_encode($request->all());
      $data1=NewServeForm::find($request->id);
     // $serve_all=NewServeForm::all();

      $serve_all=NewServeForm::leftjoin('bussiness_types','bussiness_types.id','=','serves.type_of_bussiness_id')

      ->leftjoin('bussiness_registrations','bussiness_registrations.id','=','serves.type_of_licence_id1')
   
        ->select('serves.*','bussiness_types.bussiness_type','bussiness_registrations.bussiness_reg_type1')
          ->orderby('serves.id','desc')
          ->get();

          $ty_licence=BussinessReg::all();
          $ty_bussiness=BussinessType::all();

//dd($serve_all);
//dd($data1);
      // exit();
    return view('ServeForm.edit_new_serve',['edit_data'=>$data1,'serve_all'=>$serve_all , 'ty_licence'=>$ty_licence,'ty_bussiness'=>$ty_bussiness]);
    }



    
    public function update(Request $request)
    {
      
   $store =NewServeForm::find($request->id);
   
       
       $store->survey_app_no=$request->get('survey_app_no');
       if ($request->hasFile('photo')) {
          $file = $request->file('photo');
          $filename = time() . '.' . $file->getClientOriginalExtension();
          $file->move(public_path('images/serve_photo'), $filename);
          $store->photo = $filename;
 
      }   
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
      //  $store->nature_of_bussiness=$request->get('nature_of_bussiness');
      //  $store->nature_of_bussiness1=$request->get('nature_of_bussiness1');
       $store->type_of_bussiness_id=$request->get('type_of_bussiness_id');
       $store->type_of_bussiness_id1=$request->get('type_of_bussiness_id1');
       $store->type_of_licence_id=$request->get('type_of_licence_id');
       $store->type_of_licence_id1=$request->get('type_of_licence_id1');
       $store->no_of_employee_working=$request->get('no_of_employee_working');
       $store->no_of_employee_working1=$request->get('no_of_employee_working1');
       $store->area_of_bussiness=$request->get('area_of_bussiness');
       $store->area_of_bussiness1=$request->get('area_of_bussiness1');
       $store->licence_name=$request->get('licence_name');
       $store->licence_no=$request->get('licence_no');
       $store->licence_name1=$request->get('licence_name1');
       $store->licence_no1=$request->get('licence_no1');
 
       $store->ac_room=$request->get('ac_room');
       $store->non_ac_room=$request->get('non_ac_room');
       $store->ac_room1=$request->get('ac_room1');
       $store->non_ac_room1=$request->get('non_ac_room1');
       
       $store->save();
       return redirect(route('showserve'))->with(['success' => true, 'message' => 'Data Update Successfully  !']);
  }




  public function edit_existing(request $request)
    {
   // echo json_encode($request->all());
      $data1=ExistingServe::find($request->id);
     // $serve_all=NewServeForm::all();

      $serve_all=ExistingServe::leftjoin('bussiness_types','bussiness_types.id','=','existing_serves.type_of_bussiness_id')

      ->leftjoin('bussiness_registrations','bussiness_registrations.id','=','existing_serves.type_of_licence_id1')
   
        ->select('existing_serves.*','bussiness_types.bussiness_type','bussiness_registrations.bussiness_reg_type1')
          ->orderby('existing_serves.id','desc')
          ->get();

          $ty_licence=BussinessReg::all();
          $ty_bussiness=BussinessType::all();

//dd($serve_all);
// dd($data1);
      // exit();
    return view('ServeForm.edit_existing_form',['edit_data'=>$data1,'serve_all'=>$serve_all , 'ty_licence'=>$ty_licence,'ty_bussiness'=>$ty_bussiness]);
    }



    
    public function update_existing(Request $request)
    {
      
   $store =ExistingServe::find($request->id);
   
       echo json_encode($store);
       exit();
       
       $store->survey_app_no=$request->get('survey_app_no');
       
       if ($request->hasFile('photo')) {
          $file = $request->file('photo');
          $filename = time() . '.' . $file->getClientOriginalExtension();
          $file->move(public_path('images/serve_photo'), $filename);
          $store->photo = $filename;
 
      }   
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
      //  $store->nature_of_bussiness=$request->get('nature_of_bussiness');
      //  $store->nature_of_bussiness1=$request->get('nature_of_bussiness1');
       $store->type_of_bussiness_id=$request->get('type_of_bussiness_id');
       $store->type_of_bussiness_id1=$request->get('type_of_bussiness_id1');
       $store->type_of_licence_id=$request->get('type_of_licence_id');
       $store->type_of_licence_id1=$request->get('type_of_licence_id1');
       $store->no_of_employee_working=$request->get('no_of_employee_working');
       $store->no_of_employee_working1=$request->get('no_of_employee_working1');
       $store->area_of_bussiness=$request->get('area_of_bussiness');
       $store->area_of_bussiness1=$request->get('area_of_bussiness1');
       $store->licence_name=$request->get('licence_name');
       $store->licence_no=$request->get('licence_no');
       $store->licence_name1=$request->get('licence_name1');
       $store->licence_no1=$request->get('licence_no1');
 
       $store->ac_room=$request->get('ac_room');
       $store->non_ac_room=$request->get('non_ac_room');
       $store->ac_room1=$request->get('ac_room1');
       $store->non_ac_room1=$request->get('non_ac_room1');
 
       
       $store->save();
       return redirect(route('showserve'))->with(['success' => true, 'message' => 'Data Update Successfully  !']);
  }

  public function delete_existing(Request $request)  
  {  
    $data=ExistingServe::where('id',$request->id)->delete();   
    //dd($request->id);
    return back();
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
}
