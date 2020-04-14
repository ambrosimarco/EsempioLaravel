<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Fotografie</title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Fotografie</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nome</td>
          <td>Colore</td>
          <td>Data</td>
          <td>Luogo</td>
          <td colspan = 2></td>
        </tr>
    </thead>
    <tbody>
        @foreach($photos as $photo)
        <tr>
            <td>{{$photo->id}}</td>
            <td>{{$photo->titolo}}</td>
            <td>{{$photo->colore}}</td>
            <td>{{$photo->data}}</td>
            <td>{{$photo->luogo}}</td>
            <td class="btn-group">
                <a href="{{ route('photos.edit', $photo->id)}}" class="btn btn-primary">Edit</a>
            
                <form action="{{ route('photos.destroy', $photo->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger ml-1" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>    
  </table>
  <a href="{{ route('photos.create') }}" class="btn btn-primary">Nuova</a>
<div>
</div>
</body>
</html>
