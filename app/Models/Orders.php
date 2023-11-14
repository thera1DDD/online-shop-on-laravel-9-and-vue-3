<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';

    protected $guarded = false;

    protected $fillable = ['username','phone_number','total','users_id'];

    public function position(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Position::class,'orders_id');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class,'users_id');
    }
}
