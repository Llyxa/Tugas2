<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
</head>
<body>
    <iframe src="{{ $data->lagu }}"></iframe>
    <h1>{{ $data->judul }}</h1>
    <h1>{{ $data->penyanyi }}</h1>
    <h1>{{ $data->lirik }}</h1>
</body>
</html>