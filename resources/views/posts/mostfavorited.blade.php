@extends('posts.layout')

<?php $title=$posts->first(); ?>

@section('title', "الأكثر تفضيلاً  ")

@section('content')
@include('posts.post-sort')
<h4>    الأكثر تفضيلًا   </h4>
@include('posts.index')

@endsection
