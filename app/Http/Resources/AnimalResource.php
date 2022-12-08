<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class AnimalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'type' => $this->resource->type,
            'max_size' => $this->resource->max_size,
            'max_age' => $this->resource->max_age,
            'growth_factor' => $this->resource->growth_factor,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
            'url' => filter_var($this->resource->url, FILTER_VALIDATE_URL)
                ? $this->resource->url
                : asset($this->resource->url),
        ];
    }
}
