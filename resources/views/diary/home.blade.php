<!DOCTYPE html>

<html>

<head>
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="/css/home.css">
</head>

<body>
    <h1>日記</h1>
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
    @foreach ($diaries as $diary)
        <div class="diaries">
            <div class="date">{{ $diary['created_at'] }}</div>
            <p>{{ $diary['text'] }}</p>
            <img id="{{ asset($diary['image']) }}" alt=" " src="{{ asset($diary['image']) }}">
        </div>
    @endforeach
</body>

</html>
