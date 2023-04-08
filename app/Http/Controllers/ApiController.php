<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\cmakeit;
use Hash;

class ApiController extends Controller
{
    public function login(Request $request)
    {
		  //User::find(1)->update(['password'=>Hash::make(1111)]);
        $checkuser = User::where('name', $request->username)->first();
        if ($checkuser && Hash::check($request->password, $checkuser->password)) {
            return response()->json(['status' => true, 'data' => $checkuser]); //array
        } else {
            return response()->json(['status' => false, 'message' => 'User Not Found']); //array
        }
    }
	
	
	
	 public function get_user(Request $request)
    {
        //  dd($request->all());
          $get_user = User::where('id', $request->user_id)
            ->first();


        if ($get_user) {
            return response()->json(['status' => true, 'data' => $get_user]);
        } else {
            return response()->json(['status' => false, 'message' => 'data not found']);
        }
    }

	 public function survey(Request $request)
    { 
		 
		 $new_name = "";
		 if ($request->image != 'null') {
                      //$image = $request->image;  // your base64 encoded
        //$image = str_replace('data:image/png;base64,', '', $image);
       // $image = str_replace(' ', '+', $image);
                //$new_name = rand(111,222) .  time() . '.'.$request->type;
                //file_put_contents(public_path() . '/images/' . $new_name, base64_decode($image));


            $extension= explode('/', mime_content_type($request->image))[1];
            $data = base64_decode(substr($request->image, strpos($request->image, ',') + 1));
            $new_name='survey'.rand(000,999). time() . '.' .$extension;
            file_put_contents(public_path('images/') . '/' . $new_name, $data);
            }
		 
        $insert = cmakeit::create([
          'user_id' => $request->user_id,
                'survey_number' => $request->survey_number,
                'image' => $new_name,
                'establishment_name' => $request->establishment_name, 
        ]);
        if($insert) {
            return response()->json(['status' => true, 'message' => 'Data Has Been Submitted']);
        } else {
            return response()->json(['status' => false, 'message' => 'Data not found']);
        
        }
	 }
	
	public function get_survey(Request $request)
    {
        
        $get_survey = cmakeit:: where('user_id',$request->user_id)
       ->whereDate('created_at',$request->date)
       ->skip($request->skip)
       ->take(20)
        ->get();

      if ($get_survey ->isEmpty() )

         {
           
            return response()->json(['status' => false, 'message' => 'data not found']);

        } else {
       
 
            return response()->json(['status' => true, 'data' => $get_survey]);

        }
    }
  
  
  public function get_count(Request $request)
    {
        
        $get_count = cmakeit::where('user_id',$request->user_id)
        ->count();

        if ($get_count) {
            return response()->json(['status' => true, 'data' => $get_count]);
        } else {
            return response()->json(['status' => false, 'message' => 'data not found']);
        }
    }
 
}

//simakeit
