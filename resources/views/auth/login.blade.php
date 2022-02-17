<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        body{
            background-image: url('{{ asset('/images/tiem-cafe-mua-he-quan-1.jpg') }}') ;
         
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
    <div class="container ">
        <div class="row mt-5">
        </div>
        <div class="row mt-5">
            <div class="col-4">

            </div>
            <div class="col-4 border border-dark rounded p-3 " style="background-color:white">
                <h1 class="text-center font">Mùa Hè Coffee</h1><br/>
                <form action="/login" method="POST" class="text-dark pl-3">
                    <div class="from-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email"  required autofocus >
                    </div>
                    <div class="from-group mb-3">
                        <label for="password" class="form-label ">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required autocomplete="current-password">
                    </div>
                    
                    <!-- <button type="submit" name="btn-login" value="Đăng nhập" class="btn btn-primary mb-5 mt-3 float-right">Đăng nhập</button> -->
                     <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-button class="ml-3 btn btn-dark float-right">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                    
                </form>
               
            </div>
           
        </div>
       
    </div>
</body>
</html>