<?php if($paginator->lastPage() > 1): ?>

<nav class="blog-pagination">
<ul class="pagination">
    <li class="<?php echo e(($paginator->currentPage() == 1) ? ' disabled' : ''); ?>">
       
        
        <a class="btn btn-outline-secondary" href=" <?php echo e($paginator->url(1)); ?>">الأقدم</a>
    </li>
    <?php for($i = 1; $i <= $paginator->lastPage(); $i++): ?>
        <li class="<?php echo e(($paginator->currentPage() == $i) ? ' active' : ''); ?>">
            <a class="btn btn-outline-primary" href="<?php echo e($paginator->url($i)); ?>"><?php echo e($i); ?></a>
        </li>
    <?php endfor; ?>
    <li class="<?php echo e(($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : ''); ?>">
    <a class="btn btn-outline-primary" href="<?php echo e($paginator->url($paginator->currentPage()+1)); ?>">الأجدد</a>  
       
    </li>
 </nav>
 </ul>
<?php endif; ?>


           
           
             
           
