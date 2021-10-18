<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        if($request->cookie('user_login')){
            return View('Admin.layout.main');
        }
        else{
            return redirect('admin/login');
        }
        return redirect('admin/login');
    }
}
