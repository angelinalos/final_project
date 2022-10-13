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
                    Добавь место
                </h2>
            </header>

            <form method="POST" action="/places" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="title" class="inline-block text-lg mb-2">Название</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                           placeholder="Дворец..." value="{{old('title')}}" />
                    @error('title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="lat" class="inline-block text-lg mb-2">Широта (lat)</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="lat"
                           value="{{old('lat')}}" />

                    @error('lat')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="lng" class="inline-block text-lg mb-2">Долгота (lng)</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="lng"
                           value="{{old('lng')}}" />

                    @error('lng')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="tags" class="inline-block text-lg mb-2">
                        Тэги
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                           placeholder="Гомель, Беларусь и тд" value="{{old('tags')}}" />
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
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                              placeholder="Include tasks, requirements, salary, etc">{{old('description')}}</textarea>
                        @error('description')
                            <div class="text-red-500 text-xs mt-1">
                                {{ $message}}
                            </div>
                        @enderror
                </div>

                <div class="mb-6">
                    <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black" type="Submit">
                        Добавить
                    </button>
                    <a href="/" class="text-black ml-4"> Назад <- </a>
                </div>
            </form>
        </div>
    </div>

