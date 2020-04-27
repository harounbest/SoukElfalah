<?php $__env->startSection('content'); ?>
<?php echo $__env->make('posts.post-sort', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<h1>المقالات</h1>
  <?php echo $__env->yieldContent('title'); ?>

  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
            <div class="card-body">
                <h2 class="card-title"><?php echo e($post->title); ?> </h2>
                <p class="card-text">   <?php echo e($post->excerpt); ?></p>
                <?php if($post->postfav_count>0): ?>
                <i class="far fa-heart" style="color:red"><?php echo e($post->postfav_count); ?></i>   
                <?php endif; ?> 
                <i class="fas fa-eye" style="color:#85bb65">   <?php echo e($post->post_view_count); ?> </i>  
                <a href ="<?php echo e(route('post.show',['id'=>$post->id,'slug'=>$post->slug])); ?>"> المزيد </a>
            </div>
            <div class="card-footer text-muted">
                <p class="blog-post-meta"><?php echo e(\Carbon\Carbon::parse($post->created_at)->diffForHumans()); ?>  من طرف  <a href="#"><?php echo e($post->user->name); ?> </a></p>
            </div>
          <?php if(auth()->guard()->guest()): ?>
            <?php elseif(Auth::user()->isAdmin): ?>
            <form method="POST" action="<?php echo e(route('posts.destroy',$post->id)); ?>" onsubmit="return confirm('هل تريد فعلاً حذف السجل')" >
                             <?php echo e(csrf_field()); ?>

                                <input name="_method" type="hidden" value="delete">
                                <button type="submit" class="btn btn-primary btn-danger" >حذف<i class="glyphicon glyphicon-remove"></i></button>
                        </form>
            <?php endif; ?>
    </div>
   
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 <?php echo $__env->make('pagination.defaut', ['paginator' => $posts], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



        
<?php $__env->stopSection(); ?>
       
<?php echo $__env->make('posts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>