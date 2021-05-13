
<?php $__env->startSection('dscuanv'); ?>
<br>
<div class="container-fluid">   
<div class="card">
    <div class="card-body">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Mã khách hàng</th>
                    <th scope="col">Tên Khách Hàng</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Hành động</th>
                
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $dskh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $dskh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($dskh->idKH); ?></th>
                    <td><?php echo e($dskh->tenKH); ?></td>
                    <td><?php echo e($dskh->gioitinhKH); ?></td>
                    <td><?php echo e($dskh->ngaysinh); ?></td>
                    <td><?php echo e($dskh->sdtKH); ?></td>
                    <td>
                  
                   <a href="<?php echo e(URL::to('/profilekh/'.$dskh->idKH)); ?>" class="btn btn-primary">
                   SỬA</a>
                    </td>
                   
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_NV', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\wamp64\www\tttn-tonghop\tttn\resources\views/NV/quanlykh.blade.php ENDPATH**/ ?>