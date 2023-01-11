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
    <h2>Thêm sản phẩm</h2>
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">User name:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection
@section('css')
    header {
    background-color: black;
    color: #fff;
    }
@endsection
