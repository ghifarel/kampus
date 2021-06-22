@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container my-3 w-50" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h1>Tambah Data Mahasiswa Terang Gelap University</h1>
            <form action="{{route('users.index')}}" method="POST">
                @csrf
                <ul class="list-group">
                    Nama <input type="text" name="name" required>
                    Email <input type="email" name="email" required>
                    Password <input type="password" name="password" required>
                    <div class="form-group">
                        <label>Hak Akses</label>
                        <select name="login_role" class="form-control">
                            <option value="Siswa">Siswa</option>
                            <option value="Guru">Guru</option>
                        </select>
                    </div>
                </ul>
                <hr>
                <a href="{{route('users.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection