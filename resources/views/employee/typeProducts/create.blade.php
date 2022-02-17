
@extends('employee.layout')
@section('bor')
<h3>Quản Lý Loại Thức Uống</h3>
@endsection
@section('bor1')

  <button type="button" class="btn btn-light text-gray"><a href="/employee/products/create"><i class="fas fa-plus-circle "></i> Thêm</a></button>
@endsection
@section('content')
        <div class="broder border">
          @if ($errors->any())
            <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div>
          @endif
            <h4 class="text-center font-italic p-3 ">Thông tin loại thức uống</h4>
                <form class="p-3" action="/employee/typeProducts" method="post">
                    @csrf
                    <!-- <div class="form-group row mt-3">
                        <label for="id_type" class="col-2 col-form-label">Mã loại thức uống:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="id_type" id="id_type">
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Tên loại thức uống:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" id="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputghimloaiTU" class="col-sm-2 col-form-label">Ghim:</label>
                        <div class="col-sm-10">
                            <input name="ghimloaiTU" type="checkbox" value="Ghim vào thanh danh mục"> ghim vào thanh danh mục
                        </div>
                    </div>
                    <div class="form-group row">
                        <button type="submit" name="btn-thoat" class="btn m-5 mx-auto" style="background-color:lightgrey;"><i class="fas fa-undo"></i> Trở lại</button>
                        <button type="submit" name="btn-save" class="btn btn-primary m-5 mx-auto"></i> Lưu</button>
                    </div>
                <form>
        </div>
               
@endsection