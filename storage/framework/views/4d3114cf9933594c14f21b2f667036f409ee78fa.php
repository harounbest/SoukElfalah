<hr>
<div class="row">

     <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $img=$ad->images->first();
            $img_name=$img['image'];
        ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card mb-5 text-center" href="/ad/<?php echo e($ad->id); ?>/<?php echo e($ad->slug); ?>">
            <a href="/ad/<?php echo e($ad->id); ?>/<?php echo e($ad->slug); ?>">   
            <img  class="card-img-top thumbnail" src="<?php echo e($img_name? '/storage/images/thumbs/'.$img_name : '/storage/images/thumbs/default.png'); ?>"  alt="<?php echo e($img_name); ?>">
            </a>
            
                <div class="card-body">
                    <div><h6 class="card-title"><?php echo e($ad->title); ?></h6></div>
                    <p class="card-text"><i class="far fa-money-bill-alt" style="color:#85bb65"></i><?php echo e($ad->price); ?> <?php echo e($ad->currency->symbol); ?></p>
                    <p class="card-text"></p>
                    <p class="blog-post-meta">   <i class="fas fa-map-marked-alt" style="color:#0c263b"></i>  <?php echo e($ad->wilaya->name_ar); ?>  </p>
                    <p class="card-text"> </p>
                    <p class="card-icon"> 
                  
                      <i class="fas fa-eye" style="color:#85bb65">   <?php echo e($ad->adview_count); ?> </i>  
                         
                      <i> <?php echo e(\Carbon\Carbon::parse($ad->created_at)->diffForHumans()); ?></i>
                        
                        <i class="far fa-heart" style="color:red"><?php echo e($ad->favorite_count); ?></i>    

                    </p>
                  <!--  <a href="/ad/<?php echo e($ad->id); ?>/<?php echo e($ad->slug); ?>" class="btn btn-sm btn-outline-dark">التفاصيل</a>-->
                  <a href="/ad/<?php echo e($ad->id); ?>/<?php echo e($ad->slug); ?>" class=" btn btn-primary btn-outline-light">التفاصيل</a>
                 
                  <?php if(auth()->guard()->guest()): ?>  
                    <?php elseif(Auth::user()->isAdmin()): ?>
                        <form method="POST" action="<?php echo e(route('ads.destroy',$ad->id)); ?>" onsubmit="return confirm('هل تريد فعلاً حذف السجل')" >
                             <?php echo e(csrf_field()); ?>

                                <input name="_method" type="hidden" value="delete">
                                <button type="submit" class=" btn btn-primary btn-danger" >حذف<i class="glyphicon glyphicon-remove"></i></button>
                        </form>
           
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
</div>
<?php echo $__env->make('pagination.defaut', ['paginator' => $ads], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>