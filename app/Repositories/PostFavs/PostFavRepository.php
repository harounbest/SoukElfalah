<?php

namespace App\Repositories\PostFavs;

use App\Models\PostFav;

class PostFavRepository implements PostFavInterface
{
    protected $favoritedPost;

    public function __construct(PostFav $favoritedPost)
    {
        $this->favoritedPost=$favoritedPost;
    }

    public function store($request)
    {
         $request->user()->post_favs()->attach($request->id);
         
    }

    public function show($id)
    {
            $favoritedPost= \Auth::user()->post_favs()->wherePost_id($id)->first();
            return $favoritedPost? true:false;
    }

  
    public function delete($id)
    {
        \Auth::user()->post_favs()->detach($id);
    }
    public function all()
    {
       return  \Auth::user()->post_favs;
    }
}

?>