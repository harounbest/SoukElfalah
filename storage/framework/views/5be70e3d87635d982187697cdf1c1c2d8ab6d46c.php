 
 <?php $__env->startSection('title'); ?>
 <?php echo e($post->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<hr>

<div class="card mb-4">
        <div id="carouselIndicators" class="carousel slide" >
            <div class="carousel-inner" >
                <?php $i=0; ?>
                <?php if(count($post->postImages)==0): ?>
                 <img  src="<?php echo e(asset('/storage/images/posts/default.png')); ?>" >
                <?php endif; ?>

                <?php $__currentLoopData = $post->postImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $i++;?>
                    <div class="carousel-item<?php echo e($i<=1?' active':''); ?> " >
                        <img   src="<?php echo e(asset('/storage/images/posts/'.$img->image)); ?>" >
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- Indicators -->
            <div class="carousel-indicators">
               <?php $i=0; ?>
                <?php $__currentLoopData = $post->postImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img alt="thumbnail"  class="img-thumbnail"  src="<?php echo e(asset('/storage/images/posts/thumbs/'.$img->image)); ?>" data-target="#carouselIndicators" data-slide-to="<?php echo e($i++); ?>">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<hr>
<?php echo $__env->make('partials.shareBtns', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<h2 class="blog-post-title"><?php echo e($post->title); ?> 

</h2>
        
        <p><?php echo html_entity_decode($post->body); ?></p>
        <div>  
        <i class="far fa-heart" style="color:red"><?php echo e($post->postfav_count); ?></i>   
        <i class="fas fa-eye" style="color:#85bb65">   <?php echo e($post->post_view_count); ?> </i>  
        </div>
    <div class="btn-group" role="group" >
        <?php if(auth()->guard()->guest()): ?>
            <?php elseif(Auth::user()->isAdmin): ?>       
          <a  class="btn-sm btn-primary" href="<?php echo e(route('posts.edit',$post->id)); ?>" role="button" ><i class="glyphicon glyphicon-remove-sign"></i>تعديل</a>
          <?php endif; ?>
   
  
        <?php if(Auth::user()): ?>
        <?php echo csrf_field(); ?>
            <button  id="fav" data-id="<?php echo e($post->id); ?>" class="btn-sm btn-outline-primary waves-effect <?php echo e($favoritedpost?'unfav':'fav'); ?>"><?php echo e($favoritedpost?" إلغاء الإعجاب  ":"أعجبني "); ?></button>
        <?php endif; ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('posts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>