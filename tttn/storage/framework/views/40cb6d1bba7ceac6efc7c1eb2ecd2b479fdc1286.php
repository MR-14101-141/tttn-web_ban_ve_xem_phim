<thead>
    <tr>
        <th scope="col">Mã KM</th>
        <th scope="col">Giá trị KM</th>
    </tr>
</thead>
<tbody>
    <?php $__currentLoopData = $dskm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $km): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr onclick="openurl('<?php echo e(URL::to('/singleKM',$km->idKM)); ?>');">
        <th scope="row"><?php echo e($km->idKM); ?></th>
        <td><?php echo e($km->trigiaKM*100); ?>%</td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
<tfoot>
    <tr>
        <td colspan="7">
            <?php echo e($dskm->links('NV.paginationVe')); ?>

        </td>
    </tr>
</tfoot><?php /**PATH O:\wamp64\www\tttn-tonghop\tttn\resources\views/NV/kmAll.blade.php ENDPATH**/ ?>