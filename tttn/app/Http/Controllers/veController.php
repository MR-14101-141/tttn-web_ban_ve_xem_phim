<?php

namespace App\Http\Controllers;

use App;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\support\Facades\Mail;
use App\Mail\Bookticket;

class veController extends Controller
{
    public function veCheckview($idKH, $idLC, $idGhe, $idKM)
    {
        $veTemp = DB::table('tbl_lichchieu')->where('idLC', $idLC)
            ->join('tbl_phim', 'tbl_lichchieu.idPhim', '=', 'tbl_phim.idPhim')
            ->join('tbl_phong', 'tbl_lichchieu.idPhong', '=', 'tbl_phong.idPhong')
            ->join('tbl_ghe', 'tbl_phong.idPhong', '=', 'tbl_ghe.idPhong')->where('idGhe', $idGhe)
            ->first();

        $KM = DB::table('tbl_khuyenmai')->where('idKM', $idKM)->first();

        $KH = DB::table('tbl_khachhang')->where('idKH', $idKH)->first();

        return view('KH.ve', compact('veTemp', 'KH', 'KM'));
    }
    public function veTemplateCreate(Request $re)
    {
        $action = $re->khuyenmai;
        if ($action == 'khuyenmai') {
            $giochieu = strtotime($re->giochieu);
            $veTemp = DB::table('tbl_lichchieu')->where('giochieu', date('Y-m-d H:i:s', $giochieu))
                ->join('tbl_phim', 'tbl_lichchieu.idPhim', '=', 'tbl_phim.idPhim')->where('tenPhim', $re->tenPhim)
                ->join('tbl_phong', 'tbl_lichchieu.idPhong', '=', 'tbl_phong.idPhong')->where('vitriphong', $re->vitriphong)
                ->join('tbl_ghe', 'tbl_phong.idPhong', '=', 'tbl_ghe.idPhong')->where('vitrighe', $re->vitrighe)
                ->first();
            $KH = DB::table('tbl_khachhang')->where('emailKH', $re->emailKH)->where('sdtKH', $re->sdtKH)
                ->where('tenKH', $re->tenKH)->first();
            $KM = DB::table('tbl_khuyenmai')->where('idKM', $re->idKM)->first();
            if ($KM != null) {
                return Redirect::to('/ve/' . $KH->idKH . '/' . $veTemp->idLC . '/' . $veTemp->idGhe . '/' . $KM->idKM);
            } else {
                return redirect()->back()->with('alert','Không tìm thấy khuyến mãi !!');
            }

        } else {
            $datenow = Carbon::now('Asia/Ho_Chi_Minh');
            $ngaydatve = $datenow->format('Y-m-d H:i:s');
            $giochieu = strtotime($re->giochieu);
            $hanve = Carbon::parse($giochieu)->subMinutes(15)->format('Y-m-d H:i:s');
            $veTemp = DB::table('tbl_lichchieu')->where('giochieu', date('Y-m-d H:i:s', $giochieu))
                ->join('tbl_phim', 'tbl_lichchieu.idPhim', '=', 'tbl_phim.idPhim')->where('tenPhim', $re->tenPhim)
                ->join('tbl_phong', 'tbl_lichchieu.idPhong', '=', 'tbl_phong.idPhong')->where('vitriphong', $re->vitriphong)
                ->join('tbl_ghe', 'tbl_phong.idPhong', '=', 'tbl_ghe.idPhong')->where('vitrighe', $re->vitrighe)
                ->first();
            $KH = DB::table('tbl_khachhang')->where('emailKH', $re->emailKH)->where('sdtKH', $re->sdtKH)
                ->where('tenKH', $re->tenKH)->first();
            DB::table('tbl_ve')->insert([
                'idKH' => $KH->idKH,
                'idLC' => $veTemp->idLC,
                'idGhe' => $veTemp->idGhe,
                'ngaydatve' => $ngaydatve,
                'hanve' => $hanve,
                'tongtien' => $re->tongtien,
                'statusVe' => 1,
            ]);
            $ve = DB::table('tbl_ve')->where('ngaydatve', $ngaydatve)
            ->join('tbl_khachhang','tbl_khachhang.idKH','tbl_ve.idKH')
            ->first();
            
            \Mail::to($re->emailKH)->send(new Bookticket($veTemp,$ve));
            return \Redirect::to('/home');
        }
    }

    public function dsve()
    {
        $dsve = DB::table('tbl_ve')
            ->join('tbl_khachhang', 'tbl_ve.idKH', '=', 'tbl_khachhang.idKH')
            ->join('tbl_lichchieu', 'tbl_lichchieu.idLC', '=', 'tbl_ve.idLC')
            ->join('tbl_phim', 'tbl_lichchieu.idPhim', '=', 'tbl_phim.idPhim')
            ->orderBy('idVe', 'asc')
            ->paginate(4);
        return view('NV.veAllsearch', compact('dsve'));
    }
    public function liveSearchdsve(Request $request)
    {
        if ($request->ajax()) {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $dsve = DB::table('tbl_ve')
                ->join('tbl_khachhang', 'tbl_ve.idKH', '=', 'tbl_khachhang.idKH')
                ->join('tbl_lichchieu', 'tbl_lichchieu.idLC', '=', 'tbl_ve.idLC')
                ->join('tbl_phim', 'tbl_lichchieu.idPhim', '=', 'tbl_phim.idPhim')
                ->where('idVe', 'like', '%' . $query . '%')
                ->orWhere('tenKH', 'like', '%' . $query . '%')
                ->orWhere('tenPhim', 'like', '%' . $query . '%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(4);
            return view('NV.veAll', compact('dsve'));
        }
    }
    public function veTemplateShow($idVe)
    {
        $ve = DB::table('tbl_ve')->where('idVe', $idVe)
            ->join('tbl_ghe', 'tbl_ve.idGhe', '=', 'tbl_ghe.idGhe')
            ->join('tbl_lichchieu', 'tbl_lichchieu.idLC', '=', 'tbl_ve.idLC')
            ->join('tbl_phong', 'tbl_phong.idPhong', '=', 'tbl_lichchieu.idPhong')
            ->join('tbl_phim', 'tbl_lichchieu.idPhim', '=', 'tbl_phim.idPhim')
            ->first();
        return view('NV.veTemplateShow', compact('ve'));
    }
}
