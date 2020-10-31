<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <title>Laravel Gallery</title>
    </head>
    <body>
        <div class="container">
            <h1>Criar nova galeria!</h1>

            <form action="{{ route('gallery-upload') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Digite o nome da galeria</label>
                    <input type="text" name="title" class="form-control"  placeholder="Aniversário xxxx">
                </div>
                <div class="form-group">
                    <label>Escolha as imagens para a sua galeria</label>
                    <input type="file" class="form-control-file" name="file[]" multiple>
                </div>
                <button class="btn btn-primary" type="submit">Criar galeria</button>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>
