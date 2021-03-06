<?php

namespace App\Models;
use App\Models\Category;
use App\Models\Childcategory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable=['name','category_id','slug'];
    public function category()
    {
        //subcategory table category_id belongsto category table id

        return $this->belongsTo(Category::class,'category_id','id');


    }
    // sub category has many childcategory
    public function childcategories()
    {
        return $this->hasMany(Childcategory::class);
    }
}
