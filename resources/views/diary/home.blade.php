<!DOCTYPE html>
<style>
  .container {
    max-width: 800px;
    margin: 0 auto;
  }

  form {
    background-color: rgba(82, 212, 49, 0.651);
    padding: 20px;
    border-radius: 10px;
    text-align: center;
  }

  form button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: white;
    font-size: 18px;
    cursor: pointer;
  }

  .diary {
    padding: 20px;
    margin-bottom: 20px;
    border: 1px solid #333333;
    border-radius: 10px;
  }

  .diary p {
    margin: 0;
  }

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
    <h1>日記</h1>
    <form action="{{route('write')}}" method="get">
      @csrf
      <button type="submit">日記を書き込む</button>
    </form>
    <form action="{{route('delete')}}" method="get">
      @csrf
      <button type="submit">削除</button>
    </form>
    @foreach($diaries as $diary)
    <div style="padding: 10px; margin-bottom: 10px; border: 5px double #333333;">
      <p>{{$diary['created_at']}}</p>
      <p>{{$diary['text']}}</p>
      <img id="{{ asset($diary['image']) }}" alt=" " src="{{ asset($diary['image']) }}"  >
    </div>
    @endforeach
</body>
</html>