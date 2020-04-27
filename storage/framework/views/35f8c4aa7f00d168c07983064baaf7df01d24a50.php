<?php $__env->startSection('title','أضف مقالة'); ?>


<?php $__env->startSection('content'); ?>
<div class="col-lg-8">
    <p><h2> أدخل تفاصيل المقال</h2></p>
    <?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('alerts.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <form method="POST"  action="<?php echo e(route('posts.store')); ?>" enctype="multipart/form-data">
       <?php echo e(csrf_field()); ?>

      
        <div class="form-group">
            <label for="title">عنوان المقال:</label>
            <input type="text" class="form-control" name="title" value="<?php echo e(old('title')); ?>" >
        </div>
        <div  class="form-group">
            <label for="body" name="body"> المقال: </label>
           <textarea class="form-control" name="body" rows="20" ><?php echo e(old('text')); ?></textarea> 
        </div>
        <div class="form-group">
            <label for="body"> المختصر: </label>
            <textarea class="form-control" name="excerpt" rows="5" ><?php echo e(old('text')); ?></textarea>
        </div>
        <label class="form-check-label">
            
            <input type="checkbox"  name="is_published" class="form-check-input" >نشر المقالة
            </label>
    
        <div class="form-group">
            <label for="details"> أضف الصور </label>
            <input type="file" name="postimages[]"  class="form-control" multiple>
        </div>
        <button type="submit" class="btn btn-primary">أضف المقال</button>
        <a class="btn-sm btn-danger"  href="<?php echo e(route('posts.home')); ?>"><?php echo e(__('titles.cancel')); ?></a>
    </form>
</div>
<script type="text/javascript">
      $('#postCreation').summernote({
        placeholder: '<?php echo e(old('text')); ?>',
        tabsize: 2,
        height: 500
      });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('posts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>