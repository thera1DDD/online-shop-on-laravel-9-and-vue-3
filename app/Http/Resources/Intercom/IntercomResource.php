<?php

namespace App\Http\Resources\Intercom;

use Illuminate\Http\Resources\Json\JsonResource;

class IntercomResource extends JsonResource
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
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'resolution'=>$this->resolution,
            'image_url'=>$this->imageUrl,
        ];
    }
}
