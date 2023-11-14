<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intercom extends Model
{
    use Filterable;

    protected $table = 'intercoms';
    protected $guarded = false;

    public function getImageUrlAttribute(){
        return url('storage/'.  $this->preview_image);
    }
}
