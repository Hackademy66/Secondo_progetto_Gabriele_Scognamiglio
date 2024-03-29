<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel=Style href="public\Style.css"
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
    <div class="col-6">
      <div class="card">
          <div class="card-body">
            <p class="card-text">{{$fumetti['description']}}.</p>
            <a href="/Prodotti" class="btn btn-primary">Più Dettagli</a>
          </div>
        <img src="https://picsum.photos/300" class="card-img-top" alt="...">
      </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
