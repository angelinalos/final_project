<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Belarus</title>
</head>
<body class="mb-48">
<div id="app"></div>
    <nav class="flex justify-between items-center mb-4">
        <a href="/"><img class="w-24 m-3" src="images/forest.png" alt="logo"/></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
                <li>
        <span class="font-bold uppercase">
          Привет, {{auth()->user()->name}}!
        </span>
                </li>
                <form class="inline" method="POST" action="/logout">
                    @csrf
                    <button type="submit">
                        Выйти
                    </button>
                </form>
            @else
                <li>
                    <a href="/register" class="hover:text-laravel">Зарегистрироваться</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-laravel">Войти</a>
                </li>
            @endauth
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2022</p>

        <a href="/places/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Добавить место</a>
    </footer>
</body>
</html>
