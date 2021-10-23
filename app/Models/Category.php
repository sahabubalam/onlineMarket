<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['name','image','slug'];
    // one category has mane subcategory
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
}
