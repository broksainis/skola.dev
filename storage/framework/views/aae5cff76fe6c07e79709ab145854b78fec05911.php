<?php $__env->startSection('main-row'); ?>

    <?php echo $__env->make('inc.sideArea', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="col-md-8" id="main-category">
        <div id="category-header">
            <h4>Kategorijas</h4>
        </div>

        <div id="category-container">
            Container
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>