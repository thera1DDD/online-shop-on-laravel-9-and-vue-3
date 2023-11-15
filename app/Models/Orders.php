<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';

    protected $guarded = false;

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['username','phone_number','total','users_id','created_at', 'updated_at'];

    public function position(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Position::class,'orders_id');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class,'users_id');
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d.m.Y H:i:s');
    }
}
