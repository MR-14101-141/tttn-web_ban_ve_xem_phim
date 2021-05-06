<?php

namespace App\Http\Controllers;

use App\Models\tbl_lichchieu;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LichChieuController extends Controller
{
    public function index()
    {
        $lichchieu = tbl_lichchieu::all();
        return view('NV.dslichchieu', compact('lichchieu'));
    }

    public function create()
    {
        return view('NV.frmLCcreate');
    }

    public function store(Request $Request)
    {
        $Request->validate([
            'idPhim' => 'required',
            'idPhong' => 'required',
            'giochieu' => 'required',
        ]);
        $giochieu = Carbon::parse($Request->giochieu)->format('Y-m-d H:i:s');
        $LichChieu = tbl_lichchieu::create(['idPhim' => $Request->idPhim,
            'idPhong' => $Request->idPhong,
            'giochieu' => $giochieu,
            'statusLC' => 1]);
        return redirect('/lichchieu');
    }
/*
public function show(phim $phim)
{
return view('phim.show', compact('phim', $phim));
}
 */
    public function edit($idLC)
    {
        $lichchieu = tbl_lichchieu::with(['tbl_phim'])->where('idLC', $idLC)->first();
        return view('NV.frmLCedit', compact('lichchieu', $lichchieu));
    }

    public function update(Request $Request, $idLC)
    {
        $Request->validate([
            'idPhim' => 'required',
            'idPhong' => 'required',
            'giochieu' => 'required',
        ]);

        $giochieu = Carbon::parse($Request->giochieu)->format('Y-m-d H:i:s');
        $lichchieu = tbl_lichchieu::with(['tbl_phim'])->where('idLC', $idLC)->update([
            'idPhim' => $Request->idPhim,
            'idPhong' => $Request->idPhong,
            'giochieu' => $giochieu
        ]);

        return redirect('/lichchieu');
    }

    public function destroy(Request $Request,$idLC)
    {
        $lichchieu = tbl_lichchieu::with(['tbl_phim'])->where('idLC', $idLC)->delete();
        return redirect('/lichchieu');
    }
}
