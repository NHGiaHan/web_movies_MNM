<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenController extends Controller
{
    public function ten()
    {
        // Truyền dữ liệu sang file view
        return view('gh');
    }
<<<<<<< HEAD
    
    public function ten2()
    {
        // Truyền dữ liệu sang file view
        return view('kn');
=======
        public function ten1()
    {
        // Truyền dữ liệu sang file view
        return view('tranchau');
>>>>>>> 39f882031bbea4df1f6408638ea6cd521da28145
    }
}