
<?php $__env->startSection('layout_KH'); ?>
<div class="container-fluid">
    <h2 class="d-flex justify-content-center">THÔNG TIN VÉ:</h2>
    <form action="<?php echo e(URL::to('/veTemplateCreate')); ?>" method="post" id="frmdatve">
        <?php echo e(csrf_field()); ?>

        <label>Phim:</label>
        <div class="input-group input-group-lg">
            <input  class="form-control input-lg" type="text" name="tenPhim" value="<?php echo e($veTemp->tenPhim); ?>" readonly>
        </div>
        <br>

        <label>Suất chiếu:</label>
        <div class="input-group input-group-lg">
            <input class="form-control" type="datetime" name="giochieu"
                value="<?php echo e(Carbon\Carbon::parse($veTemp->giochieu)->format('d-m-Y H:i:s')); ?>" readonly>
        </div>
        <br>

        <label>Tên Khách Hàng:</label>
        <div class="input-group input-group-lg">
            <input class="form-control input-lg" type="text" name="tenKH" value="<?php echo e($KH->tenKH); ?>" readonly>
        </div>
        <br>

        <label>Email:</label>
        <div class="input-group input-group-lg">
            <input class="form-control" type="text" name="emailKH" value="<?php echo e($KH->emailKH); ?>" readonly>
        </div>
        <br>

        <label>Số Điện Thoại:</label>
        <div class="input-group input-group-lg">
            <input class="form-control" type="text" name="sdtKH" value="<?php echo e($KH->sdtKH); ?>" readonly>
        </div>
        <br>

        <label>Phòng:</label>
        <div class="input-group input-group-lg">
            <input class="form-control" type="text" name="vitriphong" value="<?php echo e($veTemp->vitriphong); ?>" readonly>
        </div>
        <br>

        <label>Ghế:</label>
        <div class="input-group input-group-lg">
            <input class="form-control" type="text" name="vitrighe" value="<?php echo e($veTemp->vitrighe); ?>" readonly>
        </div>
        <br>
        <?php if($KM==null): ?>
        <label>Mã giảm giá:</label>
        <div class="input-group input-group-lg">
            <input class="form-control" type="text" name="idKM" value="">
            <button style="color:black" type="submit" name="khuyenmai" value="khuyenmai" class="btn btn-warning">Nhập
                mã</button>
        </div>
        <br>
        <label>Tổng tiền:</label>
        <div class="input-group input-group-lg">
            <input class="form-control" type="text" name="tongtien" value="75000" readonly>
            <span class="input-group-text">VNĐ</span>
        </div>
        <br>
        <?php else: ?>
        <label>Mã giảm giá:</label>
        <div class="input-group input-group-lg">
            <input class="form-control" type="text" name="idKM" value="<?php echo e($KM->idKM); ?>" readonly>
        </div>
        <br>
        <label>Tổng tiền:</label>
        <div class="input-group input-group-lg">
            <input class="form-control" type="text" name="tongtien" value="<?php echo e(75000-(75000 * $KM->trigiaKM)); ?>" readonly>
            <span class="input-group-text">VNĐ</span>
        </div>
        <br><br>
        <?php endif; ?>

        <button id="btndatve" style="width:100%;color:black" type="submit" class="btn btn-warning btn-lg btn-block">Đặt vé</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_KH', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\wamp64\www\tttn-tonghop\tttn\resources\views/KH/ve.blade.php ENDPATH**/ ?>