<?php

namespace App\Http\Controllers\Api;

use App\Models\Tag;
use App\Http\Controllers\Controller;
use App\Repositories\TagRepository;

use App\Http\Resources\Tag\TagCollection;
use App\Http\Resources\Tag\TagResource;

use App\Http\Requests\Tag\CreateTagApiRequest;
use App\Http\Requests\Tag\UpdateTagApiRequest;



use Illuminate\Http\Request;

class TagController extends Controller
{

    private $tagRepository;
    public function __construct(TagRepository $tagRepo){
        $this->tagRepository = $tagRepo;
    }


    public function index()
    {
        $tags = $this->tagRepository->allWithPagination();
        return new TagCollection($tags);
    }


    public function store(CreateTagApiRequest $request)
    {
        $tagData = $request->all();
        $tag = $this->tagRepository->createTag($tagData);
        return new TagResource( $tag );
    }


    public function show(Tag $tag)
    {
        return new TagResource($tag);
    }


    public function update( UpdateTagApiRequest $request, Tag $tag)
    {
        $elements = $request->all();
        $tag = $this->tagRepository->updateTag($elements , $tag);
        return new TagResource( $tag );
    }


    public function destroy(Tag $tag)
    {
        $tag->delete();
        return 'Successfully Deleted' ;
    }
}
