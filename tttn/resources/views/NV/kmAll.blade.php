<thead>
    <tr>
        <th scope="col">Mã KM</th>
        <th scope="col">Giá trị KM</th>
    </tr>
</thead>
<tbody>
    @foreach($dskm as $km)
    <tr onclick="openurl('{{URL::to('/singleKM',$km->idKM)}}');">
        <th scope="row">{{$km->idKM}}</th>
        <td>{{$km->trigiaKM*100}}%</td>
    </tr>
    @endforeach
</tbody>
<tfoot>
    <tr>
        <td colspan="7">
            {{$dskm->links('NV.paginationVe')}}
        </td>
    </tr>
</tfoot>