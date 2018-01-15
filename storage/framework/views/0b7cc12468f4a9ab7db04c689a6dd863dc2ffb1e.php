<?php if(count($errors) > 0 ): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="alert alert-danger"><?php echo e(@error); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(session('Erorr')): ?>
    <div class="alert alert-danger"><?php echo e(session('Error')); ?></div>
<?php endif; ?>

<?php if(session('Success')): ?>
    <div class="alert alert-danger"><?php echo e(session('Success')); ?></div>
<?php endif; ?>