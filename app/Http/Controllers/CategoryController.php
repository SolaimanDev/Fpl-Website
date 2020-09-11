<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Category;
use Validator;

class CategoryController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories=Category::get();
       return view('backend/category/index',compact('categories'));
    }

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
       $category =$request->except('_token');      
        Validator::make($request->all(), [
                'categoryName' => 'required',                
                'status' => 'required'                
            ]);   
        $category = Category::create($category);
        return Redirect::back()->with('msg_success', "Success!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $data=Category::findOrFail($id);
        return view('backend/category/edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=Category::findOrFail($request->id);        
        $validator = Validator::make($request->all(), [                   
                    'categoryName'=> 'required', 
                    'categoryDescription'=> 'required', 
                    
                ]);
        
                if ($validator->fails()) {
                    return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                }

        $input=$request->all();
        try{
            $data->update($input);
                
            $bug=0;
            }catch(\Exception $e){
                $bug=$e->errorInfo[1];
            }
             if($bug==0){
            return redirect()->route('category.index')->with('msg_success','Successfully Inserted');
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
         $data=Category::findOrFail($id);
          // dd($data);
       try{
            $data->delete();
            $bug=0;
            $error=0;
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
            $error=$e->errorInfo[2];
        }
        if($bug==0){
       return redirect()->back()->with('msg_success','Successfully Deleted!');
        }elseif($bug==1451){
       return redirect()->back()->with('error','This Data is Used anywhere ! ');

        }
        elseif($bug>0){
       return redirect()->back()->with('msg_delete','Some thing error found !');

        }
    }
}
