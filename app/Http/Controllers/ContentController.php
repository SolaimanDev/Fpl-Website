<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submenu;
use App\Menu;
use Validator;
use App\Content;
use Image;
class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    $contents=Content::all();
       $contents=Content::leftJoin('submenus','contents.submenu_id','=','submenus.id')->get();
    //    dd($contents);
       return view('backend.content.index',compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $MenuData=Submenu::get();        
         $menudata=Submenu::leftJoin('menus','submenus.menu_id','=','menus.id')->get(); 
        //  dd($menudata);  
        return view('backend.content.create',compact('menudata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $content_slug=preg_replace('/\s+/u', '-', trim($input['title']));      
        $input['content_slug']=$content_slug;
        $validator = Validator::make($input, [
                    'title'        => 'required',
                    'content_slug' => "required|unique:contents,content_slug|max:191",
                    'description' => 'required',                    
                    'submenu_id' => 'required',
                ]);            
        
                if ($validator->fails()) {
                    return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                }

            if ($request->hasFile('picture')) {
                 $picture=$request->file('picture');
                $img = Image::make($picture)->resize(900, 400);
                $fileType=substr($_FILES['picture']['type'], 6);
                $fileName=rand(1,1000).date('dmyhis').".".$fileType;
                /*$fileName=$photo->getClientOriginalName();*/
                $img->save('public/uploads/'.$fileName );
                $input['picture']=$fileName;              
                  
                }

        try{
            // $data->update($input);
            $new_id=Content::create($input);   
            $bug=0;
            }catch(\Exception $e){
                $bug=$e->errorInfo[1];
            }
             if($bug==0){
            return redirect()->back()->with('msg_success','Successfully Inserted');
            }else{
                return redirect()->back()->with('msg_delete','Something Error Found ! ');
            }
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
        return $id;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }




     public function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
        return 'n-a';
        }

        return $text;
    }
}
