
<?php $__env->startSection('dscuanv'); ?>
<section class="container">
    <h1 class="d-flex justify-content-center">Đổi mật khẩu</h1>
    <hr>

    <div class="card">
        <div class="card-body">
    <form action="<?php echo e(URL::to('/doimatkhauKH')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div>
            <table class="table d-flex justify-content-center">
                <tr>
                    <td>Mật khẩu mới</td>
                    <td>:</td>
                    <td><input type="password" name="new_password"></td>
                </tr>
                <tr>
                    <td>Xác nhận mật khẩu mới</td>
                    <td>:</td>
                    <td><input type="password" name="confirm_password"></td>
                </tr>
                <input type="hidden" name="hidden_cusid" value="<?php echo e($idKH); ?>">
            </table>
        </div>
        <div class="d-flex justify-content-center">
            <input type="submit" value="Đổi mật khẩu" name="update" class="btn btn-warning">
        </div>
    </form>
    </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_NV', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\wamp64\www\tttn-tonghop\tttn\resources\views/NV/changepassfrmKH.blade.php ENDPATH**/ ?>