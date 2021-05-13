
<?php $__env->startSection('layout_KH'); ?>
<section class="container">
    <h1 class="d-flex justify-content-center">Đổi mật khẩu</h1>
    <form action="<?php echo e(URL::to('/update-password')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <td>Mật khẩu cũ</td>
                    <td>:</td>
                    <td><input type="password" name="old_password"></td>
                </tr>
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
                <input type="hidden" name="hidden_cusid" value="<?php echo e(Session::get('idKH')); ?>">
            </table>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-5"></div>
        <div class="col-md-2 justify-content-center">
            <input type="submit" value="Đổi mật khẩu" name="update" class="btn btn-warning">
        </div>
        <div class="col-md-5"></div>
    </form>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_KH', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\wamp64\www\tttn-tonghop\tttn\resources\views/KH/changepassfrm.blade.php ENDPATH**/ ?>