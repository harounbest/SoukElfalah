@extends('layouts.app')

@section('title', __('titles.myAds_title'))

@section('content')

<div class="col-lg-8">
    <p><h2>إعلانات في إنتظار النشر </h2></p>

    @include('alerts.success')
    @include('alerts.error')
    <table class="table table-hover">
    <thead>
      <tr>
        <th>التاريخ</th>
        <th>عنوان الإعلان</th>
        <th>السعر</th>
      </tr>
    </thead>
    <tbody>
    @foreach($unpublishedAds as $ad)
      <tr>
        <td>{{$ad->created_at}}</td>
        <td><a href="/ad/{{$ad->id}}/{{$ad->slug}}">{{$ad->title}}</a></td>
        <td>{{$ad->price}} {{$ad->currency->symbol}}</td>
        <td>
            <div class="btn-group" role="group" >
                <a  class="btn-sm btn-primary" href="{{ route('ads.edit',$ad->id) }}" role="button" ><i class="glyphicon glyphicon-remove-sign"></i>تعديل</a>
               
              <!---    <button  id="pub" data-id="{{$ad->id}}"class="btn-sm btn-outline-primary waves-effect">نشر</button>
-->

              <form method="POST" action="{{route('publish',$ad->id)}}"  >
                     {{ csrf_field() }}
                     <input name="_method" type="hidden" value="">
                    <button type="submit" class="btn-sm btn-outline-primary waves-effect" >نشر<i class="glyphicon glyphicon-remove"></i></button>
                </form>
                <form method="POST" action="{{ route('ads.destroy',$ad->id) }}" onsubmit="return confirm('هل تريد فعلاً حذف السجل')" >
                     {{ csrf_field() }}
                     <input name="_method" type="hidden" value="delete">
                    <button type="submit" class="btn-sm btn-danger" >حذف<i class="glyphicon glyphicon-remove"></i></button>
                </form>
            </div>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

<script>
    $(document).ready(function()
    {
        $('#pub').on('click', function()
        {
            var ad_id = $(this).data('id');
            ad = $(this);
            url='/publish'+ad_id;
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: url,
                type: 'post',
                data: {'ad_id': ad_id},
            });

        });
    });
</script>






@endsection
