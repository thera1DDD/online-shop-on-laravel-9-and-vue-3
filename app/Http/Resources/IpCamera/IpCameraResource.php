<?php

namespace App\Http\Resources\IpCamera;

use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Megapixel\MegapixelResource;
use Illuminate\Http\Resources\Json\JsonResource;

class IpCameraResource extends JsonResource
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
            'content'=>$this->content,
            'image_url'=>$this->imageUrl,
            'price'=> $this->price,
            'count'=>$this->count,
            'is_published'=> $this->is_published,
            'old_price'=>$this->old_price,
            'category'=>new CategoryResource($this->category),
            'megapixel'=> new MegapixelResource($this->megapixel),
            'camera_images'=>IpCameraImageResource::collection($this->cameraImages)
        ];
    }
}
