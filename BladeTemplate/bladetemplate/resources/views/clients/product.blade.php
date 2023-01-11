@extends('layouts.client')
@section('title')
    {{$title}}
@endsection
{{--@section('sidebar')--}}
{{--    --}}{{--    Nếu có @parent thì sẽ lấy cả dữ liệu có trong sidebar gốc, còn không thì sẽ bị ghi đè--}}
{{--    @parent--}}
{{--    <h3>Homesidebar</h3>--}}
{{--@endsection--}}
@section('content')
    <div class="container">
        <a href="{{route('getAdd')}}">Thêm sản phẩm</a>
    </div>
@endsection
@section('css')
    header {
    background-color: black;
    color: #fff;
    }
@endsection

@push('script')
    <script>
        console.log("dota");
    </script>
@endpush
