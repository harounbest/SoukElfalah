@extends('layouts.app')

<?php $title=$ads->first(); ?>

@section('title', "الأكثر تفضيلاً  ")

@section('content')

<h2>    الأكثر تفضيلًا   </h2>
@include('partials.sort')
@include('partials.ads')

@endsection
