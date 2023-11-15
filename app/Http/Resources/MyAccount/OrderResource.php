<?php

namespace App\Http\Resources\MyAccount;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
          'id' => $this->id,
          'username' => $this->username,
          'phone_number' => $this->phone_number,
          'total' => $this->total,
          'created_at' => $this->created_at
        ];
    }
}
