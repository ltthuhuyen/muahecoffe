<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <img src="/images/logo.png">
            </div>
            <div class="col-10">
                <div class="row border border-dark rounded-pill font-italic mt-5 p-4 ">
                <div class="col-4 mx-auto">
                        @yield('bor')
                    </div>
                    <div class="col-2">
                        @yield('bor1')
                    </div>
                </div>
            </div> 
        </div>
        <div class="row mx-auto">
            <div class="col-3 ">
                <div class="list-group">
                    <h5 class="list-group-item list-group-item-action">
                  Danh Mục
                    </h5>
                    <a href="/admin/employee" class="list-group-item list-group-item-action">Nhân viên</a>
                    <!-- <a href="/employee/typeProducts" class="list-group-item list-group-item-action">Loại sản phẩm</a>
                    <a href="#" class="list-group-item list-group-item-action">Phiếu order</a>
                    <a href="/employee/desk" class="list-group-item list-group-item-action">Bàn</a> -->
                    <a href="/dashboard" class="list-group-item list-group-item-action">Đăng xuất</a>
                  </div>
            </div>
            <div class="col-9 ">
                @yield('content')
               
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