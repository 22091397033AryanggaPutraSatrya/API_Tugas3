<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id' => $this->id,
            'username' => $this->username,
            'name' => $this->name,
            'contacts' => ContactResource::collection($this->whenLoaded('contacts')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
