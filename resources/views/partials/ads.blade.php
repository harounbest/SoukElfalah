<hr>
<div class="row">

     @foreach($ads as $ad)
        @php
            $img=$ad->images->first();
            $img_name=$img['image'];
        @endphp
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card mb-5 text-center" href="/ad/{{$ad->id}}/{{$ad->slug}}">
            <a href="/ad/{{$ad->id}}/{{$ad->slug}}">   
            <img  class="card-img-top thumbnail" src="{{$img_name? '/storage/images/thumbs/'.$img_name : '/storage/images/thumbs/default.png'}}"  alt="{{$img_name}}">
            </a>
            
                <div class="card-body">
                    <div><h6 class="card-title">{{$ad->title}}</h6></div>
                    <p class="card-text"><i class="far fa-money-bill-alt" style="color:#85bb65"></i>{{$ad->price}} {{$ad->currency->symbol}}</p>
                    <p class="card-text"></p>
                    <p class="blog-post-meta">   <i class="fas fa-map-marked-alt" style="color:#0c263b"></i>  {{$ad->wilaya->name_ar}}  </p>
                    <p class="card-text"> </p>
                    <p class="card-icon"> 
                  
                      <i class="fas fa-eye" style="color:#85bb65">   {{$ad->adview_count}} </i>  
                         
                      <i> {{\Carbon\Carbon::parse($ad->created_at)->diffForHumans()}}</i>
                        
                        <i class="far fa-heart" style="color:red">{{$ad->favorite_count}}</i>    

                    </p>
                  <!--  <a href="/ad/{{$ad->id}}/{{$ad->slug}}" class="btn btn-sm btn-outline-dark">التفاصيل</a>-->
                  <a href="/ad/{{$ad->id}}/{{$ad->slug}}" class=" btn btn-primary btn-outline-light">التفاصيل</a>
                 
                  @guest  
                    @elseif (Auth::user()->isAdmin())
                        <form method="POST" action="{{ route('ads.destroy',$ad->id) }}" onsubmit="return confirm('هل تريد فعلاً حذف السجل')" >
                             {{ csrf_field() }}
                                <input name="_method" type="hidden" value="delete">
                                <button type="submit" class=" btn btn-primary btn-danger" >حذف<i class="glyphicon glyphicon-remove"></i></button>
                        </form>
           
                    @endguest
                </div>
            </div>
        </div>
    @endforeach
 
</div>
@include('pagination.defaut', ['paginator' => $ads])