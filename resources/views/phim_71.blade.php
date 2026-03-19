<style>
    h2 { text-align: center; }
    table { width: 100%; border-collapse: collapse; }
    th, td { border: 1px solid black; padding: 5px; text-align: left; }
    th { background: #eee; }
</style>

<h2>DANH SÁCH THỂ LOẠI PHIM</h2>

<table>
    <tr>
        <th>Tên tiếng Anh (genre_name)</th>
        <th>Tên tiếng Việt (genre_name_vn)</th>
    </tr>
    @foreach($genres as $genre)
    <tr>
        <td>{{ $genre->genre_name }}</td>
        <td>{{ $genre->genre_name_vn }}</td>
    </tr>
    @endforeach
</table>