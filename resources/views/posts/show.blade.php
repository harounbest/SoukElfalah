
 @extends('posts.layout')
 @section('title')
 {{$post->title}}
@endsection

@section ('content')

<hr>

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
    </div>
<hr>
@include('partials.shareBtns')

<h2 class="blog-post-title">{{$post->title }} 

</h2>
        
        <p>{{$post->body}} </p>
        <div>  
        <i class="far fa-heart" style="color:red">{{$post->postfav_count}}</i>   
        <i class="fas fa-eye" style="color:#85bb65">   {{$post->post_view_count}} </i>  
        </div>
    <div class="btn-group" role="group" >
        @guest
            @elseif (Auth::user()->isAdmin)       
          <a  class="btn-sm btn-primary" href="{{ route('posts.edit',$post->id) }}" role="button" ><i class="glyphicon glyphicon-remove-sign"></i>تعديل</a>
          @endguest
   
  
        @if(Auth::user())
        @csrf
            <button  id="fav" data-id="{{$post->id}}" class="btn-sm btn-outline-primary waves-effect {{$favoritedpost?'unfav':'fav'}}">{{$favoritedpost?" إلغاء الإعجاب  ":"أعجبني "}}</button>
        @endif

 </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script>   
$(document).ready(function(){
    $('#fav').on('click', function(){
        var post_id = $(this).data('id');
        post = $(this);

        if (post.hasClass("fav") ) {
            var url='/posts/'+post_id+'/favorite';
            var status="unfav";
            var text=" إلغاء الإعجاب "
        }
        else{
            url='/posts/'+post_id+'/unfavorite';
            status="fav";
            text="أعجبني ";
        }

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: url,
            type: 'post',
            data: {'post_id': post_id },
            success: function(response){
                post
                .removeClass('fav')
                .removeClass('unfav')
                .addClass(status)
                .html(text)
            }
        });

    });
});
</script> 
@endsection
