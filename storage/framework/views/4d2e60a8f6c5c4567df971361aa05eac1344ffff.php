<?php if(session('success')): ?>
  <div class="alert alert-success">
      <?php echo e(session('success')); ?>

  </div>
<?php endif; ?>

      <?php if(count($errors) > 0): ?>
      
            <div class="spacer"></div>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>