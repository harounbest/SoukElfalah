<?php $__env->startSection('title', __('titles.adDetail_title')); ?>

<?php $__env->startSection('content'); ?>

<h2><?php echo e($ad->title); ?> </h2>

<?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="row ">
    <div class="col-lg-11 col-md-6 col-xs-11 m-2">
        <?php if(Auth::user()): ?>
            <button  id="fav" data-id="<?php echo e($ad->id); ?>" class="btn-sm btn-outline-primary waves-effect <?php echo e($favorited?'unfav':'fav'); ?>"><?php echo e($favorited?"إزالة من المفضلة":"إضافة للمفضلة"); ?></button>
        <?php endif; ?>

        <?php echo $__env->make('partials.shareBtns', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div class="col-lg-4 col-md-6 col-xs-11">
        <div id="carouselIndicators" class="carousel slide" >
            <div class="carousel-inner" >
                <?php $i=0; ?>
                <?php if(count($ad->images)==0): ?>
                 <img  src="<?php echo e(asset('/storage/images/default.png')); ?>" >
                <?php endif; ?>

                <?php $__currentLoopData = $ad->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $i++;?>
                    <div class="carousel-item<?php echo e($i<=1?' active':''); ?> " >
                        <img   src="<?php echo e(asset('/storage/images/'.$img->image)); ?>" >
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- Indicators -->
            <div class="carousel-indicators">
               <?php $i=0; ?>
                <?php $__currentLoopData = $ad->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img alt="thumbnail"  class="img-thumbnail"  src="<?php echo e(asset('/storage/images/thumbs/'.$img->image)); ?>" data-target="#carouselIndicators" data-slide-to="<?php echo e($i++); ?>">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
  
    <div class="col-lg-7 col-md-6 col-xs-11">
        <div class="card ">
            <div class="card-body">
                <h4>المعلومات الرئيسية</h4>
                <p class="card-text">   اسم المعلن : <?php echo e($ad->user->name); ?> </p>
                <p class="card-text"> الولاية : <?php echo e($ad->wilaya->name_ar); ?> </p>
                <p class="card-text">السعر:  <?php echo e($ad->price); ?> <?php echo e($ad->currency->symbol); ?></p>
                <p class="card-text">    الهاتف : <?php echo e($ad->user->phoneNumber); ?> </p>
                <h4>وصف الإعلان</h4>
                <p class="card-text"><?php echo e($ad->text); ?></p>
             
                <p class="blog-post-meta"><?php echo e(\Carbon\Carbon::parse($ad->created_at)->diffForHumans()); ?>  من طرف  </p>
          
                <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#myModal">تواصل مع المعلن</button>
            </div>
        </div>
    </div>
</div>

<!-- dialog -->
<div id="myModal" class="modal fade" role="dialog" >
    <div class="modal-dialog">
        <!--  content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">تواصل مع المعلن</h5>
            </div>
            <div class="modal-body">
                <div class="card-body p-3">
                    <!--Body-->
                    <form id="send" action="/sendMail" method="post">
                        <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="اسمك">
                        </div>
                        <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="عنوان بريدك الإلكتروني">
                        </div>
                        <div class="form-group">
                                <textarea class="form-control" name="msg" placeholder="نص الرسالة"></textarea>
                        </div>

                        <input type="hidden" value="<?php echo e($ad->user->email); ?>" class="form-control" name="adv_email" >

                        <div class="text-center">
                            <button id="sendEmail" class="btn btn-primary btn-block rounded-0 py-2">إرسال</button>
                        </div>
                    </form>
                </div>
                <div id="msgs"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
            </div>
        </div>
        <!-- end content -->
    </div>
</div>

<div class="row form-group mt-5" >
    <div class="col-lg-11 col-md-6 col-xs-11">
    <?php echo $__env->make('alerts.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
     <h3> التعليقات : </h3>
        <form action="<?php echo e(route('comments.store')); ?>" id="comments" method="post">
            <?php echo csrf_field(); ?>
           <input type="hidden" name="ad_id" value="<?php echo e($ad->id); ?>">
            <div class="form-group">
                <textarea class="form-control" rows="5"  name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">إرسال</button>
            <a class="btn btn-primary btn-close"  href="<?php echo e(route('home')); ?>"><?php echo e(__('titles.cancel')); ?></a>
        </form>
    </div>
</div>

<div class="row form-group mt-5" >
    <div class="col-lg-11 col-md-6 col-xs-11">
        <div id="display_comment">
        <?php $comments=$ad->comments  ?>
            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <ul class="comment-container">
                <li>
                <div class="card">
                    <div class="card-header">
                        <strong><?php echo e($comment->user->name); ?></strong>
                    </div>
                    <div class="card-body">
                        <?php echo e($comment->content); ?>

                    </div>
                    <?php echo $__env->make('partials.commentForm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <?php echo $__env->make('partials.commentReplies', ['comments' => $comment->replies], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
                </li>
            </ul>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

<script>
    $(document).ready(function(){

        $('#sendEmail').on('click', function(event){
            event.preventDefault();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/sendMail',
                type: 'post',
                data: $('#send').serialize(),
                success: function (data)
                {
                    $("#msgs")
                        .removeClass("alert alert-danger")
                        .addClass("alert alert-success")
                        .text('تم الإرسال بنجاح')
                },
                error: function (response)
                {
                    var jsonResponse = JSON.parse(response.responseText);
                    $("#msgs")
                        .empty()
                        .addClass("alert alert-danger")
                    $.each(jsonResponse['errors'], function (key, value) {
                        $("#msgs").append('<li>'+value+'</li>');
                    });
                }
            });
        });

        $('#fav').on('click', function(){

            var ad_id = $(this).data('id');
            ad = $(this);

            if (ad.hasClass("fav") ) {
                var url='/ads/'+ad_id+'/favorite';
                var status="unfav";
                var text="إزالة من المفضلة"
            }
            else{
                 url='/ads/'+ad_id+'/unfavorite';
                 status="fav";
                 text="إضافة للمفضلة";
            }

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: 'post',
                data: {
                    'ad_id': ad_id
                },
                success: function(response){
                    ad
                    .removeClass('fav')
                    .removeClass('unfav')
                    .addClass(status)
                    .html(text)
                }
            });

        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>