@extends('posts.layout')



@section ('content')
@include('posts.post-sort')
<h1>المقالات</h1>
  @yield('title')

  @foreach ($posts as $post)
    <div class="card mb-4">
        <div id="carouselIndicators" class="carousel slide" >
            <div class="carousel-inner" >
                <?php $i=0; ?>
                @if(count($post->postImages)==0)
                 <img  src="{{asset('/storage/images/posts/default.png')}}" >
                @endif
                @foreach($post->postImages as $img)
                    <?php $i++;?>
                    <div class="carousel-item{{$i<=1?' active':''}} " >
                        <img   src="{{asset('/storage/images/posts/'.$img->image)}}" >
                    </div>
                @endforeach
            </div>
            <!-- Indicators -->
            <div class="carousel-indicators">
               <?php $i=0; ?>
                @foreach($post->postImages as $img)
                <img alt="thumbnail"  class="img-thumbnail"  src="{{asset('/storage/images/posts/thumbs/'.$img->image)}}" data-target="#carouselIndicators" data-slide-to="{{$i++}}">
                @endforeach
            </div>
        </div>
            <div class="card-body">
                <h2 class="card-title">{{ $post->title}} </h2>
                <p class="card-text">   {{$post->excerpt }}</p>
                @if($post->postfav_count>0)
                <i class="far fa-heart" style="color:red">{{$post->postfav_count}}</i>   
                @endif 
                <i class="fas fa-eye" style="color:#85bb65">   {{$post->post_view_count}} </i>  
                <a href ="{{route('post.show',['id'=>$post->id,'slug'=>$post->slug])}}"> المزيد </a>
            </div>
            <div class="card-footer text-muted">
                <p class="blog-post-meta">{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}  من طرف  <a href="#">{{$post->user->name}} </a></p>
            </div>
          @guest
            @elseif (Auth::user()->isAdmin)
            <form method="POST" action="{{ route('posts.destroy',$post->id) }}" onsubmit="return confirm('هل تريد فعلاً حذف السجل')" >
                             {{ csrf_field() }}
                                <input name="_method" type="hidden" value="delete">
                                <button type="submit" class="btn btn-primary btn-danger" >حذف<i class="glyphicon glyphicon-remove"></i></button>
                        </form>
            @endguest
    </div>
   
  @endforeach

 @include('pagination.defaut', ['paginator' => $posts])



        
@endsection
       