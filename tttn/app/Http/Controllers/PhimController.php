<?php

namespace App\Http\Controllers;

use App\Models\tbl_phim;
use Illuminate\Http\Request;

class PhimController extends Controller
{
    public function index()
    {
        $phim = tbl_phim::with('tbl_loaiphim')->get();
        return view('NV.dsphim', compact('phim'));
    }

    public function create()
    {
        return view('NV.frmphimcreate');
    }

    public function store(Request $Request)
    {
        $Request->validate([
            'tenPhim' => 'required|min:2',
            'LPhim' => 'required',
            'trangthai' => 'required',
            'imgPhim' => 'required|image|max:2048',
            'mieutaPhim' => 'required',
            'daodienPhim' => 'required',
            'dienvien' => 'required'
        ]);
        $path = $Request->file('imgPhim')->getRealPath();
        $pic = file_get_contents($path);
        $phim = tbl_phim::create(['tenPhim' => $Request->tenPhim,
            'idLPhim' => $Request->LPhim,
            'trangthai' => $Request->trangthai,
            'imgPhim' => $pic,
            'mieutaPhim' => $Request->mieutaPhim,
            'daodienPhim' => $Request->daodienPhim,
            'dienvien' => $Request->dienvien
        ]);
        return redirect('/phim');
    }
/*
public function show(phim $phim)
{
return view('phim.show', compact('phim', $phim));
}
 */
    public function edit($idPhim)
    {
        $phim = tbl_phim::with('tbl_loaiphim')->where('idPhim', $idPhim)->first();
        return view('NV.frmphimedit', compact('phim', $phim));
    }

    public function update(Request $Request, $idPhim)
    {

        $Request->validate([
            'tenPhim' => 'required|min:2',
            'LPhim' => 'required',
            'trangthai' => 'required',
            'imgPhim' => 'nullable|image|max:2048',
            'mieutaPhim' => 'required',
            'daodienPhim' => 'required',
            'dienvien' => 'required'
        ]);
        if ($Request->file('imgPhim') != null) {
            $path = $Request->file('imgPhim')->getRealPath();
            $pic = file_get_contents($path);
            $phim = tbl_phim::with('tbl_loaiphim')->where('idPhim', $idPhim)
                ->update(['tenPhim' => $Request->tenPhim,
                    'idLPhim' => $Request->LPhim,
                    'trangthai' => $Request->trangthai,
                    'imgPhim' => $pic,
                    'mieutaPhim' => $Request->mieutaPhim,
            		'daodienPhim' => $Request->daodienPhim,
                    'dienvien' => $Request->dienvien
                ]);
        } else {
            $phim = tbl_phim::with('tbl_loaiphim')->where('idPhim', $idPhim)
                ->update(['tenPhim' => $Request->tenPhim,
                    'idLPhim' => $Request->LPhim,
                    'trangthai' => $Request->trangthai,
                    'mieutaPhim' => $Request->mieutaPhim,
            		'daodienPhim' => $Request->daodienPhim,
                    'dienvien' => $Request->dienvien
                ]);
        }

        return redirect('/phim');
    }

    public function destroy(Request $Request,$idPhim)
    {
        $phim = tbl_phim::with('tbl_loaiphim')->where('idPhim', $idPhim)->delete();
        return redirect('/phim');
    }
}
