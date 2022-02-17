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
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body >
    <div class="container">
        <div class="row mt-5">
            <div class="col-4">

            </div>
            <div class="col-4 border border-dark rounded p-3 " style="background-color:white">
                <h1 class="text-center font-italic">Mùa Hè Coffee</h1><br/>
                <form action="/login" method="POST" class="text-dark pl-3">
                    <div class="from-group mb-3">
                        <label for="username" class="form-label font-italic">Tên Đăng Nhập</label>
                        <input type="text" class="form-control" name="username" id="username"   placeholder="Tên đăng nhập" required>
                    </div>
                    <div class="from-group mb-3">
                        <label for="password" class="form-label font-italic">Mật Khẩu</label>
                        <input type="password" class="form-control" name="password" id="password"  placeholder="Mật khẩu" required>
                    </div>
                    <div class="from-group mb-3">
                        <label for="password" class="form-label font-italic">Mật Khẩu</label>
                        <input type="password" class="form-control" name="password" id="password"  placeholder="Mật khẩu" required>
                    </div>
                    <div class="from-group form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label font-italic" for="exampleCheck1">Ghi nhớ tôi</label>
                    </div>
                    <button type="submit" name="btn-login" value="Đăng nhập" class="btn btn-primary mb-5 mt-3 float-right">Đăng nhập</button>
                </form>
                
                <div class="mt-5 p-3">
                @if ($errors->any())
                     <div class="text-danger mt-5">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                @endif
                </div>
               
            </div>
           
        </div>
       
    </div>
   
  
   
</body>
</html>



<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Username -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

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

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
