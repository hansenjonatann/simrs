<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index()
  {
    $data = [
        'title' => 'Halaman Data',
        'content' => 'admin/v_dashboard'
    ];
    echo view('layout/v_wrapper', $data);
  }
}
