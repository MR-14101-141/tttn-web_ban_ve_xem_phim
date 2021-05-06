@extends('layout_NV')
@section('dscuanv')
<div class="container-fluid">
<br>
    <form action="{{URL::to('/crudKM')}}" method="post">
        {{csrf_field()}}
        <label>Mã khuyến mãi:</label>
        <input class="form-control" type="text" name="idKM" value="">

        <label>Giá trị KM:</label>
        <div class="input-group mb-3">
            <input type="number" class="form-control" name="trigiaKM" value="" aria-label="Recipient's username"
                aria-describedby="basic-addon2">
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">%</span>
            </div>
        </div>
        <div style="width:100%" class='btn-group btn-group-lg'>
        <button name="action" value="add" type="submit" class="btn btn-primary">Thêm</button>
        <button type="submit" class="btn btn-dark">Quay lại</button>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection