<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hitung limas</title>
</head>

<body>
    <h1>Volume Limas Segi Empat</h1>
    <a href="{{ route('volumelimas.create') }}">Create</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Luas Alas</th>
            <th>Tinggi</th>
            <th>Hasil</th>
            <th>Actions</th>
        </tr>
        @foreach ($limas as $index => $v)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $v->luas_alas }}</td>
                <td>{{ $v->tinggi }}</td>
                <td>{{ $v->hasil }}</td>
                <td>
                    <a href="{{ route('volumelimas.edit',$v->id) }}">Edit</a>
                    <form action="{{ route('volumelimas.destroy',$v->id) }}"method="post" onclick="return confirm('Yakin Di Delete?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">DELETE</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
</body>

</html>
