<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
    <title>Belarus</title>
</head>
    <div class="mx-4">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Логин
                </h2>
            </header>

            <form method="POST" action="/users/auth" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2">Email</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="inline-block text-lg mb-2">Пароль </label>
                    <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" value="{{old('password')}}" />
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black" type="Submit">
                        Готово
                    </button>
                    <div class="mt-8">
                        <p>Нет аккаунта?
                            <a href="/register" class="text-laravel">Register</a>
                        </p>
                    </div>
                    <a href="/" class="text-black ml-4"> Назад <-</a>
                </div>
            </form>
        </div>
    </div>
