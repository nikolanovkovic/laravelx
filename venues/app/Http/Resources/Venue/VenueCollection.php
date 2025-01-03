<?php

namespace App\Http\Resources\Venue;

use Illuminate\Http\Resources\Json\ResourceCollection;

class VenueCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'venues';

    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
