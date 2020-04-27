<ul class="nav justify-content-center">
<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <li class="nav-item  ">
    <p class="cat">   
        <a class="nav-link active" href="/<?php echo e($category->id); ?>/<?php echo e($category->slug); ?>"><?php echo e($category->name); ?> </a>
    </p >  
   </li>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
 <li class="nav-item  "> 
   <p class="cat">  

       <a class="nav-link active" href="<?php echo e(route('posts.home')); ?>"><?php echo e(__('titles.blog')); ?> </a>
       </p>
    </li>
</ul>