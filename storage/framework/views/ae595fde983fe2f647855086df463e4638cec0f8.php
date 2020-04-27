
<?php $__env->startSection('title',"الرئيسية"); ?>


<?php $__env->startSection('content'); ?>
<!--<div id="sortNav"><h4>   الإعلانات    </h4> </div>-->
<h1>الإعلانات</h1>
<?php echo $__env->make('partials.sort', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partials.ads', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>