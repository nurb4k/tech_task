<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Books</title>
</head>
<body>
<div class="container" style="margin:35px auto;width: 1200px;background-color: #a3dca3; padding: 15px;">

    <div>
        <a href="{{route('book.create')}}" class="btn btn-success">CREATE BOOK</a>
    </div>
    <div class="container-fluid">
        @foreach($books as $book)
            <div class="card" style="width: 18rem;">
                <div class="card bg-primary text-white">


                <div class="card-body">

                    <h5 class="card-title">{{$book->name}}</h5>
                    <p class="card-text">{{$book->description}}</p>
                    <p class="card-text">Author: {{$book->author->name}}</p>
                </div>
                </div>
            </div>
        @endforeach
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>
</html>
