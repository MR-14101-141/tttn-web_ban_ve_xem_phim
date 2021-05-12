<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
use Illuminate\Support\Facades\Redirect;
session_start();
class adminController extends Controller
{
    public function admin()
    {

        return view('NV.loginAdmin');
        // return redirect('dsve');
    }
    public function login(Request $request){
        $email = $request->email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('tbl_nhanvien')->where('emailNV',$email)->where('passwordNV',$admin_password)->first();
        if($result == true){
        Session::put('idNV',$result->idNV);
        Session::put('tenNV',$result->tenNV);
            return Redirect::to('/dsve');
        }else{
            Session::put('fail','Email and Password Không đúng');
            return Redirect::to('/admin');
        }
    }
     
    public function profileadmin($idNV){

        $nvprofile=DB::table('tbl_nhanvien')->where('idNV',$idNV)->get();

	
	    return view('NV.profileNV')->with('nvprofile',$nvprofile);

        return view('NV.profileNV');
    }
    public function logout(){
       
          Session::put('idNV',null);
          Session::put('tenNV',null);
          
          return Redirect::to('/admin');
      }

      public function updateprofile($idNV, Request $request){
        $cusprofile=DB::table('tbl_nhanvien')->where('idNV',$idNV)->get();
        $data = array();
        $data['tenNV'] = $request ->name;
        $data['gioitinhNV'] = $request ->gioitinhNV;
        $data['ngaysinhNV'] = $request ->ngaysinh;
        $update_c = DB::table('tbl_nhanvien')->where('idNV',$idNV)->update($data);  
        return back();
    }
    public function changepass(){
        return view('NV.changepassfrm');
    }
   
 
    public function updatepass(Request $request){
        $nv_id = $request->hidden_nvid;
        $old = md5($request->old_password);
    
        $nv = DB::table('tbl_nhanvien')->where('idNV', $nv_id)->get();
        foreach ($nv as $key => $value) {
        $nv_old_pass = $value ->passwordNV;
        break;
        }
        if (isset($nv_old_pass)) {
          $new = md5($request ->new_password);
          $confirm = md5($request ->confirm_password);
          if ($new == $confirm && $nv_old_pass == $old) {
            $data['passwordNV'] = $new;
            DB::table('tbl_nhanvien')->where('idNV',$nv_id)->update($data);
            return Redirect('/profileadmin/'.$nv_id);
          }else{
           echo "Nhập sai thông tin";
          }
        }  
      }
}
