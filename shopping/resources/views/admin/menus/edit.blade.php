@extends('layouts.admin')

@section('title')
    <title>Chỉnh sửa Menu</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('partial.content-header',['name'=>'Menu','key' =>'Edit'])
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <form action="{{route('menus.update',['id'=>$menuFollowEdit->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Tên Menu</label>
                                <input type="text" class="form-control" placeholder="Nhập Tên Menu" name="name"
                                       value="{{$menuFollowEdit->name}}">
                            </div>
                            <label>Nhập Tên Menu Cha</label>
                            <select class="form-control" name="parent_id">
                                <option value="0">Chọn Menu cha</option>
                                {!! $selectOption !!}
                            </select>
                            <button type="submit" class="btn btn-primary mt-4">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
