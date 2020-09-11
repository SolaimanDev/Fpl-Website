<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Setting;
use App\Slider;
use App\Mailus;
use App\Menu;
use App\Category;
use App\Submenu;
use App\Product;
use DB;
use Redirect;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
         $slider=Slider::orderBy('serial_num', 'asc')->take(3)->get();         
         $settings=Setting::first();
         $menu = Menu::all()->load('submenu');
         $categories = Category::where('status',1)->get();
         $products = Product::where('status',1)->orderBy('id','desc')->limit(12)->get();
          // dd($products); 
        // $content=Content::where();       
        return view('frontend/index', compact('settings','slider','menu','categories','products'));
         
    }

    public function contact()
    {
         $settings=Setting::first();
        return view('frontend/contact', compact('settings'));
    }
    public function service()
    {
         $settings=Setting::first();
        return view('frontend/service', compact('settings'));
    }
    public function gallery()
    {
         $settings=Setting::first();
        return view('frontend/gallery', compact('settings'));
    }
// ----------------------> Mail <---------------

    public function contactus(Request $request)
    {
    
    $settings=Setting::first();  
        $data=array(
            'name'=>$request->name,
            'subject'=>$request->subject,
            'email'=>$request->email,
            'message'=>$request->message,
            'to'=>$settings->app_email,
        );

    Mail::to('info@fpl.com.bd')->send(new ContactMail($data)); 

    $mail = Mailus::create($data);
    if($mail)
    {
        return Redirect::back()->with('msg_success', "Success!");
    }else{
        return Redirect::back()->with('msg_success', "Sorry, Your Mail Not reach us, Please Try Again!");
    }  
    }

    public function about()
    {
         $settings=Setting::first();
        return view('frontend/about', compact('settings'));
    }



public function productDetails($id,$slug)
{
   $settings=Setting::first();
   $product =Product::findOrFail($id);

   return view('frontend/details',compact('settings','product'));
}

public function categoryByProducts($id)
{
  $settings=Setting::first();
  $products=Product::with('categories')->where('category_id',$id)->where('status',1)->get();
  $category=Category::where('id',$id)->first();
  // dd($category);
  return view('frontend/category_by_product',compact('settings','products','category'));

}

public function search(Request $request)
{
  if($request->ajax())
{
$output="";
$products=DB::table('products')->where('productName','LIKE','%'.$request->search."%")->get();
if($products)
{
foreach ($products as $key => $product) {
$output.='<div>'.
'<td>'.$product->productName.'</td>'.
'</div>';
}
return Response($output);
   }
   }

}

public function clients()
{    
    $settings=Setting::first();
    return view('frontend/clients',compact('settings'));
}
public function machine()
{    
    $settings=Setting::first();
    return view('frontend/mechine',compact('settings'));
}


}
