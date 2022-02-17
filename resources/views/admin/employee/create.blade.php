@extends('admin.layout')
@section('bor')
  <h3>Quản Lý Nhân Viên</h3>
@endsection
@section('bor1')
    <button type="button" class="btn btn-light text-gray"><a href="/admin/employee/create">Thêm </a></button>
@endsection
@section('content')
<div class="broder border">
    <h4 class="text-center font-italic p-3 ">Thông tin nhân viên:</h4>
                <form  class="p-3" action="/admin/employee" method="post">
                    @csrf
                    <!-- <div class="form-group row mt-3">
                        <label for="id_emp" class="col-2 col-form-label">Mã nhân viên:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_emp" name="id_emp">
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" id="email" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name_emp" class="col-sm-2 col-form-label">Tên nhân viên:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name_emp" id="name_emp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sex" class="col-sm-2 col-form-label">Giới tính:</label>
                        <div class="col-sm-10">
                            <input name="sex" id="sex" type="radio" value="nam"> Nam
                            <input name="sex" id="sex" type="radio" value="nữ"> Nữ <br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="DOB" class="col-sm-2 col-form-label">Ngày sinh:</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" name="DOB" id="DOB">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="CMND" class="col-sm-2 col-form-label">Số CMND:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="CMND" id="CMND">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tel" class="col-sm-2 col-form-label">SĐT:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tel" id="tel">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Địa chỉ:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="address" id="address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <button type="submit" name="btn-thoat" class="btn m-5 mx-auto" style="background-color:lightgrey;">Thoát</button>
                        <button  type="submit" name="btn-save" class="btn btn-primary m-5 mx-auto">Lưu</button>
                    </div>
                </form>
</div>
@endsection