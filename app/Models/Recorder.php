<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recorder extends Model
{
    use Filterable;

    protected $table = 'recorders';
    protected $guarded = false;

    public function channel(){

        return $this->belongsTo(Channel::class,'channel_id','id');
    }

    public function category(){

        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function getImageUrlAttribute(){
        return url('storage/'.  $this->preview_image);
    }
}
