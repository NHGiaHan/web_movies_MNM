<html>
    <head>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>STT</th>
                <th>Tên sách</th>
                <th>Nhà xuất bản</th>
                <th>Tác giả</th>
                <th>Giá bán</th>
                <th>Hình ảnh</th>
            </tr>

            @foreach($sach as $key => $row)
            <tr>
                <td>{{ $key + 1 }}</td> 
                <td>{{ $row->tieu_de }}</td>
                <td>{{ $row->nha_xuat_ban }}</td>
                <td>{{ $row->tac_gia }}</td>
                <td>{{ $row->gia_ban }}</td>
                <td>
                    <img src="{{ $row->link_anh_bia }}" width="100">
                </td>
            </tr>
            @endforeach
        </table>
    </body>
</html>