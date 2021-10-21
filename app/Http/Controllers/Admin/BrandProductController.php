<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandProductController extends Controller
{
    public function index(Request $request){
        if($request->cookie('user_login')){
            return View('Admin.BrandProduct.BrandProduct')->with(['user'=>json_decode($request->cookie('user_login'))]);
        }
        else{
            return redirect('admin/login');
        }
        return redirect('admin/login');
    }
    public function addnewBrand(Request $request){
        if($request->cookie('user_login')){
            return View('Admin.BrandProduct.Add_BrandProduct')->with(['user'=>json_decode($request->cookie('user_login'))]);
        }
        else{
            return redirect('admin/login');
        }
        return redirect('admin/login');
    }
}
