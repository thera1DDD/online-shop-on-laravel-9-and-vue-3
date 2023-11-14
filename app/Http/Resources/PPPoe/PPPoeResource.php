<?php

namespace App\Http\Resources\PPPoe;

use Illuminate\Http\Resources\Json\JsonResource;

class PPPoeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'count'=>$this->count,
            'capacity'=>$this->capacity,
            'image_url'=>$this->imageUrl,
            'port'=>$this->port
        ];
    }
}
