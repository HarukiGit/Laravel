<!DOCTYPE html>
<style>

  img {
    width: 500px;
    height: auto;
    
  }
</style>
<style>
  .inline {
      background-color: rgba(82, 212, 49, 0.651);
  }
</style>
<html>
<head>
  <title>{{config('app.name')}}</title>
</head>
<body>
    <h1>削除</h1>
    <a href={{route('home')}}>戻る</a>
    @foreach($diaries as $diary)
    <div style="padding: 10px; margin-bottom: 10px; border: 5px double #333333;">
        <p>{{$diary['created_at']}}</p>
        <p>{{$diary['text']}}</p>
        <img id="{{ asset($diary['image']) }}" alt=" " src="{{ asset($diary['image']) }}"  >
      <form action={{route('delete.mysql',['id'=>$diary['id']])}} method="post">
        @csrf
        <button type="submit">削除</button>
      </form>
    </div>
    @endforeach
</body>
</html>