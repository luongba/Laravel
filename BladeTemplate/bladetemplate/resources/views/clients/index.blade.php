@extends('layouts.client')
@section('title')
    {{$title}}
@endsection
@section('sidebar')
    {{--    Nếu có @parent thì sẽ lấy cả dữ liệu có trong sidebar gốc, còn không thì sẽ bị ghi đè--}}
    @parent
    <h3>Homesidebar</h3>
@endsection
@section('content')
    <div class="container">
        <h2> Trang Chủ</h2>
{{--        Tự định nghĩa directive (định nghĩa ở Provider/AppPro...)--}}
        @env('local')
            <p>Môi trường DEV</p>
            @elseenv('test')
            <p>Môi trường test</p>
            <p>Môi trường production</p>
            @else
                <p>Môi trường production</p>

                @endenv
            <x-package-alert type="danger" :message="$title"></x-package-alert>
    </div>
@endsection
@section('css')
    header {
    background-color: black;
    color: #fff;
    }
@endsection
