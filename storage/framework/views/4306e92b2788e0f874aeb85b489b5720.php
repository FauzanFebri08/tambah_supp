

<?php $__env->startSection('title', 'Tambah Supplier'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="container py-4">

    <div class="row justify-content-center">

        <div class="col-md-8 col-lg-7">

            <div class="card shadow-lg border-0 rounded-4">

                <div class="card-header bg-primary text-white py-3">

                    <h3 class="mb-0">
                        <i class="bi bi-person-plus-fill"></i>
                        Tambah Supplier
                    </h3>

                    <small>Masukkan data supplier baru.</small>

                </div>

                <div class="card-body p-4">

                    <form action="<?php echo e(route('supplier.store')); ?>" method="POST">

                        <?php echo $__env->make('supplier._form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\jannn_pos\resources\views/supplier/create.blade.php ENDPATH**/ ?>