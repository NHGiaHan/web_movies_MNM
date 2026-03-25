<!DOCTYPE html>
<html>
<head>
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .navbar { background-color: #ff5850; font-weight: bold; padding: 0; }
        .navbar-nav { width: 100%; }
        .nav-item { border-bottom: 1px solid rgba(255,255,255,0.1); padding: 5px 15px; }
        .nav-item a { color: #fff !important; display: block; }
        .nav-item:hover { background-color: #e34d46; }
        .list-book { display: grid; grid-template-columns: repeat(4, 24%); }
        .book { margin: 10px; text-align: center; }
    </style>
</head>
<body>
    <header style='text-align:center'>
        <img src="{{asset('hinh/banner_sach.jpg')}}" width="1000px">
    </header>

    <main style="width:1000px; margin:2px auto;">
        <div class='row'>
            <div class='col-3 pr-0'>
                <x-menu>
                    <x-slot name='item'>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('sach/theloai/1')}}">Tiểu thuyết</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('sach/theloai/2')}}">Truyện ngắn - tản văn</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('sach/theloai/3')}}">Tác phẩm kinh điển</a>
                        </li>
                    </x-slot>
                </x-menu>

                <img src="{{asset('hinh/sidebar_1.jpg')}}" width="100%" class='mt-1'>
                <img src="{{asset('hinh/sidebar_2.jpg')}}" width="100%" class='mt-1'>
            </div>

            <div class='col-9'>
                {{$slot}}
            </div>
        </div>
    </main>
</body>
</html>