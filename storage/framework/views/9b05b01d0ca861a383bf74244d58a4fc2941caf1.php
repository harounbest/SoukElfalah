
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" style="direction:rtl">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo e(asset('vendor/icon/favicon.ico')); ?>" />

     <title> <?php echo $__env->yieldContent('title',config('app.name', 'Laravel')); ?></title> 
    <!--  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">-->
     <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <!-- Bootstrap core CSS -->
    <link href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://v4-alpha.getbootstrap.com/examples/blog/blog.css" rel="stylesheet">

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/simple-line-icons/css/simple-line-icons.css')); ?>" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <!-- custom css -->
    <link href="<?php echo e(asset('css/landing-page.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="<?php echo e(asset('summernote/summernote.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('summernote/summernote.js')); ?>" ></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
    
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163556968-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-163556968-1');
    </script>


  </head>

  <body dir="rtl" >
 
    <?php echo $__env->make('partials/navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!--  <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="#">Home</a>
          <a class="nav-link" href="#">New features</a>
          <a class="nav-link" href="#">Press</a>
          <a class="nav-link" href="#">New hires</a>
          <a class="nav-link" href="#">About</a>
        </nav>
      </div>
    </div>

    <div class="blog-header">
      <div class="container">
      
      </div>
    </div>-->
    <div class="jumbotron text-center" >
    <div class="searchformbox" >
         <?php echo $__env->make('posts/post-searchfrm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
         <hr>
         <?php if(auth()->guard()->guest()): ?>
         <?php elseif(Auth::user()->isAdmin): ?>
        <a class="souk-post" href="<?php echo e(route('posts.create')); ?>">أضف مقالة</a>
       
        <?php endif; ?>
         <a class="souk-post" href="<?php echo e(route('home')); ?>">السوق</a>
       
    </div>
    </div>
    <hr>
    <div class="container text-right">
  
      <div class="row">

        <div class="col-sm-8 blog-main">
      
          <?php echo $__env->yieldContent('content'); ?>

        </div>
       

        <div class="col-sm-3 offset-sm-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <!-- /.blog-main 
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>-->  
          <div class="sidebar-module" style="direction: ltr">
           
           <h4><?php echo e(__('titles.Archives')); ?></h4>
            <ol class="list-unstyled" >

            <?php $__currentLoopData = $archives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <li><a href="<?php echo e(route('posts.archives',['year'=>$archive->year,'month'=>$archive->month_number])); ?>"><?php echo e($archive->month.' '.$archive->year.' ('.$archive->posts_count.')'); ?></a></li>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </ol>
          </div>
          <div class="sidebar-module">
            <h4> تابعناعلى</h4>
            <ol class="list-unstyled">
              <li><a href="#"></a></li>
             <!--  <li><a href="#">Twitter</a></li> -->
              <li><a href="https://www.facebook.com/soukelfalah" target="_blank">الفايسبوك</a></li>
            </ol>
          </div>
        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->
    </div>
       <?php echo $__env->make('partials/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
   
    
  </body>
</html>
