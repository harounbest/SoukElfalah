@extends ('layouts.app')
@section ('title',"الرئيسية")


@section('content')
<!--<div id="sortNav"><h4>   الإعلانات    </h4> </div>-->
<h1>الإعلانات</h1>
@include('partials.sort')
@include('partials.ads')
@endsection