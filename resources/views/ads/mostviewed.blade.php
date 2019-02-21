
@extends('layouts.app')

<?php $title=$ads->first(); ?>

@section('title', " الأكثر مشاهدة ")

@section('content')

<h2> الإعلانات الأكثر مشاهدة</h2>
@include('partials.sort')
    @include('partials.ads')

@endsection

