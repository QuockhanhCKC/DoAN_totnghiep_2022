<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use App\Models\chi_tiet_sp;
use App\Models\ChiTietSP;
use App\Models\nha_san_xuat;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        

        $sanpham = chi_tiet_sp::all();
        $sanphammoi = nha_san_xuat::all();
        //$sanphamsale = ChiTietSP::where('giam_gia','<>',0)->where('tinh_trang',1)->get();
        //dd($sanpham,$sanphammoi);
    	return view('Font-end.page.home.home',compact('sanpham'));
    }
    
    public function about(){
    	return view('Font-end.page.About');
    }

}
