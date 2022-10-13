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
                    <a href="/admin/dashboard" class="p-4 text-gray-200">Привет, </a>
                <div class="md:mt-12 md:w-48 md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                    <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
                        <li class="mr-3 flex-1">
                            <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
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
        <section class="flex m-auto">
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Id
                        </th>
                        <th scope="col" class="py-3 px-6">
                            User_Id
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Title
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Description
                        </th>
                        <th scope="col" class="py-3 px-6">
Tags                        </th>
                        <th scope="col" class="py-3 px-6">
                            Image
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($places as $place)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$place->id}}
                            </th>
                            <td class="py-4 px-6">
                                {{$place->user_id}}
                            </td>
                            <td class="py-4 px-6">
                                {{$place->title}}
                            </td>
                            <td class="py-4 px-6">
                                {{$place->description}}
                            </td>
                            <td class="py-4 px-6">
                                {{$place->tags}}
                            </td>
                            <td class="py-4 px-6">
                                {{$place->img}}
                            </td>
                            <td class="py-4 px-6">
                                <a href="/places/{{$place->id}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>

    </div>
</div>
