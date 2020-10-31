<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload múltiplos arquivo no Laravel</title>
</head>
<body>
    <form action="{{ route('myupload-route') }}" enctype="multipart/form-data" method="post">
        @csrf
        <input type="file" name="file[]" multiple>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
