<?php $title=$posts->first(); ?>

<?php $__env->startSection('title', " الأحدث  "); ?>

<?php $__env->startSection('content'); ?>

<h4>  أحدث  المقالات   </h4>
<?php echo $__env->make('posts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('posts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>