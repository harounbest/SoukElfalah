@extends('posts.layout')

<?php $title=$posts->first(); ?>

@section('title', " الأحدث  ")

@section('content')
@include('posts.post-sort')

<h4>  أحدث  المقالات   </h4>
@include('posts.index')

@endsection

