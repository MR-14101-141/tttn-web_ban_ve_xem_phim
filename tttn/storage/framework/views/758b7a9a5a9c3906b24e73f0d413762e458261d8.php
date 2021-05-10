
<?php $__env->startSection('dscuanv'); ?>
<br>
<div class="container-fluid">   
<div class="card">
    <div class="card-body">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Ten Phim</th>
                    <th scope="col">Poster</th>
                    <th scope="col">Trang thai</th>
                    <th scope="col">The Loai</th>
                    <th scope="col"><a href="<?php echo e(URL::to('phim/create')); ?>" class="btn btn-info" role="button">+ tao phim</a></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $phim; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $phim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($phim->idPhim); ?></th>
                    <td><?php echo e($phim->tenPhim); ?></td>
                    <td><img src="data:image/png;base64,<?php echo e(chunk_split(base64_encode($phim->imgPhim))); ?>" width="100"
                            height="150" alt="<?php echo e($phim->tenPhim); ?>"></td>
                    <?php if($phim->trangthai==1): ?>
                    <td>Còn chiếu</td>
                    <?php else: ?>
                    <td>Hết chiếu</td>
                    <?php endif; ?>
                    <td><?php echo e($phim->tbl_loaiphim->tenLPhim); ?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="<?php echo e(URL::to('phim/' . $phim->idPhim . '/edit')); ?>">
                                <button type="button" class="btn btn-warning">Edit</button>
                            </a>&nbsp;
                            <form action="<?php echo e(URL::to('phim/' . $phim->idPhim . '/delete')); ?>" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="submit" class="btn btn-danger" value="Delete" />
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
<?php echo $__env->make('layout_NV', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\wamp64\www\tttn-tonghop\tttn-web_ban_ve_xem_phim\tttn\resources\views/NV/dsphim.blade.php ENDPATH**/ ?>