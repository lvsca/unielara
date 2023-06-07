

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php $__currentLoopData = $bounties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bounty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($bounty->name); ?></h5>
                        <p class="card-text"><?php echo e($bounty->category); ?></p>
                        <a href="<?php echo e(route('bounty.show', [$bounty->id])); ?>" class="btn btn-primary"><?php echo e($bounty->price); ?></a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php echo e($bounty->created_at); ?></small>
                        <small class="text-muted">By: <?php echo e($bounty->User->name); ?></small>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel\resources\views/bounty/index.blade.php ENDPATH**/ ?>