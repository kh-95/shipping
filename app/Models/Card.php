<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Card extends Model
{
    use HasFactory , Uuid , SoftDeletes;
    #region properties
    protected $guarded = ['created_at', 'deleted_at'];
    public $with = ["owner_name"];

    public function Ownername(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_name');
    }
}
