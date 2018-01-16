<?php echo $__env->make('inc.menuArea', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('main-row'); ?>
    <?php if((count($news) > 0)): ?>
        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card text-left">
        <div class="card-block">
            <?php if($new->image): ?><img class="img-thumbnail" src="<?php echo e($new->image); ?>" alt=""><?php else: ?> <img class="img-thumbnail" src="https://mosaikweb.com/wp-content/plugins/lightbox/images/No-image-found.jpg" alt="">  <?php endif; ?>
            <h4 class="card-title"><?php echo e($new->title); ?></h4>
            <p class="card-text"><?php echo e(str_limit($new->content, $limit = 150, $end = '...')); ?></p>
            <a href="<?php echo e(route('blog.show', ['id' => $new->id])); ?>" class="btn btn-primary">Lasīt tālāk..</a>
        </div>
        <div class="card-footer text-muted">
            <p><?php echo e($new->created_at); ?></p>
        </div>
    </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <div class="alert alert-danger">Nav ziņu.</div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>