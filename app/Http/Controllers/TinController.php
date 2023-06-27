<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinController extends Controller
{
    public function index()
    {
      return view('index');
    }

    public function lienhe()
    {
        return view('lienhe');
    }
    public function lay1tin($id)
    {
      $data=['id'=>$id];
      return view('chitiet', $data);
    }

    public function thongtinsv($id,$ten,$mssv,$phone)
    {
      $data=
      [
        'id'=>$id,
        'ten'=>$ten,
        'mssv'=>$mssv,
        'phone'=>$phone,

      
      
      
      
      
      ]
      
      
      ;
      return view('thongtinsv', $data);
    }
}
