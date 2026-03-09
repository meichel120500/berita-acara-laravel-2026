<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Input Data Peserta</title>
</head>

<body>
    <h3>Create Data Peserta</h3>
    <form action="{{ route('pesertapelatihan.update',$peserta->id) }}" method="post">
        @csrf
         @method('PUT')
        <label for="">Jurusan</label><br>
        <input type="text" step="any" name="jurusan" value="{{ $peserta->jurusan }}" required><br>
        <label for="">Gelombang</label><br>
        <input type="number" step="any" name="gelombang" value="{{ $peserta->gelombang }}" required><br>
        <label for="">Nama Lengkap</label><br>
        <input type="text" step="any" name="nama_lengkap" value="{{ $peserta->nama_lengkap }}" required><br>
        <label for="">NIK</label><br>
        <input type="number" step="any" name="nik" value="{{ $peserta->nik }}" required><br>
        <label for="">Kartu Keluarga</label><br>
        <input type="number" step="any" name="kartu_keluarga" value="{{ $peserta->kartu_keluarga }}" required><br>
        <label for="">Jenis Kelamin</label><br>
        <select name="jenis_kelamin" value="{{ $peserta->jenis_kelamin }}" required>
            <option value="">--Pilih Jenis Kelamin--</option>
            <option value="laki">Laki</option>
            <option value="perempuan">Perempuan</option>
        </select><br>
        <label for="">Tempat Lahir </label><br>
        <input type="text" step="any" name="tempat_lahir" value="{{ $peserta->tempat_lahir }}" required><br>
        <label for="">Tanggal Lahir</label><br>
        <input type="date" step="any" name="tanggal_lahir" value="{{ $peserta->tanggal_lahir }}" required><br>
        <label for="">Pendidikan Terakhir</label><br>
        <input type="text" step="any" name="pendidikan_terakhir" value="{{ $peserta->pendidikan_terakhir }}" required><br>
        <label for="">Nama Sekolah</label><br>
        <input type="text" step="any" name="nama_sekolah" value="{{ $peserta->nama_sekolah }}" required><br>
        <label for="">Kejuruan</label><br>
        <input type="text" step="any" name="kejuruan" value="{{ $peserta->kejuruan }}" required><br>
        <label for="">Nomor Hp</label><br>
        <input type="number" step="any" name="nomor_hp" value="{{ $peserta->nomor_hp }}" required><br>
        <label for="">Email</label><br>
        <input type="email" step="any" name="email" value="{{ $peserta->email }}" required><br>
        <label for="">Aktivitas</label><br>
        <input type="text" step="any" name="aktivitas_saat_ini" value="{{ $peserta->aktivitas }}" required><br>
        <label for="">Status</label><br>
        <select name="status" value="{{ $peserta->status }}" required>
            <option value="">--Pilih Status--</option>
            <option value="aktif">Aktif</option>
            <option value="tidakAktif">Tidak Aktif</option>
        </select><br>
        <button type="submit">Hitung & Simpan</button>
    </form>
</body>

</html>
