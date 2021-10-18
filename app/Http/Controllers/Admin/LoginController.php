<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        //tạo user 

        // $user = new User();
        // $user->Name = 'Nguyễn Văn Tiến';
        // $user->Username = 'vantien2k';
        // $user->Password = bcrypt('123456');
        // $user->Avatar = '';
        // $user->Email = '';
        // $user->Address = '';
        // $user->PhoneNumber = '';
        // $user->status = true;
        // $user->UserType = '1';
        // $user->save();
        return View('Admin.login.index');
    }

    public function login(Request $request){
        if($request->isMethod('post')){
            $username = $request->name;
            $password = $request->password;
            // //tạo cookie để lưu đăng nhập
            $user = User::all()->where('Username','=',$request->name,'and','Password','=',$request->password)->first();
            if($user){
                Cookie::queue('user_login',$user,10*365*24*3600);
                return redirect('admin');
            }else{
                //xóa cookie nếu ko có tài khoản
                return redirect()->back()->with('message','Tài khoản không tồn tại');
            }
        }
    }
}
