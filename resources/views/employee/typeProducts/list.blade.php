
@extends('employee.layout')
@section('bor')
<h3>Quản Lý Loại Thức Uống</h3>
@endsection
@section('bor1')
<button type="button" class="btn btn-light text-gray"><a href="/employee/typeProducts/create"><i class="fas fa-plus-circle "></i> Thêm</a></button>
@endsection
@section('content')
                <table class="table table-bordered">
                    <thead>
                      <tr class=" text-center text-white font-italic " style="background-color: black">
                        <th>Mã loại thức uống</th>
                        <th>Tên loại thức uống</th>
                        <th>Hành động</th>
                      </tr>
                    </thead>                               
                    <tbody>
                    @if(isset($type_products))
                      @foreach($type_products as $type_product)
                      <tr class="text-center">
                          <td >{{$type_product->id}}</td>
                          <td >{{$type_product->name}}</td>
                          <td >
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href = "/employee/typeProducts/edit{{$type_product->id}}" class="btn btn-light mr-1"><i class="far fa-edit"></i></a>
                                <form method="POST" action="/employee/typeProducts/delete{{$type_product->id}}">
                                  @method('DELETE')
                                  @csrf
                                <button type="submit" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                                </form>
                          </td>
                      </tr>
                      @endforeach
                    @endif
                      
                    </tbody>
                </table>
@endsection