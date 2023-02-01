<!DOCTYPE html>
<html>
<head>
  <title>{{config('app.name')}}</title>
</head>
<body>
    <h1>日記</h1>
    <form action="{{route('write')}}" method="get">
      @csrf
      <button type="submit">日記を書き込む</button>
    </form>
    @foreach($diaries as $diary)
      <p>{{$diary->created_at}}</p>
      <p>{{$diary->text}}</p>
      
    @endforeach
  <!-- ここにコンテンツを記述 -->
</body>
</html>