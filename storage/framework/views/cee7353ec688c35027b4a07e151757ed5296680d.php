
<div class="col-md-12">
    <form method="post" action="/posts/search">
        <?php echo e(csrf_field()); ?>

        <div class="form-row">
        
            <div class="form-group col-md-6">
                <input type="text" placeholder=" إبحث عن مقالة   " class="form-control" name="keyword">
            </div>
            <div class="form-group col-md-2">
                <button type="submit" class="btn btn-primary">
                        بحث
                </button>
            </div>
        </div>
    </form>
</div>
