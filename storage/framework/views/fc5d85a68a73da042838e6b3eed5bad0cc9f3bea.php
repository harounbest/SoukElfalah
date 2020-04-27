<?php $title=$ads->first(); ?>

<?php $__env->startSection('title', "الأكثر تفضيلاً  "); ?>

<?php $__env->startSection('content'); ?>

<h2>    الأكثر تفضيلًا   </h2>
<?php echo $__env->make('partials.sort', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partials.ads', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>