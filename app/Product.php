<?php

namespace App;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table;
    protected $fillable = ['productName', 'productDescription', 'product_slug','category_id','pictureOne','pictureTwo','pictureThree','price','oldPrice','serial_no','status'];



 public function categories() 
  {
    return $this->belongsTo(Category::class);
  }
    
}
