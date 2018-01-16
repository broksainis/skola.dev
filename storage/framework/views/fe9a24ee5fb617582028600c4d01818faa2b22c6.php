<?php echo $__env->make('inc.menuArea', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('main-row'); ?>
    <div class="col-md-8 col-md-offset-2">
        <?php if($news->image): ?><img class="img-large-center" src="<?php echo e($news->image); ?>" alt=""><?php else: ?> <img class="img-thumbnail" src="https://mosaikweb.com/wp-content/plugins/lightbox/images/No-image-found.jpg" alt="">  <?php endif; ?>
        <h3 class="text-center"><?php echo e($news->title); ?></h3>
        <small class="text-muted"><?php echo e($news->author); ?></small>
        <p class="card-text"><?php echo e($news->content); ?></p>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>