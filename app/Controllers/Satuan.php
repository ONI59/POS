<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Satuan extends BaseController
{
    public function index()
    {
        $data = [
            "judul" => "Master Data",
            "subjudul" => "Satuan",
            "menu" => "masterdata",
            "submenu" => "satuan",
            "page" => "v_satuan",
        ];
        return view("v_template", $data);
    }
}
