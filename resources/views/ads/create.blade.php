@extends('layouts.app')

@section('content')

<div class="col-lg-8">
    <p><h2> أدخل تفاصيل إعلانك</h2></p>
    @include('alerts.success')

    @include('alerts.error')

    <form method="POST" action="{{ route('ad.store') }}" enctype="multipart/form-data"> 
       {{ csrf_field() }}
       <div class="form-group">
            <label for="wilaya">حدد الولاية</label>
            <select class="form-control" name="wilaya_id" >
                    @include('lists.wilayas')
            </select>
        </div>
        <div class="form-group">
            <label for="catg"> اختر التصنيف</label>
            <select class="form-control" name="category_id" >
               @include('lists.categories')
            </select>
        </div>
        <div class="form-group">
            <label for="title">عنوان الإعلان:</label>
            <input type="text" class="form-control" name="title" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label for="details">تفاصيل الإعلان: </label>
            <textarea class="form-control" name="text" rows="3" >{{old('text')}}</textarea>
        </div>
        <div class="form-group">
            <label class="col-lg-3 control-label" value="{{old('price')}}">السعر</label>
            <div class="row">
                <div class="col-lg-7">
                    <input type="number" class="form-control" value="{{old('price')}}" name="price" step="any" placeholder="" title="السعر" >
                </div>
                <div class="col-lg-5" title="">
                    <select class="form-control" name="currency_id">
                        @include('lists.currencies')
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="details"> أضف الصور </label>
            <input type="file" name="images[]"  class="form-control" multiple>
        </div>
        <button type="submit" class="btn btn-primary">أضف الإعلان</button>
        <a class="btn btn-primary btn-close"  href="{{ route('home') }}">{{__('titles.cancel')}}</a>
    </form>
</div>

@endsection