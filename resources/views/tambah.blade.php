<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah</title>
</head>
<body>
    <h1>Tambah Lagu</h1>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="/insertdata" method="POST" enctype="multipart/form-data"> <!-- entype untuk input data seperti foto-->
                        @csrf
                        <div>
                            <label for="">Judul</label>
                            <input type="text" name="judul">
                        </div><br>
                        <div>
                            <label for="">Penyanyi</label>
                            <input type="text" name="penyanyi">
                        </div><br>
                        <div>
                            <label for="">Lagu</label>
                            <input type="text" name="lagu">
                        </div><br>
                        <div>
                            <label for="">Lirik</label>
                            <textarea type="text" name="lirik"></textarea>
                        </div><br>
                        {{-- <div>
                            <label for="">Lagu</label>
                            <input type="text">
                        </div> --}}
                        <button type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>