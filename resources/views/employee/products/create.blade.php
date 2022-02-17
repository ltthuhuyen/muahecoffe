@extends('employee.layout')
@section('bor')
<h3>Quản Lý Thức Uống</h3>
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
            <h4 class="text-center font-italic p-3 ">Thông tin thức uống:</h4>
                <form class="p-3" action="/employee/products" method="post" enctype="multipart/form-data">
                @csrf 
                <div class="form-group row mt-3">
                        <label for="id_type" class="col-2 col-form-label">Loại thức uống:</label>
                        <div class="col-sm-10">
                            <select class="custom-select" name="type_id" >
                                <option selected>Chọn</option>
                                @if(isset($type_products))
                                @foreach($type_products as $type_product)
                                <option value="{{$type_product->id}}">{{ $type_product->name}}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Tên thức uống:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" id="name">
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label for="id_product" class="col-sm-2 col-form-label">Mã sản phẩm:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="id_product" id="id_product">
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label for="price" class="col-sm-2 col-form-label">Giá</label>
                        <div class="col-sm-10">
                          <input type="number" min="0" class="form-control" name="price" id="price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Hình ảnh :</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control-file" name="image" id="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Mô tả:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <button type="submit" name="btn-thoat" class="btn m-5 mx-auto" style="background-color:lightgrey;"><a href ="/employee/products/list"></a><i class="fas fa-undo"></i> Trở lại</button>
                        <button type="submit" name="btn-save" class="btn btn-primary m-5 mx-auto">Lưu</button>
                    </div>
                </form>
</div>
@stop