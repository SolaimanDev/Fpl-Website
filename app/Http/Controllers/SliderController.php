<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Slider;
use Validator;
use Image;
use file;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider=Slider::get(); 
        // dd($slider);
        return view('backend/slider/index',compact('slider'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                    'slider_image' => 'image|max:1000',   
                ]);
                if ($validator->fails()) {
                    return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                }
                
            $input = $request->all();
            // dd($input);
            if ($request->hasFile('slider_image')) {
                $slider_image=$request->file('slider_image');
                $img = Image::make($slider_image)->resize(600, 400);
                $fileType=substr($_FILES['slider_image']['type'], 6);
                $fileName=rand(1,1000).date('dmyhis').".".$fileType;
                /*$fileName=$photo->getClientOriginalName();*/
                $upload=$slider_image->move('public/uploads/sliders/', $fileName );
                $input['slider_image']=$fileName;
            }
            
            try{
            Slider::create($input);
                
            $bug=0;
            }catch(\Exception $e){
                $bug=$e->errorInfo[1];
            }
             if($bug==0){
            return redirect('slider')->with('msg_success','Slider Successfully Inserted');
            }else{
                return redirect()->back()->with('msg_delete','Something Error Found ! ');
            }
    }


  
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data=Slider::findOrFail($id);
        return view('backend.slider.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function setting_update(Request $request)
    {
      
        $input = $request->all();	
        
		$rules = array('app_name' => 'required','map'=>'required','phone'=>'required','mobile'=>'required','app_email'=>'required');
		$validator = Validator::make($input, $rules);
		if ($validator->fails()) {
            return Redirect::back()
                ->with('msg_delete', "Please choose file jpeg,jpg,png,gif & maximum size 5mb !");
        }	
        $data = Setting::findOrFail($input['id']); 	
		$logo = $request->file('logo');
		if(!empty($logo)){
		$filename  = time() . '.' . $logo->getClientOriginalExtension();
		 $request->file('logo')->move('public/uploads/logo/', $filename );
               
		  // $data->logo = $filename;  
         
          $input['logo']=$filename; 
         $data->update($input);
              
         return Redirect::back()->with('msg_success', "Information Updated successfully !");     
         
		}
         $data->update($input);
              
            return Redirect::back()->with('msg_success', "Information Updated successfully !");
		// return Redirect::back()->with('msg_delete', "Image Upload Failed!");
	  
    }


    public function update(Request $request, $id)
    {
        $data=Slider::findOrFail($request->id);        
        $validator = Validator::make($request->all(), [
                    'slider_image' => 'image|max:1000',   
                ]);
                if ($validator->fails()) {
                    return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                }                
            $input = $request->all();
            if ($request->hasFile('slider_image')) {
                $slider_image=$request->file('slider_image');
                $fileType=substr($_FILES['slider_image']['type'], 6);
                $fileName=rand(1,1000).date('dmyhis').".".$fileType;
                /*$fileName=$photo->getClientOriginalName();*/
                $upload=$slider_image->move('public/uploads/sliders/', $fileName );
                $input['slider_image']=$fileName;
                if($data['slider_image']!=null and file_exists($fileName)){
                unlink($fileName);
               
                }
            }           
             $data->update($input);
        try{
           
            $bug=0;
            }catch(\Exception $e){
                $bug=$e->errorInfo[1];
            }
             if($bug==0){
            return redirect('/slider')->with('msg_success','Successfully Inserted');
            }else{
                return redirect()->back()->with('msg_delete','Something Error Found ! ');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data=Slider::findOrFail($id);
       $img_path='public/uploads/sliders/'.$data['slider_image'];
        if($data['slider_image']!=null and file_exists($img_path)){
           unlink($img_path);
        }
       $data->delete();
       return redirect('slider')->with('msg_success','Slide Successfully Deleted!');
    }
}
