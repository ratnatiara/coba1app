<?php

namespace App\Controllers;

class Motor extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Motor | Catalog Mobil Motor',
            'jenis' => 'motor'
        ];
        // echo view('layout/header', $data);
        // echo view('motor');
        // echo view('layout/footer');
        return view('motor', $data);
    }
    public function detail_merek($param1 = '')
    {
        echo "ini adalah method detail pada controller produk merek $param1";
    }
    public function detail_model($param1 = '', $param2 = '')
    {
        echo "ini adalah method detail pada controller produk merek $param1 model $param2";
    }
}
