
<nav class="navbar navbar-expand-sm navbar-dark navbar-laravel" style="background-color: #0c263b;">

<a class="navbar-brand" href="<?php echo e(route('home')); ?>">
    <img src="<?php echo e(asset('vendor/logo/SoukElfellah-100px.png')); ?>" width="100" height="37" alt="logo">
  </a>

 
         <!--   <a class="navbar-brand" href="#"><?php echo $__env->yieldContent('title',config('app.name', 'Laravel')); ?></a>-->
         <div class="container"> 
      <!--    <a href=href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('vendor/logo/SoukElfellah-100px.png')); ?>" alt="logo" /></a>
        <a class="navbar-brand" href="#"><?php echo $__env->yieldContent('title',config('app.name', 'Laravel')); ?></a>-->
        </div>
        
            <?php if(auth()->guard()->guest()): ?>
         
                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('auth.Login')); ?></a>
         
                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('auth.Register')); ?></a>
          
            <?php else: ?>
           <!--btn icon-btn btn-dark-->
                <a class=" btn btn-primary" href="<?php echo e(route('ad.create')); ?>">
                <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>
                      <?php echo e(__('titles.addAd_title')); ?>

                    
                </a>
         
            <li class="nav-item nav-link dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/userAds">إعلاناتي</a>
                    <a class="dropdown-item" href="/userFav">تفضيلاتي</a>
              
                    <?php if(Auth::user()->isAdmin): ?>
                    <a class="dropdown-item" href="<?php echo e(route('posts.create')); ?>"><?php echo e(__('titles.AddArticle')); ?></a>
                    <a class="dropdown-item" href="/dashBoard"><?php echo e(__('titles.dashboard')); ?></a>
                    <a class="dropdown-item" href="/unpublished"><?php echo e(__('titles.unpublished')); ?></a>
                    
                     <?php endif; ?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <?php echo e(__('auth.Logout')); ?>

                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </li>
           <?php endif; ?>
        </ul>

         <!-- 
        <ul class="nav navbar-nav navbar-left">
            <?php if(auth()->guard()->guest()): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('auth.Login')); ?></a>
            </li>
          
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('auth.Register')); ?></a>
            </li>
            <?php else: ?>
            <li class="nav-item nav-link">
                <a class="btn icon-btn btn-light" href="<?php echo e(route('ad.create')); ?>">
                <span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>
                    أضف إعلان جديد
                </a>
            </li>
            <li class="nav-item nav-link dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/userAds">إعلاناتي</a>
                    <a class="dropdown-item" href="/userFav">تفضيلاتي</a>
                
                    <?php if(Auth::user()->isAdmin): ?>
                    <a class="dropdown-item" href="<?php echo e(route('posts.create')); ?>"><?php echo e(__('titles.AddArticle')); ?></a>
                    <a class="dropdown-item" href="/dashBoard"><?php echo e(__('titles.dashboard')); ?></a>
                    <?php endif; ?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <?php echo e(__('auth.Logout')); ?>

                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </li>
           <?php endif; ?>
        </ul>
-->
</nav>
