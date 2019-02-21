@extends('layouts.app')

@section('title', __('titles.srch_title'))

@section('content')
@include('partials.sort')
<p><h3 class="mb-5" style="color: #0c263b;">نتائج البحث:</h3></p>

    @include('partials.ads')

@endsection