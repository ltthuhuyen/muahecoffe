
@extends('employee.layout')
@section('bor')
<h3>Quản Lý Thức Uống</h3>
@endsection
@section('bor1')
  <button type="button" class="btn btn-light text-gray"><a href="/employee/products/create"><i class="fas fa-plus-circle "></i> Thêm</a></button>
@endsection
@section('content')
                <table class="table table-bordered" action="/employee/products/show{{$product->id}}" method="post">
                    <thead>
                      <tr class=" text-center text-white font-italic" style="background-color: black">
                        <th>Mã sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá hiện tại</th>
                      </tr>
                    </thead>         
                    <tbody>
                     
                      <tr class="text-center">
                        <td>{{$product->id}}</td>
                          <td >
                              <img src=" {{Storage::url($product->image)}}" alt="" width="200px"> 
                          </td>
                          <td>{{$product->name}}</td>
                          <td >{{$product->currentPrice->price}}</td>
                      </tr>
                  
                    </tbody>                      
                  </table>
                  
@endsection