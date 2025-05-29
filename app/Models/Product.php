<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $guarded = ['id'];
    public function pro_to_cat(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function pro_to_sub(){
        return $this->belongsTo(subCategory::class, 'subcategory_id');
    }
}
