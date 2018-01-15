<?php $__env->startSection('main-row'); ?>
    <?php echo $__env->make('inc.sideArea', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="col-md-8 col-md-offset-2">
        <h3 class="text-center"><?php echo e($news->title); ?></h3>
        <small class="text-muted"><?php echo e($news->author); ?></small>
        <p class="card-text"><?php echo e($news->content); ?></p>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>