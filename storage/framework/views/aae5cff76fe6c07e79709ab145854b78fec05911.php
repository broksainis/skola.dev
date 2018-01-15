<?php $__env->startSection('main-row'); ?>
    <?php echo $__env->make('inc.sideArea', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="col-md-8" id="main-category">
        <div id="category header">
            <h4>Jaunumu kategorijas</h4>
        </div>

        <div id="category-container">
            <div id="category-form">
                <?php echo Form::open(['route' => 'newscategory.add', 'method' => 'POST']); ?>

                    <?php echo Form::label('newsCategoryName', 'Nosaukums'); ?>

                    <?php echo Form::text('newsCategoryName', '', ['class' => 'form-control']); ?>

                    <?php echo Form::submit('Pievienot', ['class' => 'btn btn-success btn-block']); ?>

                <?php echo Form::close(); ?>

            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>