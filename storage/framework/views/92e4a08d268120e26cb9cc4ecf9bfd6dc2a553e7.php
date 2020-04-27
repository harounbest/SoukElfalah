
<div class="col-md-12">
    <form method="post" action="/search">
        <?php echo e(csrf_field()); ?>

        <div class="form-row">
            <div class="form-group col-md-3">
                <select class="form-control " name="category" >
                    <option value="">--اختر التصنيف--</option>
                        <?php echo $__env->make('lists.categories', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </select>
            </div>
            <div class="form-group col-md-3">
                <select class="form-control" name="wilaya" >
                    <option value="">--اختر الولاية--</option>
                        <?php echo $__env->make('lists.wilayas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <input type="text" placeholder="عنوان الإعلان" class="form-control" name="keyword">
            </div>
            <div class="form-group col-md-2">
                <button type="submit" class="btn btn-primary">
                        بحث
                </button>
            </div>
        </div>
    </form>
</div>
