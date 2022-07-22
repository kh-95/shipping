<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartProduct extends Model
{
    use HasFactory , Uuid;

    #region properties
    protected $guarded = ['created_at', 'updated_at'];


 public function Cart(): BelongsTo
 {
     return $this->belongsTo(Brand::class, 'brand_id');
 }

 public function Product(): BelongsTo
 {
     return $this->belongsTo(Category::class, 'category_id');
 }

}
