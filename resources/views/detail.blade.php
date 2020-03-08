@extends('tampilan')
@section('content')
<div class="container">
    <center><h2><b>DAFTAR JUDUL TUGAS AKHIR</b></h2></center><br><br><br>
    <table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th><b>NIM</b></th>
            <th><b>Nama Lengkap</b></th>
            <th><b>Judul TA</b></th>
            <th><b>Aksi</b></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cruds as $c)
            <tr>
                <td>{{$c['nim']}}</td>
                <td>{{$c['nama']}}</td>
                <td>{{$c['judulta']}}</td>
<!-- Modal -->
<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Hapus Judul</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form action="{{route('crud.destroy', $c['nim'])}}" method="post">
      <div class="modal-body">
        Apakah anda yakin ingin menghapus judul ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak yakin</button>
        @csrf
        <input type="hidden" name="_method" value="DELETE"><input type="hidden" value="{{$c['nama']}}" name="name">
        <input type="submit" class="btn btn-danger" value="Yakin"></form>
        
      </div>
    </div>
  </div>
</div>
                <td><center><a href="{{route('crud.show', $c['nim'])}}" class="btn btn-info"><i class="fas fa-eye"></i> Lihat</a> <a href="{{route('crud.edit',$c['nim'])}}" class="btn btn-warning"><i class="fas fa-user-edit"></i> Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus"><i class="fas fa-trash-alt"></i>  
                Hapus</button></center>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>
    <center><b>{} with <FONT COLOR="#FF0000">Grusa-Grusu</font></b></center>

@endsection
    