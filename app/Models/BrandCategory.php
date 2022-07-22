<?php

namespace App\Models;

use App\Models\Brand\Brand;
use App\Models\Category\Category;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BrandCategory extends Model
{
    use HasFactory , Uuid;

       #region properties
       protected $guarded = ['created_at', 'updated_at'];


    public function Brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }






}
