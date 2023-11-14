<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;
use function Symfony\Component\Translation\t;

class AdminResource extends JsonResource
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
            'id'=> $this->id,
            'name'=>$this->name,
            'email'=>$this->email,
            'email_verified_at'=>$this->email_verified_at,
            'password'=>$this->password,
            'remember_token'=>$this->remember_token,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
            'surname'=>$this->surname,
            'patronymic'=>$this->patronymic,
            'age'=>$this->age,
            'address'=>$this->address,
            'gender'=>$this->gender,
            'admin'=>$this->admin,
        ];
    }
}
