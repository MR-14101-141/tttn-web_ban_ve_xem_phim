
<?php $__env->startSection('layout_KH'); ?>
<section class="container">
    <h1 class="d-flex justify-content-center">Đăng ký</h1>

    <form action="<?php echo e(url('postsignup')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input class="input100" type="email" name="email" placeholder="Địa chỉ email"></td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                    <td>:</td>
                    <td><input class="input100" type="password" name="password" placeholder="Mật khẩu"></td>
                </tr>
                <tr>
                    <td>Xác nhận lại mật khẩu</td>
                    <td>:</td>
                    <td><input class="input100" type="password" name="repass" placeholder="Nhập lại mật khẩu"></td>
                </tr>
                <tr>
                    <td>Tên khách hàng</td>
                    <td>:</td>
                    <td><input class="input100" type="text" name="tenKH" placeholder="Nhập tên của bạn..."></td>
                </tr>
                <tr>

                    <td>Giới tính</td>
                    <td>:</td>
                    <td>
                    <select name="gioitinh" class="input100 form-control input-lg m-bot15">
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Ngày sinh</td>
                    <td>:</td>
                    <td><input type="date" name="ngaysinh"></td>
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td>:</td>
                    <td><input class="input100" type="text" name="sdtKH" placeholder="Nhập số điện thoại..."></td>
                </tr>
            </table>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-5"></div>
        <div class="col-md-2 justify-content-center">
            <input type="submit" value="Đăng ký" name="update" class="btn btn-warning">
        </div>
        <div class="col-md-5"></div>
    </form>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_KH', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\wamp64\www\tttn-tonghop\tttn\resources\views/KH/signupfrm.blade.php ENDPATH**/ ?>