<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory , Uuid , SoftDeletes;
#region properties
protected $guarded = ['created_at', 'deleted_at'];
public $with = ["addedBy"];

#region relationship
public function addedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'added_by_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function cartProducts()
    {
        return $this->belongsToMany(CartProduct::class);
    }
}
