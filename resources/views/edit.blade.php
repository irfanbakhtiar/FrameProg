@extends('tampilan')
@section('content')
<div class="container">
    <center><h2><b>DAFTAR JUDUL TUGAS AKHIR</b></h2></center><br><br><br>
    @foreach ($cruds as $c)
    <form action="{{route('crud.update', $c['nim'])}}" method="POST" class="needs-validation" novalidate>
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" placeholder="nama" name="old_name" value="{{ $c['nama'] }}">
        <div class="form-group"> 
        <label>NIM :</label>
        <input type="text" class="form-control" placeholder="Nomer Induk Mahasiswa" name="nim" value="{{ $c['nim'] }}" required>
        <div class="invalid-feedback">
        Harap masukkan NIM.
        </div>
        </div>
        <div class="form-group"> 
        <label>Nama Lengkap :</label>
        <input type="text" class="form-control" placeholder="Nama Lengkap" name="name" value="{{ $c['nama'] }}" required>
        <div class="invalid-feedback">
        Harap masukkan Nama Lengkap.
        </div>
        </div>
        <div class="form-group"> 
        <label>Judul TA :</label>
        <input type="text" class="form-control" placeholder="Judul Tugas Akhir" name="judulta" value="{{$c['judulta']}}" required>  
        <div class="invalid-feedback">
        Harap masukkan Judul Tugas Akhir.
        </div>
        </div>
        <input type="submit" class="btn btn-warning" value="Edit Data">
        <a href="/crud" class="btn btn-outline-warning">Kembali</a>
    </form>
    @endforeach
<!-- JS Validasi -->
<script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<center><b>{} with <FONT COLOR="#FF0000">Grusa-Grusu</font></b></center>

</div>    
@endsection