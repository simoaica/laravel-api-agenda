<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class AgendaResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'tel' => $this->tel,
            'adress' => $this->adress,
            'email' => $this->email,
            'website' => $this->website
        ];
    }
}
