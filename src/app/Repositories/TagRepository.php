<?php

namespace App\Repositories;
use App\Models\Tag;

class TagRepository {

    public function all()
    {
        return Tag::all();
    }

    public function allWithPagination()
    {
        return Tag::paginate(10);
    }

    public function createTag($tag){

        $createdTag = Tag::create($tag);
        return $createdTag;
    }

    public function updateTag($elements , $tag){
        $status = $tag->update($elements);
        return $tag;
    }

}
