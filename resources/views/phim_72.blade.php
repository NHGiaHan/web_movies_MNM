
<style>
    table { width: 100%; border-collapse: collapse; }
    th, td { border: 1px solid black; padding: 5px; text-align: left; }
    th { background: #eee; }
    h2 { text-align: center; }
</style>

<h2>DANH SÁCH PHIM</h2>

<table>
    <tr>
        <th>Tên phim</th>
        <th>Ngày phát hành</th>
        <th>Điểm</th>
    </tr>
    @foreach($movies as $movie)
    <tr>
        <td>{{ $movie->movie_name }}</td>
        <td>{{ $movie->release_date }}</td>
        <td>{{ $movie->vote_average }}</td>
    </tr>
    @endforeach
</table>