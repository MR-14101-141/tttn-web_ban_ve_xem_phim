<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Booking ticket</title>

    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td {
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media  only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }

    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box rtl">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="https://png.pngtree.com/png-clipart/20190516/original/pngtree-cinema-vector-illustration-png-image_3704537.jpg"
                                    style="width:300px;height:200px" />
                            </td>

                            <td>
                                Mã vé: #<?php echo e($ve->idVe); ?><br />
                                Ngày đặt vé: <?php echo e(Carbon\Carbon::parse($ve->ngaydatve)->format('d-m-Y H:i:s')); ?><br />
                                Hạn vé: <?php echo e(Carbon\Carbon::parse($ve->hanve)->format('d-m-Y H:i:s')); ?>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td></td>
                            <td>
                                Tên KH: <?php echo e($ve->tenKH); ?><br />
                                SĐT KH: <?php echo e($ve->sdtKH); ?>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>Giờ chiếu</td>

                <td>Phim</td>
            </tr>

            <tr class="details">
                <td><?php echo e(Carbon\Carbon::parse($veTemp->giochieu)->format('H:i:s d-m-Y')); ?></td>

                <td><?php echo e($veTemp->tenPhim); ?></td>
            </tr>

            <tr class="heading">
                <td></td>
                <td>Vị trí ngồi</td>
            </tr>

            <tr class="item">
                <td></td>
                <td>Phòng: <?php echo e($veTemp->vitriphong); ?></td>
            </tr>

            <tr class="item">
                <td></td>
                <td>Ghế: <?php echo e($veTemp->vitrighe); ?></td>
            </tr>

            <tr>
                <td>Tổng tiền: <?php echo e($ve->tongtien); ?> VNĐ</td>

                <td></td>
            </tr>
        </table>
    </div>
</body>

</html><?php /**PATH O:\wamp64\www\tttn-tonghop\tttn\resources\views/KH/bookmail.blade.php ENDPATH**/ ?>