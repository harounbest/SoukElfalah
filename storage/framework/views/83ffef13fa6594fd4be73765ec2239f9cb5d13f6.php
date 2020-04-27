

<?php $__env->startSection('title', __('titles.myAds_title')); ?>

<?php $__env->startSection('content'); ?>

<div class="col-lg-8">
    <p><h2>إعلاناتي </h2></p>

    <?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>التاريخ</th>
        <th>عنوان الإعلان</th>
        <th>السعر</th>
      </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $userAds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($ad->created_at); ?></td>
        <td><a href="/ad/<?php echo e($ad->id); ?>/<?php echo e($ad->slug); ?>"><?php echo e($ad->title); ?></a></td>
        <td><?php echo e($ad->price); ?> <?php echo e($ad->currency->symbol); ?></td>
        <td>
            <div class="btn-group" role="group" >
                <a  class="btn-sm btn-primary" href="<?php echo e(route('ads.edit',$ad->id)); ?>" role="button" ><i class="glyphicon glyphicon-remove-sign"></i>تعديل</a>
                <form method="POST" action="<?php echo e(route('ads.destroy',$ad->id)); ?>" onsubmit="return confirm('هل تريد فعلاً حذف السجل')" >
                     <?php echo e(csrf_field()); ?>

                     <input name="_method" type="hidden" value="delete">
                    <button type="submit" class="btn-sm btn-danger" >حذف<i class="glyphicon glyphicon-remove"></i></button>
                </form>
            </div>
        </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>