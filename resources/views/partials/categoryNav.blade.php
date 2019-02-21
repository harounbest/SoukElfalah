<ul class="nav justify-content-center">
@foreach ($categories as $category)
   <li class="nav-item  ">
    <p class="cat">   
        <a class="nav-link active" href="/{{$category->id}}/{{$category->slug}}">{{$category->name}} </a>
    </p >  
   </li>
   @endforeach
   
 <li class="nav-item  "> 
   <p class="cat">  

       <a class="nav-link active" href="{{route('posts.home')}}">{{__('titles.blog')}} </a>
       </p>
    </li>
</ul>