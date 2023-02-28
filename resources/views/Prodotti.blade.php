<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seconda Pagina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/">Homepage</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/Soci">Soci</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/Prodotti">Prodotti</a>
  </li>
</ul>

<div class="container-fluid  text-center">
    <div class="row justify-content-center">
      <div class="col-12">
        <h1 class="text-danger bg-primary">I Nostri Prodotti</h1>
      </div>
@foreach($prodotti as $fumetto)
    <div class="col-6">
      <div class="card">
          <div class="card-body">
            <h5 class="card-title"> {{$fumetto['name']}}</h5> 
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{route('Fumetti',['id'=>$fumetto['id']])}}" class="btn btn-primary">Più Dettagli</a>
          </div>
        <img src="https://picsum.photos/300" class="card-img-top" alt="...">
      </div>
    </div>
    @endforeach
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>