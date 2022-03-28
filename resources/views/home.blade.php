<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <a href="/tambah">Tambah</a>
            @foreach ($data as $item)
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Penyanyi</th>
                        <th>Lagu</th>
                        <th>Waktu Ditambahkan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->penyanyi }}</td>
                        <td><a href="/detail/{{ $item->id }}"></a></td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <a href="/edit/{{ $item->id }}">Edit</a>
                            <a href="/delete/{{ $item->id }}">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            @endforeach
        </div>
    </div>
</body>
</html>