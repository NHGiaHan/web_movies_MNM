<h2 style="text-align: center;">Danh sách phim thể loại Action</h2>
<table border="1" cellspacing="0" cellpadding="16">
    <thead>
        <tr>
            <th>Hình ảnh</th>
            <th>Tên bộ phim</th>
            <th>Ngày phát hành</th>
            <th>Mô tả</th>
        </tr>
    </thead>
    <tbody>
        @foreach($movies as $movie)
        <tr>
            <td>
                <img src="{{ $movie->image_link }}" alt="{{ $movie->movie_name }}" width="120">
            </td>
            <td><strong>{{ $movie->movie_name }}</strong></td>
            <td>{{ $movie->release_date }}</td>
            <td>{{ $movie->overview }}</td>
        </tr>
        @endforeach
    </tbody>
</table>