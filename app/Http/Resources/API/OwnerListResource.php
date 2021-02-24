<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;


class OwnerListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->fullName(),
            "telephone" => $this->formattedPhoneNumber(),
            "address" => $this->fullAddress(),
        ];
    }
}
