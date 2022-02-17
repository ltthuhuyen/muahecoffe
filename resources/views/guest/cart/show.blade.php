<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <style>
      
        .font {
          font-family: 'Dancing Script', cursive;
          font-size: 35px;
        }
    </style>
  
    <style>
      .img-wrap {
        height: 220px;
        overflow: hidden;
      }
      .img-wrap img {
        height: 220px; 
        width: 100%;
      }
      .font {
          font-family: 'Satisfy', cursive;
          font-size: 35px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <img src="/images/logo.png" height="150px">
            </div>
            <div class="col-10 text-center">
              <h1 class="border border-dark rounded-pill mt-5 p-4 text-gray font">Mùa Hè Coffee</h1>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light p-1">
            <a class="navbar-brand ml-3" href="#"> MUAHECoffee </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto ">
                <li class="nav-item active mr-5">
                  <a class="nav-link" href="/"><i class="fas fa-home fa-1x"></i>Trang chủ<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown mr-5">
                  <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bars fa-1x"></i>
                  Menu
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @if(isset($type_products))
                    @foreach($type_products as $type_product)
                      <a class="dropdown-item" href="{{ route('guest.menu.type', ['type' => $type_product]) }}">{{ $type_product->name}}</a>
                    @endforeach
                    @endif
                  </div>
                </li>
                <li class="nav-item active">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"> <i class="fas fa-phone-square-alt fa-1x"></i> 091 357 74 11<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active ml-5">
                 
                <a class="nav-link" href="{{ route('guest.cart.show') }}"><i class="fas fa-shopping-cart fa-1x"></i>Giỏ hàng<span class="sr-only">{{ Cart::count() }}</span></a> 
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0" role="search" id="searchfrom" method="GET" action="/timkiem">
                <input class="form-control mr-sm-2" type="text" name="tukhoa" placeholder="Tìm kiếm" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 mr-3 " type="submit">Tìm kiếm</button>
              </form>
              @if(Auth::check())
              <div class=" my-2 my-lg-0">
                <div class="btn-group">
                  <button type="button" class="btn dropdown-toggle my-1 mr-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user" style="font-size:23px"></i> {{Auth::user()->name}}
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" stype="width: 40px" href="/logout">Đăng xuất</a>
                  </div>
                </div>
              </div>
              @else
              <ul class="navbar-nav ">
                <li class="nav-item ml-5 active">
                  <a class="nav-link" name ='btn-login' href="/login">
                      <button class="btn btn-outline-white text-dark py-2  ml-0 " style="border: 1px solid "  >
                      Đăng nhập
                      </button>
                  </a>
                </li>
                
                <li class="nav-item mr-1 active">
                  <a class="nav-link" name ='btn-login' href="/register">
                    <button class="btn btn-outline-white text-dark  py-2  ml-0 " style="border: 1px solid "  >
                      Đăng ký thành viên
                    </button>
                  </a>
                </li>
              </ul>
              @endif
            </div>
        </nav>

        <div class="row">
            <div class="col-4 text-center">

            </div>
            <div class="col-4 text-center">
                <h4 class=" rounded-pill text-dark font-italic mt-5 p-2 bg-light" >Giỏ Hàng</h4>
            </div>
        </div>

        <div class="container mt-5">
            <table class="table table-hover">
                <thead class="">
                  <tr class="text-center">
                    <th scope="col">Mã sản phẩm</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Tạm tính</th>
                    <th scope="col">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                @foreach(Cart::content() as $item)
                    <tr class="text-center">
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name->name }}</td>
                        <td>
                            <img src=" {{Storage::url($item->name->image)}}" alt="" width="200px"> 
                          </td>
                        <!-- <td>
                          <a href="" class="product-1">
                            <img src=" {{Storage::url($item->image)}}" alt="" width="70px">
                          </a>
                        </td> -->
                        <td>{{ $item->price }}</td>
                        <td> 
                          <a href="{{ route('guest.cart.decrease',  ['row_id' => $item->rowId]) }}" class="btn btn-light mr-1">-</a>
                          {{ $item->qty }}
                          <a href="{{ route('guest.cart.increase', ['row_id' => $item->rowId]) }}" class="btn btn-light mr-1">+</a>
                        </td>
                        <td>{{ $item->subtotal }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="{{ route('guest.delete-from-cart', ['row_id' => $item->rowId]) }}" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach  
                </tbody>
              </table>
        </div>
        
        <div class="container mt-5">
            <div class="row mt-5 ">
                <div class="col-8">
                <a class="btn btn-outline-dark mt-auto" href="/">TIẾP TỤC MUA HÀNG</a>
                </div>
                <div class="col-4">
                    <div>TỔNG CỘNG</div>
                    <br>
                    <div class="row">
                        <div class="col-6"><h5>Tổng tiền</h5></div>
                        <div class="float-right"><h5>{{ Cart::subtotal() }}</h5></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                        <a class="btn btn-outline-dark mt-auto" href="{{ route('guest.payment.show') }}"><i class="fas fa-check"></i> MUA HÀNG</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
      
        <div class="row order border-dark text-white font-italic p-4 mt-5" style="background-color: black">
          <div class="col-12 text-center">
            <h3>Tiệm Mùa Hè Coffee</h3>
              Địa chỉ: 115 đường Hai Bà Trưng, phường Bến Nghé, quận 1, Thành phố Hồ Chí Minh
          </div>
        </div>
   
    </div>
       
   


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
</body>
</html>