<?php

namespace App\Controllers;

class Produk extends BaseController
{
    public function index()
    {
        echo "ini adalah method index pada controller produk";
        // echo "<br><a href=' " . route_to('detailproduk') . " '>Link ke detail produk</a>";
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
