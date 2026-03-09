<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Peserta Pelatihan</title>
</head>

<body>
    <h1>Peserta Pelatihan</h1>
    <a href="{{ route('pesertapelatihan.create') }}">Create</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Jurusan</th>
            <th>Gelombang</th>
            <th>Nama_lengkap</th>
            <th>Nik</th>
            <th>Kartu_keluarga</th>
            <th>Jenis_kelamin</th>
            <th>Tempat_lahir</th>
            <th>Tanggal_lahir</th>
            <th>Pendidikan_terakhir</th>
            <th>Nama_sekolah</th>
            <th>Kejuruan</th>
            <th>Nomor_hp</th>
            <th>Email</th>
            <th>Aktivitas</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        @foreach ($peserta as $index => $v)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $v->jurusan }}</td>
                <td>{{ $v->gelombang }}</td>
                <td>{{ $v->nama_lengkap }}</td>
                <td>{{ $v->nik }}</td>
                <td>{{ $v->kartu_keluarga }}</td>
                <td>{{ $v->jenis_kelamin }}</td>
                <td>{{ $v->tempat_lahir }}</td>
                <td>{{ $v->tanggal_lahir }}</td>
                <td>{{ $v->pendidikan_terakhir }}</td>
                <td>{{ $v->nama_sekolah }}</td>
                <td>{{ $v->kejuruan }}</td>
                <td>{{ $v->nomor_hp }}</td>
                <td>{{ $v->email }}</td>
                <td>{{ $v->aktivitas_saat_ini }}</td>
                <td>{{ $v->status }}</td>
                <td>
                     <a href="{{ route('pesertapelatihan.edit',$v->id) }}">Edit</a>
                    <form action="{{ route('pesertapelatihan.destroy',$v->id) }}"method="post" onclick="return confirm('Yakin Di Delete?')">
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