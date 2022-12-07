<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ConditionWithAnimalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        $animal = $this->resource->animal;

        return [
             $this->merge(ConditionResource::make($this)),
            'type' => $animal->type,
            'url' => filter_var($animal->url, FILTER_VALIDATE_URL)
                ? $animal
                : asset($animal->url),

            ];
    }
}
