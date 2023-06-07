

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 g-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><?php echo e($bounty->name); ?></h5>
                    </div>
                    <div class="card-body">
                        <p>Category: <?php echo e($bounty->category); ?></p>
                        <p>Price :<?php echo e($bounty->price); ?></p>
                    </div>
                    <div class="card-footer">
                        <button>Buy</button>
                    </div>
                </div>
            </div>
            <div class="col-md-8 g-4">
                <div class="row">
                    <h5 class="header">Recomendation</h5>
                    <div class="col-sm-3">
                        content here
                    </div>
                    <div class="col-sm-3">
                        content here
                    </div>
                    <div class="col-sm-3">
                        content here
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel\resources\views/bounty/show.blade.php ENDPATH**/ ?>