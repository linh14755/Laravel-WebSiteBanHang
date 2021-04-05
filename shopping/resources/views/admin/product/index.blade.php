@extends('layouts.admin')

@section('title')
    <title>Sản phẩm</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('partial.content-header',['name'=>'Product','key' =>'List'])
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('product.create')}}" class="btn btn-success m-2 float-right">Add</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            {{--                            @foreach($data as $value)--}}
                            <tr>
                                <th scope="row">1</th>
                                <th scope="row">Iphone 11 Promax</th>
                                <th scope="row">19.999.000</th>
                                <th scope="row"><img src="" alt=""></th>
                                <th scope="row">Điện thoại</th>
                                <td><a href="" class="btn btn-default">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            {{--                            @endforeach--}}
                            <td>
                                {{--                                {{$data->links()}}--}}
                            </td>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
