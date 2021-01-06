<?php

namespace App\Http\Resources\Tag;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TagCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(
                function ($tag) {
                    return[
                        'id' => $tag->id,
                        'name' => $tag->name,
                        'link' => route('tags.show' , [$tag->id]),
                    ];
                }
            ),
        ];
    }
}
