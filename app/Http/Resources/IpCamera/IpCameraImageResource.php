<?php

namespace App\Http\Resources\IpCamera;

use App\Http\Resources\Category\CategoryResource;
use Illuminate\Http\Resources\Json\JsonResource;

class IpCameraImageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'ip_cameras_id'=>$this->ip_cameras_id,
            'url'=>$this->imageUrl,

        ];
    }
}
