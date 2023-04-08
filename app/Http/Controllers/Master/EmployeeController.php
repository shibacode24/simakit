<?php

namespace App\Http\Controllers\Master;
use App\Models\Master\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\State;
use App\Models\Master\City;


class EmployeeController extends Controller
{
    public function index()
    { $employee_all=Employee::leftjoin('states','states.id','=','employees.state_id')
        ->leftjoin('citys','citys.id','=','employees.city_id')
        ->select('employees.*','states.state','citys.city')
          ->orderby('employees.id','desc')
          ->get();
        $state=State::all();
        $city=city::all();
        return view('Master.employee',compact('employee_all','state','city'));
    }

    public function create(Request $request)
    {

        $request->validate([
            
            'mobile' => 'required|min:10|max:10|unique',
            'email'=>'unique',
            'account_no'=>'unique',
        ]); 
           
        $store=new Employee;
        $store->name=$request->get('name');
        $store->address=$request->get('address');
        $store->pincode=$request->get('pincode');
        $store->email=$request->get('email');
        $store->mobile=$request->get('mobile');
        $store->state_id=$request->get('state_id');
        $store->city_id=$request->get('city_id');

        if ($request->hasFile('adhar')) {
            $file = $request->file('adhar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/employee_adhar'), $filename);
            $store->adhar = $filename;

        }   

        if ($request->hasFile('pan')) {
            $file = $request->file('pan');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/employee_pan'), $filename);
            $store->pan = $filename;

        } 
       


        $store->save();
        return redirect(route('employee'));
    }


    public function delete(Request $request)  
    {  
      $data=Employee::where('id',$request->id)->delete();   
        return redirect(route('employee'))->with(['success' => true, 'message' => 'Data Deleted Successfully  !']); 
    } 

    public function edit(request $request)
    {
   // echo json_encode($request->all());
      $data1=Employee::find($request->id);
      $employee_all=Employee::leftjoin('states','states.id','=','employees.state_id')
      ->leftjoin('citys','citys.id','=','employees.city_id')
      ->select('employees.*','states.state','citys.city')
        ->orderby('employees.id','desc')
        ->get();
      $state=State::all();
      $city=city::all();
      
      // exit();
    return view('Master.edit_employee',['edit_data'=>$data1,'employee_all'=>$employee_all,'state'=>$state,'city'=>$city]);
    }

    public function update(Request $request)
    {


      //dd($request->all());
   $store =Employee::find($request->id);
   $store->name=$request->get('name');
   $store->address=$request->get('address');
   $store->pincode=$request->get('pincode');
   $store->email=$request->get('email');
   $store->mobile=$request->get('mobile');
   $store->state_id=$request->get('state_id');
   $store->city_id=$request->get('city_id');

   if ($request->hasFile('adhar')) {
       $file = $request->file('adhar');
       $filename = time() . '.' . $file->getClientOriginalExtension();
       $file->move(public_path('images/employee_adhar'), $filename);
       $store->adhar = $filename;

   }   

   if ($request->hasFile('pan')) {
       $file = $request->file('pan');
       $filename = time() . '.' . $file->getClientOriginalExtension();
       $file->move(public_path('images/employee_pan'), $filename);
       $store->pan = $filename;

   } 
  


   $store->save();
   return redirect(route('employee'))->with(['success' => true, 'message' => 'Data Update Successfully  !']);
  }
}
