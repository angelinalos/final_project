@extends('layout')

@section('content')
    <a href="/" class="inline-block text-black ml-4 mb-4">Назад <- </a>
    <div class="mx-4">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6" src="images/tree.png"/>

                <h3 class="text-2xl mb-2">{{$place->title}}</h3>
                <x-tags :tagsdb="$place->tags"/>
                <div class="text-lg my-4">
                    {{$place->location}}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Описание достопримечательности
                    </h3>
                    <div class="text-lg space-y-6">
                        <p>
                         {{$place->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 border border-gray-200 rounded p-6 mt-4 p-2 flex space-x-6'">
            <a href="/places/{{$place->id}}/edit">
                Редактировать
            </a>
            <form method="POST" action="/places/{{$place->id}}">
                @csrf
                @method('DELETE')
                <button class=" ml-4 text-red-500">Удалить</button>
            </form>
        </div>

    </div>
@endsection
