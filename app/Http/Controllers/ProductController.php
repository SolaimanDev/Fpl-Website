<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Product;
use Validator;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products=Product::get();
         $products=Category::Join('products','categories.id','=','products.category_id')->select('products.*', 'categories.categoryName')
         ->orderBy('id', 'desc')->get();         
        return view('backend/product/index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories=Category::all();
       return view('backend/product/create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $product =$request->except('_token');                
         $product_slug=preg_replace('/\s+/u', '-', trim($product['productName']));      
         $product['product_slug']=$product_slug;         
         $validator=Validator::make($request->all(), [
                'productName' => 'required',
                'pictureOne' => 'required',
                
            ]);
                 if ($validator->fails()) {
                    return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                }

            
            if ($request->hasFile('pictureOne')) {
                $slider_image=$request->file('pictureOne');
                $img = Image::make($slider_image)->resize(600, 400);
                $fileType=substr($_FILES['pictureOne']['type'], 6);
                $fileName=rand(1,1000).date('dmyhis').".".$fileType;                
                $upload=$slider_image->move('public/uploads/products/', $fileName );
                $product['pictureOne']=$fileName;
            }  
            if ($request->hasFile('pictureTwo')) {
                $slider_image=$request->file('pictureTwo');
                $img = Image::make($slider_image)->resize(600, 400);
                $fileType=substr($_FILES['pictureTwo']['type'], 6);
                $fileName=rand(1,1000).date('dmyhis').".".$fileType;                
                $upload=$slider_image->move('public/uploads/products/', $fileName );
                $product['pictureTwo']=$fileName;
            }  
            if ($request->hasFile('pictureThree')) {
                $slider_image=$request->file('pictureThree');
                $img = Image::make($slider_image)->resize(600, 400);
                $fileType=substr($_FILES['pictureThree']['type'], 6);
                $fileName=rand(1,1000).date('dmyhis').".".$fileType;                
                $upload=$slider_image->move('public/uploads/products/', $fileName );
                $product['pictureThree']=$fileName;
            }
            
            try{
            Product::create($product);
                
            $bug=0;
            }catch(\Exception $e){
                $bug=$e->errorInfo[1];
            }
             if($bug==0){
            return redirect('product')->with('msg_success','Slider Successfully Inserted');
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
      $product =Product::findOrFail($id); 
      $categories=Category::get();     
      return view('backend/product/edit',compact('categories','product'));
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
        $data=Product::findOrFail($request->id); 
        $input=$request->all(); 
         // dd($input);      
        $product_slug=preg_replace('/\s+/u', '-', trim($input['productName']));      
         $input['product_slug']=$product_slug;         
         $validator=Validator::make($request->all(), [
                'productName' => 'required',                
                
            ]);
                 if ($validator->fails()) {
                    return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                }

        // $input=$request->all();

        if ($request->hasFile('pictureOne')) {
                $pictureOne=$request->file('pictureOne');               
                // dd($img);
                $fileType=substr($_FILES['pictureOne']['type'], 6);
                $fileName=rand(1,1000).date('dmyhis').".".$fileType;
                 $img = Image::make($pictureOne)->resize(600, 600);                
                $upload=$img->save('public/uploads/products/'.$fileName );
                $input['pictureOne']=$fileName;
                  // dd($input['pictureOne']);
                 if($data['pictureOne']!=null and file_exists($fileName)){
                unlink($fileName);
                // return "Successfully";
                }
            }
            
            
        try{
            $data->update($input);
                
            $bug=0;
            }catch(\Exception $e){
                $bug=$e->errorInfo[1];
            }
             if($bug==0){
            return redirect('product')->with('msg_success','Product Successfully Inserted');
            }else{
                return redirect('product')->back()->with('msg_delete','Something Error Found ! ');
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
        $data=Product::findOrFail($id);
        // dd($data);
       $img_path='public/uploads/products/'.$data['pictureOne'];
        if($data['pictureOne']!=null and file_exists($img_path)){
           unlink($img_path);
        }$img_path='public/uploads/products/'.$data['pictureTwo'];
        if($data['pictureTwo']!=null and file_exists($img_path)){
           unlink($img_path);
        }$img_path='public/uploads/products/'.$data['pictureThree'];
        if($data['pictureThree']!=null and file_exists($img_path)){
           unlink($img_path);
        }
       $data->delete();
       return redirect('product')->with('msg_success','Slide Successfully Deleted!');
    }
}
