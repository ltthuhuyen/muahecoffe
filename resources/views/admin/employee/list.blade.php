@extends('admin.layout')
@section('bor')
  <h3>Quản Lý Nhân Viên</h3>
@endsection
@section('bor1')
  <button type="button" class="btn btn-light text-gray"><a href="/admin/employee/create">Thêm </a></button>
@endsection
@section('content')
<table class="table table-bordered">
                    <thead>
                      <tr class=" text-center text-white font-italic" style="background-color: black">
                        <th>Mã nhân viên</th>
                        <th>Họ tên nhân viên</th>
                        <th>Giới tính</th>
                        <th></th>
                      </tr>
                    </thead>                               
                    <tbody>
                      @if(isset($employees))
                      @foreach($employees as $employee)
                      <tr class="text-center">
                        <td>{{$employee->id_emp}}</td>
                        <td>{{$employee->name_emp}}</td>
                        <td>{{$employee->sex}}</td>
                        <td >
                          <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href = '/admin/employee/show{{$employee->id_emp}}' class="btn btn-light" >Show</a>
                            <a href = '/admin/employee/edit{{$employee->id_emp}}' class="btn btn-light" >Edit</a>
                            <form method="POST" action="/admin/employee/delete{{$employee->id_emp}}">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                          </div>
                      </td>
                      </tr>
                      @endforeach  
                      @endif
                    </tbody>
                  </table>
@endsection