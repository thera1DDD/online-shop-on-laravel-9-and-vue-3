<?php

namespace App\Http\Resources\Cable;

use Illuminate\Http\Resources\Json\JsonResource;

class CableResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return
        [
            'id'=>$this->id,
            'title'=>$this->title,
            'type'=>$this->type,
            'description'=>$this->description,
            'price'=>$this->price,
            'old_price'=>$this->old_price,
            'image_url'=>$this->imageUrl,
        ];
    }
}
