<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Mailus;
use Validator;
use Image;
use Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('backend.user.index',compact('users'));
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
        $input = $request->all();
        // dd($input);
        $validator = Validator::make($input, [
                    'name' => ['required', 'string', 'max:255'],
                    
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'username' => ['required', 'string','max:255'],
                    'password' => ['required', 'string', 'min:6', 'confirmed'],
                    'picture' => ['required'],
                ]);            
     
                if ($validator->fails()) {
                    return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                }
               // dd($validator);

            if ($request->hasFile('picture')) {
                 $picture=$request->file('picture');
                $img = Image::make($picture)->resize(250, 300);
                $fileType=substr($_FILES['picture']['type'], 6);
                $fileName=rand(1,1000).date('dmyhis').".".$fileType;
                /*$fileName=$photo->getClientOriginalName();*/
                $img->save('public/uploads/users/'.$fileName );
                $input['picture']=$fileName;              
                  
                }
         
        try{   
            User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'username' => $input['username'],
            'phone' => $input['phone'],
            'picture' => $input['picture'],
            'address' => $input['address'],              
            'password' => Hash::make($input['password']),
        ]);    
         
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
       $data=User::findOrFail($id);
       
       return view('backend.user.edit',compact('data'));
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
        $data=User::findOrFail($request->id);
        
        $validator = Validator::make($request->all(), [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255'],
                    'username' => ['required', 'string','max:255'],
                    'password' => ['required', 'string','max:255'],
                                         
                ]);
        // dd($validator);
                if ($validator->fails()) {
                    return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                }                

        $input=$request->all();  
        // dd($input);   
        if ($request->hasFile('picture')) {
                 $picture=$request->file('picture');         
                
                $fileType=substr($_FILES['picture']['type'], 6);
                $fileName=rand(1,1000).date('dmyhis').".".$fileType;
                 $img = Image::make($picture)->resize(600, 600);                
                $upload=$img->save('public/uploads/users/'.$fileName );
                $input['picture']=$fileName;                  
                 if($data['picture']!=null and file_exists($fileName)){
                unlink($fileName);                
                }
                 $data->update([
                'name' => $input['name'],
                'email' => $input['email'],
                'username' => $input['username'],
                'phone' => $input['phone'],
                'picture' => $input['picture'],
                'address' => $input['address'],              
                'password' => Hash::make($input['password']),
             ]);
            }else{
                 $data->update([
                'name' => $input['name'],
                'email' => $input['email'],
                'username' => $input['username'],
                'phone' => $input['phone'],
                // 'picture' => $input['picture'],
                'address' => $input['address'],              
                'password' => Hash::make($input['password']),
             ]);
            }           
            
        
        try{
            
           
            $bug=0;
            }catch(\Exception $e){
                $bug=$e->errorInfo[1];
            }
             if($bug==0){
            return redirect('/user')->with('msg_success','Successfully Inserted');
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
         $data=User::findOrFail($id);
       
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
       return redirect()->back('/user')->with('msg_delete','Something Error Found ! ');

        }
        elseif($bug>0){
       return redirect()->back()->with('msg_delete','Some thing error found !');

        }
    }

public function emailList()
{
    $emails=Mailus::paginate(5);
    return view('email.emaillist',compact('emails'));
}


}
