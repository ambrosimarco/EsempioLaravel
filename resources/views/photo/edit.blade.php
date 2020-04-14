<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Modifica</title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Modifica foto</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('photos.update', $photo->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">    
                <label for="titolo">Titolo:</label>
                <input type="text" class="form-control" value="{{$photo->titolo}}" name="titolo"/>
            </div>
            <div class="form-group">
                <label for="colore">Colore:</label>
                <input type="text" class="form-control" name="colore" value="{{$photo->colore}}"/>
            </div>
            <div class="form-group">
                <label for="data">Data:</label>
                <input type="text" class="form-control" name="data" value="{{$photo->data}}"/>
            </div>
            <div class="form-group">
                <label for="luogo">Luogo:</label>
                <input type="text" class="form-control" name="luogo" value="{{$photo->luogo}}"/>
            </div>
            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </div>
</div>
</body>
</html>
