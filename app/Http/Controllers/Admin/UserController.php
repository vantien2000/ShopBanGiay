<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::where('UserType',1)->paginate(5);
        return View('admin.user.index')->with(['users'=>(object)$users]);
    }

    public function show_user($id){
        $user = User::where('UserID',$id)->first();
        return response()->json($user);
    }

    public function addUser(Request $request){

        if(User::where('Username',$request->username)->first()){
            return response()->json(['err_username'=>'Username đã tồn tại']);
        }else if(User::where('Email',$request->email)->first()){
            return response()->json(['err_email'=>'Email đã tồn tại']);
        }else{
            if($request->password == $request->confirm){
                $user = new User();
                $user->Username = $request->username;
                $user->Name = $request->name;
                $user->Email = $request->email;
                $user->Password = bcrypt($request->password);
                $user->Avatar = '';
                $user->PhoneNumber = '';
                $user->Address = '';
                $user->Status = 1;
                $user->UserType = 1;
                $user->save();
                return response()->json(['message'=>'Thêm thành công']);
            }else{
                return response()->json(['message'=>'Vui lòng kiểm tra lại thông tin']);
            }
        }
    }
}
