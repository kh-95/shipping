<?php

namespace App\Models\Product;

use App\Models\Brand\Brand;
use App\Models\CartProduct;
use App\Models\Category\Category;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\HasAssetsTrait;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Product extends Model
{
    use HasFactory, Uuid, HasAssetsTrait, Translatable, SoftDeletes;


    #region properties
    protected $appends = ['image'];
    protected $guarded = ['created_at', 'deleted_at'];
    public $translatedAttributes = ['name','price','colour','description','rate','status','count'];
    public $assets = ["image"];
    public $with = ["images", "addedBy"];


    #endregion properties

    public static function boot()
    {
        parent::boot();
        static::saved(function ($model) {
            $model->saveAssets($model, request());
        });
    }


    public function addedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'added_by_id');
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function cartProducts()
    {
        return $this->hasMany(CartProduct::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}