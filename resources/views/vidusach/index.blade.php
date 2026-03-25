<x-book-layout>
    <x-slot name="title">
        Trang Danh Sách Sách </x-slot>

    <div class='list-book'>
        @foreach($data as $row)
            <div class='book'>
                <img src="{{ asset('hinh/image/'.$row->file_anh_bia) }}" width='160px' height='200px'>
                <br>
                <b>{{ $row->tieu_de }}</b>
                <br/>
                <i>{{ number_format($row->gia_ban, 0, ",", ".") }}đ</i>
            </div>
        @endforeach
    </div>
</x-book-layout>