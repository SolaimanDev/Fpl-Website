<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Validator;
use App\User;
use App\Setting;
use App\Product;
use App\Category;
use App\Mailus;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $products=Product::get()->count();
        $categories=Category::get()->count();
        $emails=Mailus::get()->count();
        $users=User::get()->count();
        return view('backend/dashboard/index',compact('products','categories','users','emails'));
    }

    public function setting()
    {
        $settingdata = DB::table('settings')->first();
        // dd($settingdata);
        return view('backend/settings/index',compact('settingdata'));
    }

    public function setting_update(Request $request)
    {
      
        $input = $request->all();	
        
		// $rules = array('logo' => 'required');
		// $validator = Validator::make($input, $rules);
		// if ($validator->fails()) {
  //           return Redirect::back()
  //               ->with('msg_delete', "Please choose file jpeg,jpg,png,gif & maximum size 5mb !");
  //       }	
         	
		$logo = $request->file('logo');
        $data = Setting::findOrFail($input['id']);  
		if(!empty($logo)){
		$filename  = time() . '.' . $logo->getClientOriginalExtension();
		 $request->file('logo')->move('public/uploads/logo/', $filename );
               
		  // $data->logo = $filename;  
         
          $input['logo']=$filename;      
          $data->update($input);
        //   $input = Setting::create($input);		 
			return Redirect::back()->with('msg_success', "Information Updated successfully !");
		}
         $data->update($input);
		return Redirect::back()->with('msg_success', "Information Updated successfully !");
	  
    }
}
