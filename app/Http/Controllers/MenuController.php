<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
// use App\Foo;
use App\Menu;
use App\Submenu;
use Validator;
class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menudata = Menu::get();   
        $alldata= Menu::all(); 
        $submenu=Submenu::leftJoin('menus','submenus.menu_id','=','menus.id')->get();   
    
        return view('backend/menu/create',compact('menudata','alldata','submenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $menu =$request->except('_token');       
        $menu['url']=str_slug($menu['url'],'-');
        Validator::make($request->all(), [
                'menu_name' => 'required',
                'url' => 'required'
            ]);   
        $menu = Menu::create($menu);
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
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        
        
        $data=Menu::findOrFail($id);
       
        return view('backend/menu/edit',compact('data'));
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
        $input = $request->all();
        $data=Menu::findOrFail($request->id);
        
        $validator = Validator::make($input, [
                    'menu_name'    => 'required',
                    'url'          => 'required',
                ]);
        
                if ($validator->fails()) {
                    return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                }
        try{
            $data->update($input);
                
            $bug=0;
            }catch(\Exception $e){
                $bug=$e->errorInfo[1];
            }
             if($bug==0){
            return redirect()->route('menu.index')->with('msg_success','Successfully Inserted');
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
        $data=Submenu::findOrFail($id);
        dd($data);
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

public function submenu_store(Request $request)
{
    
    $submenu =$request->except('_token');
    $submenu['submenu_slug']=str_slug($submenu['submenu_slug'],'-');  
         $validator = Validator::make($request->all(), [
            'submenu_name' => 'required',
            'submenu_slug' =>'required|alpha_dash|unique:submenus,submenu_slug',
        ]);
        
                if ($validator->fails()) {
                    return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                }
        try{
            $submenu = Submenu::create($submenu);
                
            $bug=0;
            }catch(\Exception $e){
                $bug=$e->errorInfo[1];
            }
             if($bug==0){
            return redirect()->route('menu.index')->with('msg_success','Successfully Inserted');
            }else{
                return redirect()->back()->with('msg_delete','Something Error Found ! ');
            }

}



public function submenu_edit($id)
{

    $data=Submenu::findOrFail($id);   
    $menudata = Menu::get(); 
    return view('backend/menu/submenu_edit',compact('data','menudata'));
}


public function update_submenu(Request $request)
{
    $input = $request->all();
    $data=Submenu::findOrFail($request->id);        
    $validator = Validator::make($input, [
               'submenu_name' => 'required',
               'submenu_slug' =>'required',
            ]);
    
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
    try{
        $data->update($input);
            
        $bug=0;
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
        }
         if($bug==0){
        return redirect()->route('menu.index')->with('msg_success','Successfully Inserted');
        }else{
            return redirect()->back()->with('msg_delete','Something Error Found ! ');
        }
}



public function submenuDelete($id)
{

   $data=Submenu::findOrFail($id);
   dd($data);
        
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
