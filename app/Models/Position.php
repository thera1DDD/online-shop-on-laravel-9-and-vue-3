<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'positions';
    protected $guarded = false;
    protected $fillable = ['qty', 'title', 'image_url', 'price', 'subtotal', 'orders_id'];

}
