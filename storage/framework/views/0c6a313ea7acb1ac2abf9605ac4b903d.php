

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="header mb-4 border-bottom rounded">
            <h1 class="h3">Create Bounty</h1>
        </div>

        <div class="row align-item-start">
            <div class="col col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 class="card-title">Bounty Detail</h5>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('bounty.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="name" class="form-label">Bounty Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Bounty Category</label>
                                <input type="text" name="category" id="category" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="decimal" name="price" id="price" class="form-control">
                            </div>
                            <button type="submit" class="btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col col-md-8 g-4">
                <div class="row row-cols-1 row-cols-2 mb-3 g-4">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-header text-center">
                                <h5 class="card-title">Latest Transaction</h5>
                            </div>
                            <div class="card body">
                                <table class="table table-hover table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Price</th>
                                        </tr>
                                    </thead>
                                    <?php $__currentLoopData = $bounties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bounty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tbody class="table-group devider">
                                        <td><?php echo e($bounty->name); ?></td>
                                        <td><?php echo e($bounty->category); ?></td>
                                        <td><?php echo e($bounty->price); ?></td>
                                    </tbody>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel\resources\views/bounty/create.blade.php ENDPATH**/ ?>