<?php

namespace App\Http\Controllers;

use App;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Session;

class homeController extends Controller
{
    public function home()
    {
        $dsphim = DB::table('tbl_Phim')->where('trangthai', 1)
            ->orderBy('idPhim', 'desc')->paginate(8);
        $dsLphim = DB::Table('tbl_loaiphim')->get();
        return view('KH.dsPhim', compact(['dsphim', 'dsLphim']));
    }
    public function singlePhim($idPhim)
    {
        $phim = DB::table('tbl_Phim')->where('idPhim', $idPhim)
            ->join('tbl_loaiphim', 'tbl_Phim.idLPhim', 'tbl_loaiphim.idLPhim')->first();
        return view('KH.singlePhim', compact('phim'));
    }
    public function dsphimtheotheloai($idLPhim)
    {
        if ($idLPhim != 'all') {
            $dsphim = DB::table('tbl_Phim')->where('trangthai', 1)
                ->where('idLPhim', $idLPhim)
                ->orderBy('idPhim', 'desc')->paginate(8);
            return view('KH.dsPhimcon', compact('dsphim'));
        } else {
            $dsphim = DB::table('tbl_Phim')->where('trangthai', 1)
                ->orderBy('idPhim', 'desc')
                ->paginate(8);
            return view('KH.dsPhimcon', compact('dsphim'));
        }
    }
    public function phimSearch(Request $re)
    {
        if ($re->crud == 'search') {
            $dsphim = DB::table('tbl_Phim')->where('trangthai', 1)
                ->where($re->sorting_item, 'like', '%' . $re->search_item . '%')
                ->orderBy('idPhim', 'desc')->paginate(8);
            $dsLphim = DB::Table('tbl_loaiphim')->get();
            return view('KH.dsPhim', compact(['dsphim', 'dsLphim']));
        }
    }
    public function dsLC($idPhim)
    {
        $dsLC = DB::table('tbl_lichchieu')->where('idPhim', $idPhim)
            ->where('statusLC', 1)->orderBy('giochieu', 'asc')->get();
        $arr = array();
        foreach ($dsLC as $LC) {
            $arr[] = Carbon::parse($LC->giochieu)->format('d/m/Y');
        }
        $dsNC = array_unique($arr);

        return view('KH.dsLC', compact(['dsLC', 'dsNC']));
    }
    public function viewDSGhe($idPhong, $idLC)
    {
        $dsghe = DB::table('tbl_ghe')->where('idPhong', $idPhong)->get();
        $dsve = DB::table('tbl_ve')->where('statusVe', 1)->where('idLC', $idLC)->get();
        Session::flash("idLC", $idLC);
        return view('KH.dsghe', compact(['dsghe', 'dsve']));
    }
}
