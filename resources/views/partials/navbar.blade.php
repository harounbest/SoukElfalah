
<nav class="navbar navbar-expand-sm navbar-dark navbar-laravel" style="background-color: #0c263b;">

<a class="navbar-brand" href="{{ route('home') }}">
    <img src="{{ asset('vendor/logo/SoukElfellah-100px.png')}}" width="100" height="37" alt="logo">
  </a>

 
         <!--   <a class="navbar-brand" href="#">@yield('title',config('app.name', 'Laravel'))</a>-->
         <div class="container"> 
      <!--    <a href=href="{{ route('home') }}"><img src="{{ asset('vendor/logo/SoukElfellah-100px.png')}}" alt="logo" /></a>
        <a class="navbar-brand" href="#">@yield('title',config('app.name', 'Laravel'))</a>-->
        </div>
        
            @guest
         
                <a class="nav-link" href="{{ route('login') }}">{{ __('auth.Login') }}</a>
         
                <a class="nav-link" href="{{ route('register') }}">{{ __('auth.Register') }}</a>
          
            @else
           <!--btn icon-btn btn-dark-->
                <a class=" btn btn-primary" href="{{route('ad.create')}}">
                <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>
                      {{__('titles.addAd_title')}}
                    
                </a>
         
            <li class="nav-item nav-link dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/userAds">إعلاناتي</a>
                    <a class="dropdown-item" href="/userFav">تفضيلاتي</a>
              
                    @if (Auth::user()->isAdmin)
                    <a class="dropdown-item" href="{{route('posts.create')}}">{{__('titles.AddArticle')}}</a>
                    <a class="dropdown-item" href="/dashBoard">{{__('titles.dashboard')}}</a>
                    @endif
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('auth.Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </div>
            </li>
           @endguest
        </ul>

         <!-- 
        <ul class="nav navbar-nav navbar-left">
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('auth.Login') }}</a>
            </li>
          
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('auth.Register') }}</a>
            </li>
            @else
            <li class="nav-item nav-link">
                <a class="btn icon-btn btn-light" href="{{route('ad.create')}}">
                <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>
                    أضف إعلان جديد
                </a>
            </li>
            <li class="nav-item nav-link dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/userAds">إعلاناتي</a>
                    <a class="dropdown-item" href="/userFav">تفضيلاتي</a>
                
                    @if (Auth::user()->isAdmin)
                    <a class="dropdown-item" href="{{route('posts.create')}}">{{__('titles.AddArticle')}}</a>
                    <a class="dropdown-item" href="/dashBoard">{{__('titles.dashboard')}}</a>
                    @endif
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('auth.Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </div>
            </li>
           @endguest
        </ul>
-->
</nav>
