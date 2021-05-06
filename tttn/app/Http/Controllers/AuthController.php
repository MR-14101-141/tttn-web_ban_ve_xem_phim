<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;
class AuthController extends Controller
{
    public function actionlogin(Request $request){
        

        $email=$request->email;
        $password=md5($request->password);

        $result=DB::table('tbl_khachhang')->where('emailKH',$email)->where('passwordKH',$password)->first();
   		if($result == true){
   			Session::put('idKH',$result->idKH);
   			//Session::put('tenKH',$result->tenKH);
			$idKH=$result->idKH;
			return redirect()->back();
   			//return Redirect::to('/profile');
   		}else{
   			//Session::put('fail','Email hoặc mật khẩu sai, vui lòng đăng nhập lại !');
   			//return Redirect::to('/home');
			echo '<h1 style="color:red">Email hoặc mật khẩu sai, vui lòng đăng nhập lại !</h1>
			<a href="home">Trở về trang chủ</a>';
   		}        
    }
    public function getSignup(){
        return view('KH.signupfrm');
    }
    public function postSignup(Request $request){
    	$data = array();
    	$data['tenKH'] = $request->tenKH;
    	$data['emailKH'] = $request->email;
    	$data['passwordKH'] = md5($request->password);
        $data['gioitinhKH'] = $request->gioitinh;
		$data['sdtKH'] = $request->sdtKH;
    	$data['ngaysinh'] =$request->ngaysinh;
		$nkc= $request->nkc;
    	// $data['address'] = $request->address;
    	// $data['phone'] = $request->phone;

    	$insert_cus = DB::table('tbl_khachhang')->insertGetId($data);
    
    	echo '<h1 style="color:green">Đăng ký thành công</h1>
		<a href="home">Trở về trang chủ</a>';
    }
public function profile($idKH)
{
	$cusprofile=DB::table('tbl_khachhang')->where('idKH',$idKH)->get();

	
	return view('KH.profileKH')->with('cusprofile',$cusprofile);
}
public function updateprofile($idKH, Request $request){
	$cusprofile=DB::table('tbl_khachhang')->where('idKH',$idKH)->get();
	$data = array();
	$data['tenKH'] = $request ->name;
	$data['gioitinhKH'] = $request ->gioitinhKH;
	$data['ngaysinh'] = $request ->ngaysinh;
	$update_c = DB::table('tbl_khachhang')->where('idKH',$idKH)->update($data);  
	return back();
}
public function changepass(){
	return view('KH.changepassfrm');
}
public function updatepass(Request $request){
	$cus_id = $request->hidden_cusid;
	$old = md5($request->old_password);

	$cus = DB::table('tbl_khachhang')->where('idKH', $cus_id)->get();
	foreach ($cus as $key => $value) {
	  $cus_old_pass = $value ->passwordKH;
	}
	if (isset($cus_old_pass)) {
	  $new = md5($request ->new_password);
	  $confirm = md5($request ->confirm_password);
	  if ($new == $confirm && $cus_old_pass == $old) {
		$data['passwordKH'] = $new;
		DB::table('tbl_khachhang')->where('idKH',$cus_id)->update($data);
		return Redirect('/profile/'.$cus_id);
	  }else{
		//Session::put('change_fail', 'Password incorret!');
		//return Redirect('/change-password');
		echo '<h1 style="color:red">Password incorret!</h1>
		<a href="home">Trở về trang chủ</a>';
	  }
	}  
  }
  public function logout(){
	Auth::logout();
	Session::flush();
    return redirect()->route('home');
  }
}
