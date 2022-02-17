
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
                        <th>Mã phiếu order</th>
                        <th>Tên khách hàng</th>
                        <th>Tên nhân viên</th>
                        <th>Tổng tiền</th>
                        <th>Hành động</th>
                      </tr>
                    </thead>         
                    <tbody>
                    @foreach($orders as $order)
                        <tr  class="text-center">
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->guest->name }}</td>
                            <td>{{ $order->employee->name ?? 'Chưa có' }}</td>
                            <td>{{ $order->subtotal}}</td>
                            <td>
                                <a href="{{ route('employee.orders.show', $order) }}" class="btn btn-default btn-light"><i class="far fa-eye"></i></a>
                                @if($order->employee == null)
                                <a href="{{ route('employee.orders.confirm', $order) }}"><button type="submit" class="btn btn-primary">Xác nhận</button> </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>                      
                  </table>
@endsection