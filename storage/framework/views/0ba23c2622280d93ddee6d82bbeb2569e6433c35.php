<?php $__env->startSection('content'); ?>

<div class="col-lg-8">
    <p><h2> أدخل تفاصيل إعلانك</h2></p>
    <?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('alerts.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <form method="POST" action="<?php echo e(route('ad.store')); ?>" enctype="multipart/form-data"> 
       <?php echo e(csrf_field()); ?>

       <div class="form-group">
            <label for="wilaya">حدد الولاية</label>
            <select class="form-control" name="wilaya_id" >
                    <?php echo $__env->make('lists.wilayas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="catg"> اختر التصنيف</label>
            <select class="form-control" name="category_id" >
               <?php echo $__env->make('lists.categories', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="title">عنوان الإعلان:</label>
            <input type="text" class="form-control" name="title" value="<?php echo e(old('title')); ?>">
        </div>
        <div class="form-group">
            <label for="details">تفاصيل الإعلان: </label>
            <textarea class="form-control" name="text" rows="3" ><?php echo e(old('text')); ?></textarea>
        </div>
        <div class="form-group">
            <label class="col-lg-3 control-label" value="<?php echo e(old('price')); ?>">السعر</label>
            <div class="row">
                <div class="col-lg-7">
                    <input type="number" class="form-control" value="<?php echo e(old('price')); ?>" name="price" step="any" placeholder="" title="السعر" >
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
            <input type="file" name="images[]"  class="form-control" multiple>
        </div>
        <button type="submit" class="btn btn-primary">أضف الإعلان</button>
        <a class="btn btn-primary btn-close"  href="<?php echo e(route('home')); ?>"><?php echo e(__('titles.cancel')); ?></a>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>