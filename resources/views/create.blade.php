@extends('tampilan')
@section('content')
<div class="container">
    <center><h2><b>DAFTAR JUDUL TUGAS AKHIR</b></h2></center><br><br><br>
<form action="{{route('crud.store')}}" method="post" class="needs-validation" novalidate>
    @csrf
    <div class="form-group">
    <label>NIM :</label>
    <input type="text" placeholder="Masukkan Nomer Induk Mahasiswa" class="form-control" name="nim" required>
    <div class="invalid-feedback">
        Harap masukkan NIM.
      </div>
    </div>
    <div class="form-group"> 
    <label>Nama Lengkap :</label>       
    <input type="text" placeholder="Masukkan Nama Lengkap" class="form-control" name="name" required> 
    <div class="invalid-feedback">
        Harap masukkan Nama Lengkap.
      </div>
    </div>
    <div class="form-group">
    <label>Judul TA :</label>
    <input type="text" placeholder="Masukkan Judul Tugas Akhir" class="form-control" name="judulta" required>
    <div class="invalid-feedback">
        Harap masukkan Judul Tugas Akhir.
      </div>
    </div>  
    <input type="submit" class="btn btn-primary" value="Tambah Data">
    <a href="/crud" class="btn btn-outline-primary">Kembali</a>
</form><br>
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