<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container">
                <a class="navbar-brand text-light" href="/">Edit Bar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <h1>Edit Product #{{$product->name}}</h1>
        <form class="container mt-4" method="POST" action="/product/update" enctype= multipart/form-data>
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Product Description</label>
                <textarea name="description" type="text" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Product Image</label>
                <input name="image" type="file" class="form-control"></input>
            </div>
            
            <button type="submit"  class="btn btn-primary">Submit</button>
        </form>
</body>
</html>