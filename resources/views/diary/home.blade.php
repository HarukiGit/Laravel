<!DOCTYPE html>
<html>
<head>
  <title>日々の日記</title>
</head>
<body>
    <h1>日記</h1>
    <form action="{{route('write')}}" method="get">
      @csrf
      <button type="submit">今日の日記を書き込む</button>
    </form>
    @foreach($diaries as $diary)
      <p>{{$diary->text}}</p>
    @endforeach
  <!-- ここにコンテンツを記述 -->
</body>
</html>