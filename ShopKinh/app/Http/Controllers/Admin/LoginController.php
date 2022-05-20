<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() {
        return view('Back-end.login');
    }
    public function getLogin(Request $req) {
        $credentials = [
            'ten_tai_khoan' => $req->username,
            'password'      => $req->password
        ];

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('Admin');
        }
        Toastr::error('Tên tài khoản hoặc mật khẩu không đúng','message');
        return redirect()->route('login');
    
    }
    public function logout() {
        Auth::logout();
        Toastr::success('Đăng xuất thành công','message');
        return redirect('admin/login')->with('status', 'success')->with('message', 'Đăng xuất thành công');
    }
}
