@extends('layout')

@section('content')
    @include('partials._search')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@foreach($places as $place)

            <div class="bg-gray-50 border border-gray-200 rounded p-6">
                <div class="flex">
                    <img class="hidden w-48 mr-6 md:block" src="{{$place->img ? asset ('storage/'.$place->img) : asset('images/tree.png')}}"/>
                    <div class="flex flex-col justify-center">
                        <h3 class="text-2xl">
                            <a href="/places/{{$place->id}}">{{$place->title}}</a>
                        </h3>
                          <x-tags :tagsdb="$place->tags"/>
                        <div class="text-lg mt-4">
                            {{$place->description}}
                        </div>
                    </div>
                </div>
            </div>
@endforeach
    </div>
    <div class="mt-6 p-4">{{$places->links()}}</div>
@endsection
