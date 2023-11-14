<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IpCameraImage extends Model
{
    protected $table = 'ip_camera_images';
    protected $guarded = false;

    public function getImageUrlAttribute(){
        return url('storage/'.  $this->file_path);
    }
}
