<?php

namespace App\Http\Controllers;

use App;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Redirect;

class kmController extends Controller
{
    public function dsKM()
    {
        $dskm=DB::table('tbl_khuyenmai')
        ->orderBy('idKM', 'asc')
        ->paginate(4);
        return view('NV.kmAllsearch', compact('dskm'));
    }
    public function liveSearchdskm(Request $request)
    {
        if ($request->ajax()) {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $dskm = DB::table('tbl_khuyenmai')
                ->where('idKM', 'like', '%' . $query . '%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(4);
            return view('NV.kmAll', compact('dskm'));
        }
    }
    public function singleKM($idKM)
    {
        $KM=DB::table('tbl_khuyenmai')
        ->where('idKM',$idKM)
        ->first();
        return view('NV.kmEdit', compact('KM'));
    }
    public function themKM()
    {
        return view('NV.kmAdd');
    }
    public function crudKM(Request $request)
    {
        if ($request->action == 'edit') 
        {
            DB::table('tbl_khuyenmai')->where('idKM',$request->idKM)
            ->update(['trigiaKM'=>(float)($request->trigiaKM/100)]);
            return Redirect::to('/dskm');
        }
        else if($request->action=='del')
        {
            DB::table('tbl_khuyenmai')->where('idKM',$request->idKM)
            ->delete();
            return Redirect::to('/dskm');
        }
        else if($request->action=='add')
        {
            DB::table('tbl_khuyenmai')
            ->insert(['idKM'=>$request->idKM,
            'trigiaKM'=>(float)($request->trigiaKM/100)]);
            return Redirect::to('/dskm');
        }
        else
        {
            return Redirect::to('/dskm');
        }
    }
}
