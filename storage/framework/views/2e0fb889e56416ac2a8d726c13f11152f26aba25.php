<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <link rel="icon" href="<?php echo e(asset('vendor/icon/favicon.ico')); ?>" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title> <?php echo $__env->yieldContent('title',config('app.name', 'Laravel')); ?></title>
    
    <!-- Bootstrap core CSS -->
    <link href=<?php echo e(asset('vendor/bootstrap/css/bootstrap.css')); ?> rel="stylesheet">
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
    <!-- Custom fonts for this template -->
        <!-- Fonts -->
        <link href=<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?> rel="stylesheet">
        <link href=<?php echo e(asset('vendor/simple-line-icons/css/simple-line-icons.css')); ?> rel="stylesheet" type="text/css">
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        
        <!--<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">-->
        
    <!-- Custom styles for this template -->
    <link href=<?php echo e(asset('css/landing-page.css')); ?> rel="stylesheet">
    
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

    <!-- Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark navbar-laravel" style="background-color: #0c263b;">

<a class="navbar-brand" href="<?php echo e(route('home')); ?>">
    <img src="<?php echo e(asset('vendor/logo/SoukElfellah-100px.png')); ?>" width="100" height="37" alt="logo">
  </a>




   
      <div class="container"> 
      <!--    <a href=href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('vendor/logo/SoukElfellah-100px.png')); ?>" alt="logo" /></a>
        <a class="navbar-brand" href="#"><?php echo $__env->yieldContent('title',config('app.name', 'Laravel')); ?></a>-->
       
         </div>  

      <a class="nav-link" href="<?php echo e(route('home')); ?>"><?php echo e(__('titles.explore')); ?></a>
      <a class=" nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('auth.Login')); ?></a>

      <!--<a class=" nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('auth.Register')); ?></a>-->
   
 
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      
      <div class="container">
      <div class="overlay"> سوق الفلاح هو الحل الأمثل للفلاحين لتسويق منتجاتهم واكتشاف فرص عملٍ جديدة والبحث عن كل ما يحتاجه الفلاح </div>
        <div class="row"> 
          <div class="col-xl-9 mx-auto">
            <h1 style="color: #fff;"class="mb-5">  تواصل و تاجر بثقة و أريحية على </br>
            سوق الفلاح</h1>
            <div class=" col-12 col-md-3 mb-5 mx-auto">
            <a class="btn  btn-block btn-lg btn-primary" href="<?php echo e(route('ad.create')); ?>"><?php echo e(__('auth.AddProduct')); ?></a>
            <a class="masthead text-white text-center" href="<?php echo e(route('home')); ?>"><?php echo e(__('titles.explore')); ?></a>   
          </div>        
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">  
                </div>
                <div class="col-12 col-md-3">
                 <!-- <button  class="btn btn-block btn-lg btn-primary" href="<?php echo e(route('register')); ?>" ><?php echo e(__('auth.Register')); ?></button>-->
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center" >
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-primary"></i>
              </div>
              <h3>احصل على المزيد من الفرص</h3>
              <p class="lead mb-0">يسمح لك سوق الفلاح بالإطلاع الدائم على متطلبات السوق و الإتصال المباشر بأحدث الفرص</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-primary"></i>
              </div>
              <h3>إتصل بألاف  الشركاء المحتملين</h3>
              <p class="lead mb-0">بإعلان واحد فقط تستطيع الوصول إلى كل المهتمين بمنتوجاتك و التواصل معهم مباشرة دون الحاجة إلى وسيط</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div>
              <h3>تخطى حدود منطقتك</h3>
              <p class="lead mb-0">إتصل بِع و إشترِ المنتوجات الفلاحية عبر كل ولايات الوطن دون الحاجة لتحمل مشقة السفر</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase" >
      <div class="container-fluid p-0">
        <div class="row no-gutters">

          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-10.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2 >وسع نطاق تعاملاتك</h2>
            <p class="lead mb-0">يجلب سوق الفلاح المهتمين بمنتوجاتك إاليك </br>
            أنشئ إعلانك الآن و دع التكنولوجيا الخاصة بالموقع بلتصلك بالمشترين </p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-20.jpg');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2 style="color: #0c263b;">شركاء آمنين وموثوقين</h2>
            <p class="lead mb-0">نسعى بسوق الفلاح إلى التحقق من كل المستخدمين ما يجعل من الشركاء الذين ستلتقي بهم أكثر أمانًا و مصداقية</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-30.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2 style="color: #0c263b;"> أكثر من مجرد موقع</h2>
            <p class="lead mb-0">مع سوق الفلاح ستحصل على أكثر من مجرد موقع حيث يجمع بين جمالية التصميم و قوة التقنية مع فريق دعم متكامل </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
    <h1 style="color: #0c263b;"> سوق الفلاح،    السوق الواقعي للعالم الإفتراضي  </h1>
     <!--
       
        <div class="container">
        <h2 class="mb-5">What people are saying...</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
              <h5>Margaret E.</h5>
              <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
              <h5>Fred S.</h5>
              <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
              <h5>Sarah	W.</h5>
              <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
            </div>
          </div>
        </div>
      </div>-->
    </section>

    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h2 class="mb-4" style="color: #fff;">على استعداد للبدء؟  إفتح حسابك الأن!</h2>
          
          <div class=" col-12 col-md-3 mb-5 mx-auto">
            <a class="btn btn-block btn-lg btn-primary" href="<?php echo e(route('register')); ?>"><?php echo e(__('auth.Register')); ?></a>
            <a class="masthead text-white text-center" href="<?php echo e(route('home')); ?>"><?php echo e(__('titles.explore')); ?></a>
          </div>     
        </div>
          <!--<div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
                </div>
              </div>
            </form>
          </div>-->
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer ">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">حول</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">إتصل</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">تعليمات الاستخدام</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">سياسة الخصوصية</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">  &copy;سوق الفلاح  2019. كل الحقوق محفوظة.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
            
                <a href="#">
                  <i class="fab fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
	  <!-- Quantcast Tag -->
<script type="text/javascript">
var _qevents = _qevents || [];

(function() {
var elem = document.createElement('script');
elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
elem.async = true;
elem.type = "text/javascript";
var scpt = document.getElementsByTagName('script')[0];
scpt.parentNode.insertBefore(elem, scpt);
})();

_qevents.push({
qacct:"p-gARUTBwcHxXZZ"
});
</script>

<noscript>
<div style="display:none;">
<img src="//pixel.quantserve.com/pixel/p-gARUTBwcHxXZZ.gif" border="0" height="1" width="1" alt="Quantcast"/>
</div>
</noscript>
<!-- End Quantcast tag -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src=<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>></script>
    <script src=<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>></script>

  </body>

</html>
