@extends('posts.layout')


@section('content')
<div class="col-lg-8">
    <p> <h2> تفضيلاتي</h2> </p>
    <table class="table table-hover">
        <thead>
        <tr>
            <th> تاريخ النشر</th>
            <th>المقال</th>
            <th>  </th>
            <td>
               
        </tr>
        </thead>
        <tbody>
        @foreach($userfav as $post)
        <tr>
            <td> {{$post->pivot->created_at}} </td>
            <td> {{$post->title}}</td>
            <td></td>
            <td>
                <div class="btn-group" role="group">
                    <a class="btn-sm" "btn-primary" href="/ad/{{$ad->id}}/{{$ad->slug}}" role="button"> <i class="glyphicon glyphicon-remove-sign"> </i>عرض </a>
                </div>
            </td>
        </tr>
        @endforeach 

        </tbody>
    </table>
</div>


@endsection