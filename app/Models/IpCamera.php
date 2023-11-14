<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IpCamera extends Model
{

    use Filterable;

    protected $table = 'ip_cameras';
    protected $guarded = false;

    public function megapixel(){

        return $this->belongsTo(Megapixels::class,'megapixel_id','id');
    }

    public function category(){

        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function getImageUrlAttribute(){
        return url('storage/'.  $this->preview_image);
    }
    public function cameraImages()
    {
        return $this->hasMany(IpCameraImage::class,'ip_cameras_id','id');
    }



}


