

<?php $__env->startSection('title', __('titles.srch_title')); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.sort', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<p><h3 class="mb-5" style="color: #0c263b;">نتائج البحث:</h3></p>

    <?php echo $__env->make('partials.ads', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>