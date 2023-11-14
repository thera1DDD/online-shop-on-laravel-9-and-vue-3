<?php

namespace App\Http\Resources\Recorder;

use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Channel\ChannelResource;
use Illuminate\Http\Resources\Json\JsonResource;

class RecorderResource extends JsonResource
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
            'image_url'=>$this->imageUrl,
            'description'=>$this->description,
            'price'=> $this->price,
            'old_price'=>$this->old_price,
            'count'=>$this->count,
            'category'=>new CategoryResource($this->category),
            'channel'=> new ChannelResource($this->channel)
        ];
    }
}
