<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory ,Uuid;

    protected $guarded = ['created_at', 'updated_at'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
