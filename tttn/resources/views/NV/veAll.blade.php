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
    @foreach($dsve as $ve)
    @if($ve->statusVe==0)
    <tr style="background-color:grey" id="trhover">
        <th scope="row">{{$ve->idVe}}</th>
        <td>{{$ve->tenKH}}</td>
        <td>{{$ve->tenPhim}}</td>
        <td>{{Carbon\Carbon::parse($ve->giochieu)->format('d-m-Y H:i')}}</td>
        <td>{{$ve->tongtien}}</td>
        <td>{{Carbon\Carbon::parse($ve->ngaydatve)->format('d-m-Y H:i')}}</td>
        <td>Hết hạn</td>
    </tr>
    @else
    <tr onclick="printExternal('{{URL::to('/veTemplateShow',$ve->idVe)}}');" id="trhover">
        <th scope="row">{{$ve->idVe}}</th>
        <td>{{$ve->tenKH}}</td>
        <td>{{$ve->tenPhim}}</td>
        <td>{{Carbon\Carbon::parse($ve->giochieu)->format('d-m-Y H:i')}}</td>
        <td>{{$ve->tongtien}}</td>
        <td>{{Carbon\Carbon::parse($ve->ngaydatve)->format('d-m-Y H:i')}}</td>
        <td>Còn hạn</td>
    </tr>
    @endif
    @endforeach
</tbody>
<tfoot>
    <tr>
        <td colspan="7">
            {{$dsve->links('NV.paginationVe')}}
        </td>
    </tr>
</tfoot>