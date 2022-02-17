
@extends('employee.layout')
@section('bor')
  <h3>Quản Lý Thức Uống</h3>
@endsection
@section('bor1')
<button type="button" class="btn btn-light text-gray"><a href="/employee/products/create"><i class="fas fa-plus-circle "></i> Thêm</a></button>
@endsection
@section('content')
                <table class="table table-bordered">
                    <thead>
                      <tr class=" text-center text-white font-italic " style="background-color: black">
                        <th>Tên loại thức uống</th>
                        <th>Mã thức uống</th>
                        <th>Tên thức uống</th>
                        <th>Giá hiện tại</th>
                        <th>Hành động</th>
                      </tr>
                    </thead>         
                    <tbody>
                      @if(isset($products))
                      @foreach($products as $product)
                      <tr class="text-center">
                          <td >{{$product->type_product->name??'error'}}</td>
                          <td >{{$product->id}}</td>
                          <td >{{$product->name}}</td>
                          <td >{{$product->currentPrice->price}}</td>
                          <td >
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href = '/employee/products/show{{$product->id}}' class="btn btn-light mr-1" ><i class="far fa-eye"></i></a>
                                <a href = '/employee/products/edit{{$product->id}}' class="btn btn-light mr-1" ><i class="far fa-edit"></i></a>
                                <form method="POST" action="/employee/products/delete{{$product->id}}">
                                  @method('DELETE')
                                  @csrf
                                <button type="submit" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                              </form>
                            </div>
                          </td>
                      </tr>
                      @endforeach  
                      @endif
                    </tbody>                      
                  </table>
                  <div class="float-right text-dark" >
                            {{ $products->appends(request()->all())->links() }}
                </div>

@endsection