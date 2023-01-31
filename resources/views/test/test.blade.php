<!DOCTYPE html>
<html>
<head>
  <title>テストページ</title>
</head>
<body>
    <h1>Heading</h1>
    <form action="{{route('button')}}" method="post">
      @csrf
      <button type="submit">Click me</button>
    </form>
    @if(session('success'))
      <p>{{session('success')}}</p>
    @endif

  <!-- ここにコンテンツを記述 -->
</body>
</html>