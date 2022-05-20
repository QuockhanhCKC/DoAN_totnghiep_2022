<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeBackController extends Controller
{
    private $viewFolder = 'Main';
    private $page = 'Quản lý';

    public function index() {
        $pageInfo = [
            'page'  => $this->page
        ];

        return view("Back-end.{$this->viewFolder}", compact('pageInfo'));
    }
}
