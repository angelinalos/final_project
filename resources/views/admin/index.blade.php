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
<div class="overflow-hidden">
        <div class="flex flex-col md:flex-row">
            <nav class="min-h-full">
                <div class="bg-gray-800 shadow-xl h-20 md:h-screen w-full md:w-48 content-center">
                    @foreach($users as $user)
                    <a href="/admin/dashboard" class="p-4 text-gray-200">Привет, {{$user->name}}</a>
                    @endforeach
                    <div class="md:mt-12 md:w-48 md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                        <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
                            <li class="mr-3 flex-1">
                                <a href="/admin/places" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                                    <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Места</span>
                                </a>
                            </li>
                            <li class="mr-3 flex-1">
                                <a href="/admin/users" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                                    <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Пользователи</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>

            <section class="flex flex-wrap min-w-full bg-gray-100">
                <div id="main" class="pt-12 mx-6">
                    <div class="px-6 py-8 max-w-sm rounded shadow-lg">
                            <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        <div class="px-4 pt-4 pb-2">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                        </div>
                      </div>
                    </div>
            </section>

        </div>
</div>

