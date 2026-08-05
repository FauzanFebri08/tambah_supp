

<?php $__env->startSection('title', 'Supplier'); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="container my-4">
        <div class="card border-0 shadow-sm rounded-4 p-3">

            <div
                class="card-body bg-primary text-white rounded-4 p-4 mb-4 d-flex justify-content-between align-items-center flex-wrap gap-3">
                <div>
                    <h3 class="fw-bold mb-1 d-flex align-items-center gap-2">
                        Manajemen Supplier
                    </h3>
                    <p class="mb-0 text-white-50 small">Kelola seluruh data supplier.</p>
                </div>
                <a href="<?php echo e(route('supplier.create')); ?>"
                    class="btn btn-light text-primary fw-bold px-3 py-2 rounded-3 shadow-sm">
                    + Tambah Supplier
                </a>
            </div>

            <div class="px-2">
                <form action="<?php echo e(route('supplier.index')); ?>" method="GET" class="mb-4">
                    <div class="input-group">
                        <input type="text" name="search" value="<?php echo e(request('search')); ?>"
                            class="form-control py-2 ps-3 border-end-0" placeholder="Cari supplier...">
                        <button class="btn btn-primary px-4 fw-bold" type="submit">
                            Search
                        </button>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" class="fw-bold text-secondary">#</th>
                                <th scope="col" class="fw-bold text-secondary">Nama Supplier</th>
                                <th scope="col" class="fw-bold text-secondary">Alamat</th>
                                <th scope="col" class="fw-bold text-secondary">No. Telepon</th>
                                <th scope="col" class="fw-bold text-secondary">Aksi</th>
                                <th scope="col" class="fw-bold text-secondary text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <th scope="row" class="text-secondary fw-normal"><?php echo e($suppliers->firstItem() + $loop->index); ?></th>
                                <td class="fw-semibold text-dark"><?php echo e($supplier->nama); ?></td>
                                <td class="text-secondary"><?php echo e($supplier->alamat); ?></td>
                                <td class="fw-bold text-success"><?php echo e($supplier->no_telp); ?></td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-1">
                                        <a href="<?php echo e(route('supplier.show', $supplier)); ?>" class="btn btn-info btn-sm text-white rounded-2 px-2 py-1">
                                            Detail
                                        </a>

                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', $supplier)): ?>
                                            <a href="<?php echo e(route('supplier.edit', $supplier)); ?>" class="btn btn-warning btn-sm text-white rounded-2 px-2 py-1">
                                                Edit
                                            </a>
                                        <?php endif; ?>

                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $supplier)): ?>
                                            <form action="<?php echo e(route('supplier.destroy', $supplier)); ?>" method="POST" onsubmit="return confirm('Apakah Anda yakin akan menghapus supplier ini?');" class="d-inline">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger btn-sm rounded-2 px-2 py-1">
                                                    Hapus
                                                </button>
                                            </form>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            <td class="text-center">
                                    <div class="d-flex justify-content-center gap-1">
                                        <a href="<?php echo e(route('penjualan.show', $sale)); ?>" class="btn btn-info btn-sm text-white rounded-2 px-2 py-1">
                                            Detail
                                        </a>

                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', $sale)): ?>
                                            <a href="<?php echo e(route('penjualan.edit', $sale)); ?>" class="btn btn-warning btn-sm text-white rounded-2 px-2 py-1">
                                                Edit
                                            </a>
                                        <?php endif; ?>

                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $sale)): ?>
                                            <form action="<?php echo e(route('penjualan.destroy', $sale)); ?>" method="POST" onsubmit="return confirm('Apakah Anda yakin akan menghapus penjualan ini?');" class="d-inline">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger btn-sm rounded-2 px-2 py-1">
                                                    Hapus
                                                </button>
                                            </form>
                                        <?php endif; ?>
                                    </div>
                            </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="7" class="text-center py-5">
                                    <h4 class="fw-bold text-dark mb-0">Data tidak tersedia.</h4>
                                </td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\jannn_pos\resources\views/supplier/index.blade.php ENDPATH**/ ?>