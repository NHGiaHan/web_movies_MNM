<x-book-layout>
    <x-slot name="title">
        Chi tiết: {{ $data->tieu_de }}
    </x-slot>

    <h4 class="text-danger">{{ $data->tieu_de }}</h4>
    <div style="display: grid; grid-template-columns: 30% 70%; gap: 20px;">
        <div>
            <img src="{{ asset('hinh/image/'.$data->file_anh_bia) }}" width="200px">
        </div>
        <div>
            Nhà cung cấp: <b>{{ $data->nha_cung_cap }}</b><br>
            Tác giả: <b>{{ $data->tac_gia }}</b><br>
            <button class="btn btn-danger mt-3">Thêm vào giỏ hàng</button>
        </div>
    </div>
    <div class="mt-4">
        <b>Mô tả:</b> <br>
        {{ $data->mo_ta }}
    </div>
</x-book-layout>