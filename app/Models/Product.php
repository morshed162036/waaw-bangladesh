<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalogue;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Unit;
use App\Models\Stock;
class Product extends Model
{
    use HasFactory;
    public function catalogue(){
        return $this->belongsTo(Catalogue::class,'catalogue_id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id');
    }
    public function unit(){
        return $this->belongsTo(Unit::class,'unit_id');
    }
    public function stock(){
        return $this->hasOne(Stock::class,'product_id');
    }
}
