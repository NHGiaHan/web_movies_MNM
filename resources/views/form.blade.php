    <h3 style ="color: red; text-align:center">TÍNH TUỔI</H3>
    <form action="{{ url('tinhTuoi') }}" method="post" style ="text-align: center">
        Nhập năm sinh: <input type="number" name="nam_sinh"><br><br>
        <input type="submit" value="Tính tuổi" style = "color:blue">
        {{ csrf_field() }}
    </form>
