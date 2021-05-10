<thead>
    <tr>
        <th scope="col">Mã vé</th>
        <th scope="col">Tên khách hàng</th>
        <th scope="col">Tên phim</th>
        <th scope="col">Lịch chiếu</th>
        <th scope="col">Tổng tiền</th>
        <th scope="col">Ngày đặt</th>
        <th scope="col">Trạng thái</th>
    </tr>
</thead>
<tbody>
    <?php $__currentLoopData = $dsve; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($ve->statusVe==0): ?>
    <tr style="background-color:grey" id="trhover">
        <th scope="row"><?php echo e($ve->idVe); ?></th>
        <td><?php echo e($ve->tenKH); ?></td>
        <td><?php echo e($ve->tenPhim); ?></td>
        <td><?php echo e(Carbon\Carbon::parse($ve->giochieu)->format('d-m-Y H:i')); ?></td>
        <td><?php echo e($ve->tongtien); ?></td>
        <td><?php echo e(Carbon\Carbon::parse($ve->ngaydatve)->format('d-m-Y H:i')); ?></td>
        <td>Hết hạn</td>
    </tr>
    <?php else: ?>
    <tr onclick="printExternal('<?php echo e(URL::to('/veTemplateShow',$ve->idVe)); ?>');" id="trhover">
        <th scope="row"><?php echo e($ve->idVe); ?></th>
        <td><?php echo e($ve->tenKH); ?></td>
        <td><?php echo e($ve->tenPhim); ?></td>
        <td><?php echo e(Carbon\Carbon::parse($ve->giochieu)->format('d-m-Y H:i')); ?></td>
        <td><?php echo e($ve->tongtien); ?></td>
        <td><?php echo e(Carbon\Carbon::parse($ve->ngaydatve)->format('d-m-Y H:i')); ?></td>
        <td>Còn hạn</td>
    </tr>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
<tfoot>
    <tr>
        <td colspan="7">
            <?php echo e($dsve->links('NV.paginationVe')); ?>

        </td>
    </tr>
</tfoot><?php /**PATH O:\wamp64\www\tttn-tonghop\tttn-web_ban_ve_xem_phim\tttn\resources\views/NV/veAll.blade.php ENDPATH**/ ?>