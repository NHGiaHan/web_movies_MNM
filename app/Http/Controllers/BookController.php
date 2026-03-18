<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class BookController extends Controller
{
    function laythongtintheloai()
    {
        $the_loai_sach = DB::table("the_loai")->get();
        return view("qlsach.the_loai",compact("the_loai_sach"));
    }

    function laythongtinsach()
    {
        $sach = DB::table("sach")
                ->join("the_loai","sach.id_the_loai","=","the_loai.id")
                ->where("the_loai.ten_the_loai","Tác phẩm kinh điển")
                ->select("sach.tieu_de","sach.tac_gia","sach.nha_xuat_ban","sach.gia_ban","sach.link_anh_bia")
                ->get();

        return view("qlsach.thong_tin_sach", compact("sach"));
    }
    function dieukiengiaban()
    {
        $dieukien = DB::table("sach")->where("gia_ban","<",70000)->get();
        return view("qlsach.dieukien1", compact("sach"));
    }

    function themdulieu()
    {
        $data = ["id"=>4,"ten_the_loai"=>"Trinh thám"];
        DB::table("the_loai")->insert($data);
        return "thêm thành công";
    }
    function suadulieu()
    {
        $data = ["ten_the_loai"=>"Văn học"];
        DB::table("the_loai")->where("id",4)
        ->update($data);
        return "Sửa thành công";
    }
    function xoadulieu()
    {
        $data = ["ten_the_loai"=>"Văn học"];
        DB::table("the_loai")->where("id",4)
        ->delete();
        return "Xóa thành công";
    }
}