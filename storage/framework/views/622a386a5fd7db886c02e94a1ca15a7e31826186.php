<?php $__env->startSection('content'); ?>
<div class="col-lg-8">
    <p> <h2> تفضيلاتي</h2> </p>
    <table class="table table-hover">
        <thead>
        <tr>
            <th> التاريخ</th>
            <th>الإعلان</th>
            <th> السعر </th>
            <td>
               
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $userfav; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td> <?php echo e($ad->pivot->created_at); ?> </td>
            <td> <?php echo e($ad->title); ?></td>
            <td><?php echo e($ad->price); ?> <?php echo e($ad->currency->symbol); ?> </td>
            <td>
                <div class="btn-group" role="group">
                    <a class="btn-sm" "btn-primary" href="/ad/<?php echo e($ad->id); ?>/<?php echo e($ad->slug); ?>" role="button"> <i class="glyphicon glyphicon-remove-sign"> </i>عرض </a>
                </div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

        </tbody>
    </table>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>