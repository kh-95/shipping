<?php

namespace App\Models\Brand;

use App\Models\BrandCategory;
use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\HasAssetsTrait;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Brand extends Model
{
    use HasFactory, Uuid, HasAssetsTrait, Translatable, SoftDeletes;


    #region properties
    protected $guarded = ['created_at', 'deleted_at'];
    public $translatedAttributes = ['name'];
    public $with = ["addedBy"];


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

    public function brandCategories()
    {
        return $this->hasMany(BrandCategory::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
