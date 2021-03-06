<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApiUserResource extends JsonResource
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
            'id'         => $this->id,
            'name'       => $this->name,
            'age'        => $this->age,
            'points'     => $this->points,
            'address'    => $this->address,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at
        ];        
    }
}
