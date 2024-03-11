<!DOCTYPE html>
<html>
    <head>
        <title>Form Ubah Data User</title>
        <a href="/user">kembali</a>
    </head>
    <body>
        <h1>Form Ubah Data User</h1>
        <form method="post" action="/user/tambah_simpan {{ $data->user_id}}">

            {{csrf_field()}}
            {{method_field('PUT')}}

            <label> Username</label>
            <input type="text" name="username" placeholder="Masukkan Username">
            <br>
            <label> Nama</label>
            <input type="text" name="nama" placeholder="Masukkan Nama">
            <br>
            <label> Password</label>
            <input type="Password" name="Password" placeholder="Masukkan Password">
            <br>
            <label> Level ID</label>
            <input type="number" name="level_id" placeholder="Masukkan Id Level">
            <br><br>
            <input type="submit" class="btn btn-success" value="Simpan">
        </form>
    </body>
</html>