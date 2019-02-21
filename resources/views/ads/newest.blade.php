@extends('layouts.app')

<?php $title=$ads->first(); ?>

@section('title', " الأحدث  ")

@section('content')

<h2>  أحدث إعلانات الموقع   </h2>
@include('partials.sort')
@include('partials.ads')

@endsection

