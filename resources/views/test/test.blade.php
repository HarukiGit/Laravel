<!DOCTYPE html>
<html>
<head>
  <title>テストページ</title>
</head>
<body>
    <h1>Heading</h1>
    @if(session('success'))
    <p>{{session('success')}}</p>
    @endif
    <form action="{{route('button')}}" method="post">
      @csrf
      <button type="submit">Click me</button>
    </form>
   

  <!-- ここにコンテンツを記述 -->
</body>
</html>