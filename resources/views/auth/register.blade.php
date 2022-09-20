@extends('layout')

@section('content')
    <div class="mx-4">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Зарегистрироваться
                </h2>
            </header>

            <form method="POST" action="/users" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="name" class="inline-block text-lg mb-2">Имя</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{old('name')}}" />
                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

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
                    <label for="password_confirmation" class="inline-block text-lg mb-2">Повторите пароль </label>
                    <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation" value="{{old('password_confirmation')}}" />
                    @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black" type="Submit">Готово</button>
                    <div class="mt-8">
                        <p>Уже есть аккаунт?
                            <a href="/login" class="text-laravel">Login</a>
                        </p>
                    </div>

                    <a href="/" class="text-black ml-4"> Назад <- </a>
                </div>
            </form>
        </div>
    </div>
@endsection
