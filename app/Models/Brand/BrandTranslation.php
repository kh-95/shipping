<?php

namespace App\Models\Brand;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandTranslation extends Model
{
    use HasFactory, Uuid;

    public $timestamps = false;
    protected $fillable = ['name'];
}
