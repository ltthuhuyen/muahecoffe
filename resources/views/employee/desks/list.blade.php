
@extends('employee.layout')
@section('bor')
  <h3>Quản Lý Bàn</h3>
@endsection
@section('bor1')
  <!-- <button type="button" class="btn btn-light text-gray"><a href="/employee/desk">Thêm </a></button> -->
@endsection
@section('content')
        <div class="row ">
            <div class="col-7 border border">
                <div class="row text-center mx-auto ">
                    <div class="col border rounded p-3 m-3">
                        Bàn 1
                    </div>
                    <div class="col border rounded p-3 m-3">
                        Bàn 2
                    </div>
                    <div class="col border rounded p-3 m-3">
                        Bàn 3
                    </div>
                </div>
                <div class="row text-center mx-auto ">
                    <div class="col border  rounded p-3 m-3">
                        Bàn 4
                    </div>
                    <div class="col border rounded p-3 m-3">
                        Bàn 5
                    </div>
                    <div class="col border rounded p-3 m-3">
                        Bàn 6
                    </div>
                </div>
                <div class="row text-center mx-auto ">
                    <div class="col border rounded p-3 m-3">
                        Bàn 7
                    </div>
                    <div class="col border rounded p-3 m-3">
                        Bàn 8
                    </div>
                    <div class="col border rounded p-3 m-3">
                        Bàn 9
                    </div>
                </div>
                <div class="row text-center mx-auto ">
                    <div class="col border rounded p-3 m-3">
                        Bàn 10
                    </div>
                    <div class="col border rounded p-3 m-3">
                        Bàn 11
                    </div>
                    <div class="col border rounded p-3 m-3">
                        Bàn 12
                    </div>
                </div>
                <div class="row border mx-auto mb-3 text-center" >
                    <div class="col border rounded p-3 m-3">
                        Bàn trống
                    </div>
                    <div class="col border rounded p-3 m-3 btn-danger ">
                        Chưa thanh toán
                    </div>
                    <div class="col border rounded p-3 m-3 btn-success ">
                        Đã thanh toán
                    </div>
                </div>
            </div>
            <div class="col-4 border p-3 ml-5">
                <div class="row mx-auto">
                    <div class="col-12">
                        <button type="button" class="btn btn-return "  style="background-color:lightgrey;">Quay lại</button>
                        <button type="button" class="btn btn-pay btn-primary float-right">Thanh toán</button>
                    </div>
                </div>
                <div class="row mt-3 mx-auto ">
                    <form class="col-12 form-inline my-2 my-lg-0">
                        <input class="form-control" type="search" placeholder="Tìm kiếm thức uống" aria-label="Search">
                        <button class="btn btn-outline-success float-right ml-2" type="submit">Tìm kiếm</button>
                    </form>
                </div>
                <div class="row mt-5">
                    @if(isset($type_products))
                    @foreach($type_products as $type_product)
                    <!-- <div class="col-4">
                        <div class="product-top img-wrap">
                            <a href="" class="product-1">
                              <img src="images/Cafe-cappuccino.jpg" >
                            </a>
                          </div>
                    </div> -->
                    <div class="col-8 ml-5 p-2">
                     {{$type_product->name}}
                    </div>
                    @endforeach  
                    @endif
                    
                </div>
               
            </div>
        </div>
       
          
            
@endsection