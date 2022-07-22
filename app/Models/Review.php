<?php

namespace App\Models;

use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory , Uuid , SoftDeletes;
    #region properties
    protected $guarded = ['created_at', 'deleted_at'];
    public $with = ["addedBy"];
    

    public function addedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'added_by_id');
    }



    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
