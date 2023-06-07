

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="header mb-4 border-bottom rounded">
            <h1 class="h3">Dashboard</h1>
        </div>

        <div class="d-flex align-items-start shadow-sm rounded">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Overview</button>
              <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Bounty</button>
              <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Transaction</button>
            </div>
            <div class="tab-content px-2 py-2 mx-4" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                    <p>Overview Content</p>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                    <a href="<?php echo e(route('bounty.create')); ?>" class="nav-link">Create Bounty</a>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                    <div class="row row-cols-1 row-cols-2 g-3">
                        <div class="col col-md-4 g-4">
                            <form action="<?php echo e(route('wallet.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="text" name="txhash" id="txhash" placeholder="TxHash" class="mb-4">
                                <input type="text" name="amount" id="amount" placeholder="Amount" class="mb-4">
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                        <div class="col col-lg-4 g-4">
                            <table class="mb-3 table table-hover table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">TxHash</th>
                                        <th scope="col">Amount</th>
                                    </tr>
                                </thead>
                                <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tbody class="table-group devider">
                                        <td><?php echo e($transaction->id); ?></td>
                                       <td><a href="" target="_blank"><?php echo e($transaction->txhash); ?></a></td>
                                       <td><?php echo e($transaction->amount); ?></td>
                                    </tbody>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel\resources\views/profile/index.blade.php ENDPATH**/ ?>