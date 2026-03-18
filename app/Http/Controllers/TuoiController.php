<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TuoiController extends Controller
{
    function form()
    {
        return view("form");
    }

    function tinhTuoi(Request $request)
    {
        $nam_sinh = $request->input("nam_sinh");

        $nam_hien_tai = date("Y");

        $tuoi = $nam_hien_tai - $nam_sinh;

        return "Tuổi của bạn là: " . $tuoi;
    }
}
