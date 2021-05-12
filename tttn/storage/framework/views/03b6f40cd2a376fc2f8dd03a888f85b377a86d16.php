
<?php $__env->startSection('dscuanv'); ?>
<?php $__currentLoopData = $nvprofile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $nvprofile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section class="container">
    <h1 class="d-flex justify-content-center">THÔNG TIN NHÂN VIÊN</h1>

    <form action="<?php echo e(URL::to('/update-nv/'.$nvprofile->idNV)); ?>" method="post">
        <?php echo csrf_field(); ?>
        
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo e($nvprofile->emailNV); ?></td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                    <td>:</td>
                    <td><a href="<?php echo e(URL::to('/change-passwordadmin')); ?>">Đổi mật khẩu</a></td>
                </tr>
                <tr>
                    <td>Tên</td>
                    <td>:</td>
                    <td><input type="text" name="name" value="<?php echo e($nvprofile->tenNV); ?>" id=""></td>
                </tr>
                <tr>

                    <td>Giới tính</td>
                    <td>:</td>
                    <?php
                if($nvprofile->gioitinhNV == 'Nam'){
              ?>
                    <td>
                        <div class="form-group m-b-25 wrap-input100 validate-input">

                            <select name="gioitinhNV" class="input100 form-control input-lg m-bot15">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                        </div>
                        <?php
								}else{
							?>
                    </td>
                    <td>
                        <select name="gioitinhKH" class="input100 form-control input-lg m-bot15">
                            <option value="Nữ">Nữ</option>
                            <option value="Nam">Nam</option>
                            <?php            
								}
							?>
                    </td>
                </tr>

                <tr>
                    <td>Ngày sinh</td>
                    <td>:</td>
                    <td><input type="date" name="ngaysinh" value="<?php echo e($nvprofile->ngaysinhNV); ?>"></td>
                </tr>

            </table>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-5"></div>
        <div class="col-md-2 justify-content-center">
            <input type="submit" value="Sửa" name="update" class="btn btn-warning">
        </div>
        <div class="col-md-5"></div>
    </form>
</section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_NV', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\wamp64\www\tttn-tonghop\tttn\resources\views/NV/profileNV.blade.php ENDPATH**/ ?>