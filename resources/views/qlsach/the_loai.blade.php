<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách thể loại phim - Võ Văn Quang</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px 0;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        h1 {
            color: #2c3e50;
        }
    </style>
</head>
<body>

    <h1>Danh sách thể loại phim</h1>
    <p>Người thực hiện: <strong>Võ Văn Quang</strong></p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên tiếng Anh (genre_name)</th>
                <th>Tên tiếng Việt (genre_name_vn)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($genres as $genre)
            <tr>
                <td>{{ $genre->id }}</td>
                <td>{{ $genre->genre_name }}</td>
                <td>{{ $genre->genre_name_vn }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>