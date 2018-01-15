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

        <div id="categories table" class="table-responsive">
            <?php if(count($newscategories) > 0): ?>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Nosaukums</th>
                    <th>Autors</th>
                    <th>Pievienots</th>
                    <th>Rediģēt</th>
                    <th>Dzēst</th>
                </tr>

                <?php $__currentLoopData = $newscategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i+1); ?></td>
                    <td><?php echo e($category->name); ?></td>
                    <td><?php echo e($category->author); ?></td>
                    <td><?php echo e($category->created_at); ?></td>
                    <td><a><span class="btn btn-warning">Rediģēt</span></a></td>
                    <td><a><span class="btn btn-warning">Dzēst</span></a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
                <?php endif; ?>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>