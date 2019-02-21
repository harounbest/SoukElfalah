<?php

namespace App\Repositories\PostFavs;

interface PostFavInterface
{
    public function store($request);

    public function show($id);

    public function delete($id);
}

?>