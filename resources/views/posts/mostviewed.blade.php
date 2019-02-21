
@extends('posts.layout')

<?php $title=$posts->first(); ?>

@section('title', " الأكثر مشاهدة ")

@section('content')
@include('posts.post-sort')
<h4> الإعلانات الأكثر مشاهدة</h4>
@include('posts.index')

@endsection

