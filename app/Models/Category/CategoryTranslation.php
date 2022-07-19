<?php

namespace App\Models\Category;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    use HasFactory, Uuid;

    public $timestamps = false;
    protected $fillable = ['name'];
}
