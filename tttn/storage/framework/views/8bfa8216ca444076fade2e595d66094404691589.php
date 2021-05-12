
<?php $__env->startSection('dscuanv'); ?>
<br>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Mã</th>
                        <th scope="col">Phim</th>
                        <th scope="col">Phong</th>
                        <th scope="col">Gio chieu</th>
                        <th scope="col"><a href="<?php echo e(URL::to('lichchieu/create')); ?>" class="btn btn-info" role="button">+ thêm lịch chiếu
                        </a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $lichchieu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $lichchieu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($lichchieu->idLC); ?></th>
                        <td><?php echo e($lichchieu->idPhim); ?></td>
                        <td><?php echo e($lichchieu->idPhong); ?></td>
                        <td><?php echo e($lichchieu->giochieu); ?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="<?php echo e(URL::to('lichchieu/' . $lichchieu->idLC . '/edit')); ?>">
                                    <button type="button" class="btn btn-warning">Sửa</button>
                                </a>&nbsp;
                                <form action="<?php echo e(URL::to('lichchieu/' . $lichchieu->idLC . '/delete')); ?>" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                    <input type="submit" class="btn btn-danger" value="Xoá" />
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_NV', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\wamp64\www\tttn-tonghop\tttn\resources\views/NV/dslichchieu.blade.php ENDPATH**/ ?>