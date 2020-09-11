@extends('frontend.template')
@section('title')
About
@endsection
@section('content')	
<style>
table, th, td {
  border: 1px solid black;
  text-align: center;
  height: 50px;

}
th{
	font-size: 30px; font-weight: bolder;
}
/*img{
	width: 200px;
	height: 150px;
}*/
</style>
    <div class="main">
    <div class="content">
	<!---728x90--->
     <div class="table-responsive">          
	  <table style="width:100%">
	  <tr>
	    
	    <th>Equipment</th>
	    <th >Brand/Origin</th> 
	    <th>Qty</th>
	    <th>Image</th>
	  </tr>
	  <tr>
	    <td>Blow Molding Machine( ½ Liter)</td>
	    <td>Taiwan</td> 
	    <td>1</td>
	    <td>
	    	<img src="{{asset('public/uploads/mechine/bloming.jpg')}}" style="width:200px;	height: 150px;">
	    </td>
	  </tr>
	   <tr>
	    <td>Blow Molding Machine (1 Liter)</td>
	    <td>Taiwan</td> 
	    <td>1</td>
	    <td>
	    	<img src="{{asset('public/uploads/mechine/bloming1.jpg')}}" style="width:200px;	height: 150px;">
	    </td>
	  </tr> 
	   <tr>
	    <td>Injection Molding Machine(90 Tonnage)</td>
	    <td>Taiwan</td> 
	    <td>1</td>
	    <td>
	    	<img src="{{asset('public/uploads/mechine/injection.jpg')}}" style="width:200px;	height: 150px;">
	    </td>
	  </tr> 
	   <tr>
	    <td>Injection Molding Machine(120 Tonnage)</td>
	    <td>Taiwan</td> 
	    <td>1</td>
	    <td>
	    	<img src="{{asset('public/uploads/mechine/injection1.jpg')}}" style="width:200px;	height: 150px;">
	    </td>
	  </tr>  
	   <tr>
	    <td>Cutter</td>
	    <td>Taiwan</td> 
	    <td>1</td>
	    <td>
	    	<img src="{{asset('public/uploads/mechine/cutter.jpg')}}" style="width:200px;	height: 150px;">
	    </td>
	  </tr> 
	   <tr>
	    <td>Air Compressor</td>
	    <td>Taiwan</td> 
	    <td>1</td>
	    <td>
	    	<img src="{{asset('public/uploads/mechine/air.jpg')}}" style="width:200px;	height: 150px;">
	    </td>
	  </tr> 
	  <tr>
	    <td>Water Cooling Tower</td>
	    <td>Taiwan</td> 
	    <td>1</td>
	    <td>
	    	<img src="{{asset('public/uploads/mechine/water.jpg')}}" style="width:200px;	height: 150px;">
	    </td>
	  </tr> 
	  <tr>
	    <td>Water Chiller</td>
	    <td>Taiwan</td> 
	    <td>1</td>
	    <td>
	    	<img src="{{asset('public/uploads/mechine/waterchiller.png')}}" style="width:200px;	height: 150px;">
	    </td>
	  </tr> 
	  
	  
	</table>
  </div>
    			
    </div>
 </div>
</div>
</div>
    @endsection