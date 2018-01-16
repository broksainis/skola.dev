<?php $__env->startSection('main-row'); ?>
    <?php echo $__env->make('inc.sideArea', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="col-md-8" id="main-category">
        <div id="category header">
            <h4>Jaunumi</h4>
        </div>

        <div id="category-container">
            <div id="category-form">
                <?php echo Form::open(['route' => 'news.add', 'method' => 'POST']); ?>

                <?php echo Form::label('newsTitle', 'Nosaukums'); ?>

                <?php echo Form::text('newsTitle', '', ['class' => 'form-control']); ?>


                <?php echo Form::label('newsImage', 'Saite uz fotogrāfiju'); ?>

                <?php echo Form::text('newsImage', '', ['class' => 'form-control']); ?>


                <?php echo Form::label('newsCategoryName', 'Kategorija'); ?>

                <select name="newsCategoryName" id="newsCategoryName" class="form-control">
                    <option disabled>Izvēlies</option>
                    <?php $__currentLoopData = $newscategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option><?php echo e($category->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <?php echo Form::label('newsContent', 'Saturs'); ?>

                <?php echo Form::textarea('newsContent', '', ['class' => 'form-control']); ?>


                <?php echo Form::submit('Pievienot', ['class' => 'btn btn-success btn-block']); ?>

                <?php echo Form::close(); ?>

            </div>
        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>