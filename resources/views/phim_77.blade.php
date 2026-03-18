<h2>Danh sách phim câu 7.7</h2>
<table border="1">
    <tr>
        <th>Tên phim</th>
        <th>Ngày phát hành</th>
        <th>Mô tả</th>
        <th>Ảnh</th>
    </tr>
    @foreach($movies as $p)
    <tr>
        <td>{{ $p->movie_name }}</td>
        <td>{{ $p->release_date }}</td>
        <td>{{ $p->overview }}</td>
        <td><img src="{{ $p->image_link }}" width="100"></td>
    </tr>
    @endforeach
</table>