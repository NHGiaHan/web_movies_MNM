<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Top 10 Phim Điểm Cao - Võ Văn Quang</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; font-family: sans-serif; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        .high-score { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <h1>10 Bộ Phim Có Điểm Bình Chọn Cao Nhất</h1>
    <p>Sinh viên thực hiện: <strong>Võ Văn Quang</strong></p>

    <table>
        <thead>
            <tr>
                <th>Tên bộ phim (movie_name)</th>
                <th>Ngày phát hành (release_date)</th>
                <th>Điểm bình chọn (vote_average)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
            <tr>
                <td>{{ $movie->movie_name }}</td>
                <td>{{ $movie->release_date }}</td>
                <td class="high-score">{{ $movie->vote_average }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a href="{{ url('/the-loai') }}">Xem danh sách thể loại</a>
</body>
</html>