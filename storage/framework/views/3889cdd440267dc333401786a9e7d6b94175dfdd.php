

<?php $title=$ads->first(); ?>

<?php $__env->startSection('title', $title? $title->category->name :"لا توجد إعلانات ضمن هذا القسم"); ?>

<?php $__env->startSection('content'); ?>

<p><h3 class="mb-5"><?php echo e(empty($title)?"لا توجد إعلانات مضافة في هذا القسم":$title->category->name); ?></h3></p>

    <?php echo $__env->make('partials.ads', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>