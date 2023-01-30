<!DOCTYPE html>
<html>
<head>
  <title>ページタイトル</title>
</head>
<body>
    <h1>Heading</h1>
    <form action="{{route('button')}}" method="post">
        @csrf
        <button type="submit">Click me</button>
    </form>
  <!-- ここにコンテンツを記述 -->
</body>
</html>