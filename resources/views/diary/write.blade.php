<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <a href={{route('home')}}>戻る</a>
    <h1>日記を書き込む</h1>
    <form action={{route('create')}} method="post">
        @csrf
        <label >内容を入力</label>
        <textarea id="message" name="text"></textarea>
        <input type="submit" value="保存">
    </form>

  <!-- ここにコンテンツを記述 -->
</body>
</html>