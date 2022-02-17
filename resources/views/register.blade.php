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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body >
    <div class="container">
        <div class="row mt-5">
            <div class="col-4">

            </div>
            <div class="col-4 border border-dark rounded mb-3 p-3" style="background-color:white">
                <h2 style="text-align:center" class="font-italic">Đăng ký thành viên </h2><br/>
                <form action="/register" method="POST"> 
                    <div class="from-group mb-3">
                        <label for="username" class="form-label font-italic">Tên đăng nhập</label>
                        <input type="text" class="form-control" name="username" id="username" aria-describedby="usernameHelp" required>
                    </div>
                    <div class="from-group mb-3">
                        <label for="password" class="form-label font-italic">Mật khẩu</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="from-group mb-3">
                        <label for="password" class="form-label font-italic">Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="from-group mb-3">
                        <label for="phone" class="form-label font-italic">Số điện thoại</label>
                        <input type="text" class="form-control" name="phone" id="phone" required>
                    </div>
                    <button style="submit" name="btn-dangKy" class="btn btn-primary mb-5 mt-3 float-right">Đăng Ký</button></br>
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
                     </div>
                </form>
                
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

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="float-right">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>


