@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Detail User SMKN 1</h3>
        </div>
        <div class="card-body">
            {{--  <div class="row ml-2">
                <h4 class="col-4">NIS</h4>
                <h4>: {{$siswa->nis}} </h4>
            </div>  --}}
            <div class="row ml-2">
                <h4 class="col-4">Nama</h4>
                <h4>: {{$users->name}} </h4>
            </div>
            <div class="row ml-2">
                <h4 class="col-4">Email</h4>
                <h4>: {{$users->email}} </h4>
            </div>
            <div class="row ml-2">
                <h4 class="col-4">Hak Akses</h4>
                <h4>: {{$users->login_role}} </h4>
            </div>
            <a href="{{route('users.index')}}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection