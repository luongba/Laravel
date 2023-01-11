<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data = [];
    public function index(){
        $this->data['title'] = "Trang chủ";
        return view('clients.index', $this->data);
    }
    public function product(){
        $this->data['title'] = "Sản phẩm";
        return view('clients.product', $this->data);
    }
    public function getAdd(){
        $this->data['title'] = "Sản phẩm";
        return view('clients.add', $this->data);
    }
    public function postAdd(Request $request){
        dd($request->all());
    }
}
