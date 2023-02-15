<!DOCTYPE html>

<html>

<head>
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="/css/home.css">
</head>

<body>
    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-responsive-nav-link>
    </form>


    <h1>日記</h1>

    @auth
    <div class="form">
        <form class="button" action="{{ route('write') }}" method="get">
            @csrf
            <button type="submit">日記を書き込む</button>
        </form>
        <form class="button" action="{{ route('delete') }}" method="get">
            @csrf
            <button type="submit">削除</button>
        </form>
    </div>
    @endauth

    @foreach ($diaries as $diary)
    <div class="diaries">
        <div class="date">{{ $diary['created_at'] }}</div>
        <p>{{ $diary['text'] }}</p>
        <img id="{{ asset($diary['image']) }}" alt=" " src="{{ asset($diary['image']) }}">
    </div>
    @endforeach
</body>

</html>