<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Create book</title>
</head>
<body>
<a href="{{route('book.index')}}" class="btn btn-primary" style="margin: 15px;">Go back</a>
<div style="display:flex;">
    <div class="container" style="margin:100px;width: 400px;background-color: #a3dca3; padding: 15px;">
        <h2>Add author</h2>
        <form action="{{route('author.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Name author</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                       placeholder="Insert name">
            </div>
            <br>
            <button type="submit" class="btn btn-success">ADD</button>
        </form>

    </div>
    <div class="container" style="margin:100px;width: 400px;background-color: #5fd7b1; padding: 15px;">
        <h2>Create book</h2>
        <form action="{{route('book.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                       placeholder="Insert name">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput2">Page count</label>
                <input type="number" name="page_count" class="form-control" id="exampleFormControlInput2"
                       placeholder="Insert page count">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                          placeholder="Description"
                          rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="selectAuthor">Author</label>
                <select name="author_id" id="selectAuthor" class="form-select" aria-label="Default select example">
                    @foreach($authors as $author)
                        <option value="{{$author->id}}">{{$author->name}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-success">SAVE</button>
        </form>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>
</html>
