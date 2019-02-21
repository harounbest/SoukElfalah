@extends('posts.layout')

@section('title', __('titles.srch_title'))

@section('content')
<p><h3 class="mb-5" style="color: #0c263b;">نتائج البحث:</h3></p>

    @include('posts.index')

@endsection