<?php $__env->startSection('title', __('titles.updAd_title')); ?>

<?php $__env->startSection('content'); ?>

<div class="col-lg-8">
    <p><h2> تعديل الإعلان</h2></p>

    <?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('alerts.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <form method="POST" action="<?php echo e(route('ads.update',$ad->id)); ?>" enctype="multipart/form-data">
       <?php echo e(csrf_field()); ?>

       <input name="_method" type="hidden" value="PUT">
       <div class="form-group">
            <label for="wilaya_id">حدد الولاية</label>
            <select class="form-control" name="wilaya_id" >
                 <?php $__currentLoopData = $wilayas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->id); ?>" <?php echo e($ad->wilaya_id == $item->id  ? 'selected' : ''); ?>> <?php echo e($item->name_ar); ?> </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="catg"> اختر التصنيف</label>
            <select class="form-control" name="category_id">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->id); ?>" <?php echo e($ad->category_id == $item->id  ? 'selected' : ''); ?>> <?php echo e($item->name); ?> </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="title">عنوان الإعلان:</label>
            <input type="text" class="form-control" name="title" value="<?php echo e($ad->title); ?>">
        </div>
        <div class="form-group">
            <label for="details">تفاصيل الإعلان: </label>
            <textarea class="form-control" name="text" rows="3"><?php echo e($ad->text); ?></textarea>
        </div>
        <div class="form-group">
            <label class="col-lg-3 control-label" >السعر</label>
            <div class="row">
                <div class="col-lg-7">
                    <input type="number" class="form-control" value="<?php echo e($ad->price); ?>" name="price"  step="any" placeholder="" title="السعر">
                </div>
                <div class="col-lg-5" title="">
                    <select class="form-control" name="currency_id">
                        <?php echo $__env->make('lists.currencies', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="details"> أضف الصور </label>
            <input type="file" name="imgs" class="form-control" multiple>
        </div>
        <button type="submit" class="btn btn-primary">تعديل الإعلان</button>
        <a class="btn btn-primary btn-close"  href="<?php echo e(route('home')); ?>"><?php echo e(__('titles.cancel')); ?></a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>