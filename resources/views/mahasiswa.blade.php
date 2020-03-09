@extends('tampilanmhs')
@section('content')
    <!-- MULAI -->
    <div class="container">
    <center><h2><b>DAFTAR MAHASISWA</b></h2></center><br><br><br>
    <div class="row">
    <div class="col-md-4">
    <form action="{{route('mahasiswa.index')}}" class="form-controller" method="get">
    <select class="form-control" name="kelas">
        <option value="">Pilih Kelas</option>
        <option value="6A">6A</option>
        <option value="6B">6B</option>
        <option value="6C">6C</option>
        <option value="6D">6D</option>
    </select>
    <input type="submit" class="btn btn-info" value="Cari">
    <a href="/mahasiswa" class="btn btn-outline-info">Lihat Semua</a>

    </form>
    </div></div>

    <table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th><center><b>No</b></center></th>
            <th><center><b>Nama</b></center></th>
            <th><center><b>Kelas</b></center></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mahasiswa as $m)
            <tr>
                <td>{{$m['no']}}</td>
                <td>{{$m['nama']}}</td>
                <td>{{$m['kelas']}}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
    </div>
@endsection