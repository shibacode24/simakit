<?php

namespace App\Http\Controllers\Master;
use App\Models\Master\BussinessType;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeOfBussinessController extends Controller
{
    public function index(Request $request)
    {
        $bussinesstype_all =BussinessType::all();
        return view('Master.type_of_business',compact('bussinesstype_all'));
    }

    public function create(Request $request){
        $store=new BussinessType;
        $store->bussiness_type=$request->get('bussiness_type');
        $store->bussiness_type1=$request->get('bussiness_type1');
      

        $store->charges=$request->get('charges');
        
        $store->save();
        return redirect(route('typeofbussiness'));
    }

    public function delete(Request $request)  
    {  
      $data=BussinessType::where('id',$request->id)->delete();   
        return redirect(route('typeofbussiness'))->with(['success' => true, 'message' => 'Data Deleted Successfully  !']); 
    } 

    public function edit(request $request)
    {
   // echo json_encode($request->all());
      $data1=BussinessType::find($request->id);
      $bussinesstype_all =BussinessType::all();

      
      // exit();
    return view('Master.edit_type_of_bussiness',['edit_data'=>$data1,'bussinesstype_all'=>$bussinesstype_all]);
    }

    public function update(Request $request)
    {
      //dd($request->all());
   $store =BussinessType::find($request->id);
   //echo json_encode($data);
       // exit();
   $store->bussiness_type = $request->bussiness_type;
   $store->bussiness_type1 = $request->bussiness_type1;
   $store->charges = $request->charges;
   $store->save();
   return redirect(route('typeofbussiness'))->with(['success' => true, 'message' => 'Data Update Successfully  !']);
  }
  
}
