<!DOCTYPE html>
<html>
<head>
    <title>{{config('app.name')}}</title>
</head>
<body>
    <a href={{route('home')}}>戻る</a>
    <h1>日記を書き込む</h1>
    <p>{{$image_path}}</p>
    <form action={{route('create',['image_path'=>$image_path])}} method="post">
        @csrf
        <label >内容を入力</label>
        <textarea id="message" name="text"></textarea>
        <input type="submit" value="保存">
    </form>
    <form method="POST" action={{route('create.image')}} enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        <button>アップロード</button>
    </form>


  <!-- ここにコンテンツを記述 -->
</body>
</html>