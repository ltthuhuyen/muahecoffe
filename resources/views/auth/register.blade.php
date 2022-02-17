<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí thành viên</title>
    <style>
        body{
            background-image: url("./images/tiem-cafe-mua-he-quan-1.jpg") ;
         
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <style>
      
        .font {
          font-family: 'Dancing Script', cursive;
          font-size: 35px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body >
    <div class="container">
        <div class="row mt-5">
            
        </div>
        <div class="row mt-5">
            <div class="col-4">

            </div>
            <div class="col-4 border border-dark rounded mb-3 p-3" style="background-color:white">
                <h1 style="text-align:center" class="font mt-2">Register</h1><br/>
                <form action="/register" method="POST"> 
                    <div class="from-group mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name"  required autofocus >
                    </div>
                    <div class="from-group mb-3">
                        <label for="password" class="form-label ">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required autocomplete="current-password">
                    </div>
                    <div class="from-group mb-3">
                        <label for="password_confirmation" class="form-label ">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
                    </div>
                    <div class="from-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email"  required >
                    </div>
                    <div class="from-group mb-3">
                        <label for="phonenumber" class="form-label">Điện thoại</label>
                        <input type="text" class="form-control" name="phonenumber" id="phonenumber"  required >
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-button class="float-right btn btn-dark ">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                    <!-- <button style="submit" name="btn-dangKy" class="btn btn-primary mb-5 mt-3 float-right">Đăng Ký</button></br>
                    <div class="mt-2">
                        @if ($errors->any())
                            <div class="text-danger mt-5">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </div>
                        @endif
                     </div> -->
                </form>
                
            </div>
           
        </div>
    </div>

  
</body>
</html>