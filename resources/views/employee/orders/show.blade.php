
@extends('employee.layout')
@section('bor')
  <h3>Quản Lý Phiếu Order</h3>
@endsection
@section('bor1')
  <button type="button" class="btn btn-light text-gray"><a href="/employee/products/create"><i class="fas fa-plus-circle "></i> Thêm</a></button>
@endsection
@section('content')
                <table class="table table-bordered">
                    <thead>
                      <tr class=" text-center text-white font-italic " style="background-color: black">
                        <th>Mã</th>
                        <th>Thức uống</th>
                        <th>Hình</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Tổng tiền</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if(isset($order))
                      @foreach($order->items as $item)
                        <tr class=" text-center">
                          <td>{{ $item->price->product->id }}</td>
                          <td>{{ $item->price->product->name }}</td>
                          <td>
                            <img src=" {{Storage::url($item->price->product->image)}}" alt="" width="150px"> 
                          </td>
                          <td>{{ $item->quantity }}</td>
                          <td>{{ $item->price->price }}</td>
                          <td>{{ $item->price->price * $item->quantity }}</td>
                        </tr>
                      @endforeach
                      @endif
                    </tbody>                
                  </table>
@endsection