<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" style="direction:rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo e(asset('vendor/icon/favicon.ico')); ?>" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title> <?php echo $__env->yieldContent('title',config('app.name', 'Laravel')); ?></title>
   
 
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/simple-line-icons/css/simple-line-icons.css')); ?>" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <!-- custom css -->
    <link href="<?php echo e(asset('css/landing-page.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
</head>
<body  dir="rtl" >
    <?php echo $__env->make('partials/navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="jumbotron text-center" >
    <div class="searchformbox" >
         <?php echo $__env->make('partials/searchfrm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
         <hr>
    
        <?php echo $__env->make('partials/categoryNav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    </div>
   
  
    <div class="container text-right" > 
    
        <?php echo $__env->yieldContent('content'); ?>
    </div>

   <?php echo $__env->make('partials/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

   <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
