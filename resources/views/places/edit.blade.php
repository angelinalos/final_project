{{--@extends('layout')--}}

{{--@section('content')--}}
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
                    Редактор
                </h2>
            </header>
            <form method="POST" action="/places/{{$place->id}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="title" class="inline-block text-lg mb-2">Название</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                           placeholder="Дворец...." value="{{$place->title}}" />
                    @error('title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="location" class="inline-block text-lg mb-2">Координаты(через запятую)</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location" value="{{$place->location}}" />
                    @error('location')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="tags" class="inline-block text-lg mb-2">
                        Тэги
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                           placeholder="Гомель, Беларусь и тд" value="{{$place->tags}}" />
                    @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="img" class="inline-block text-lg mb-2">
                        Фото
                    </label>
                    <input type="file" class="border border-gray-200 rounded p-2 w-full" name="img" />
                    @error('img')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="description" class="inline-block text-lg mb-2">
                        Описание
                    </label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10">{{$place->description}}</textarea>
                    @if($errors->has('description'))
                        @foreach($errors->get('description') as $errorMessage)
                            <div class="text-red-500 text-xs mt-1" role="alert">
                                {{ $errorMessage }}
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="mb-6">
                    <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black" type="Submit">
                        Редактировать
                    </button>
                    <a href="/" class="text-black ml-4"> Назад <-</a>
                </div>
            </form>
        </div>
    </div>
{{--@endsection--}}
