<!DOCTYPE html>
<html>
<head>
    <title>{{config('app.name')}}</title>
</head>
<body>
    
    <h1>日記を書き込む</h1>
    <a href={{route('home')}}>戻る</a>
    <p>{{$image_path}}</p>
    <form method="POST" action={{route('create.image')}} enctype="multipart/form-data" >
        @csrf
        <input type="file" name="image" accept="image/*">
        <button>アップロード</button>
    </form>
    <form action={{route('create',['image_path'=>$image_path])}} method="post">
        @csrf
        <label >内容を入力</label>
        <textarea id="message" name="text"></textarea>
        <input type="submit" value="保存">
    </form>
    


  <!-- ここにコンテンツを記述 -->
</body>
</html>