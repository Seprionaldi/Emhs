@extends('layouts.main')
@section('tittle','Mahasiswa')
@section('content')
<div class="card mt-4">
    <div class="card-header"></div>
    <div class="card-body">
        <form action="/mahasiswa/simpan" method="POST">
          @csrf
            <div class="form-group">
              <label>Nim</label>
              
              <input type="Number" name="nim" class="form-control"placeholder="masukan NIM">
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input type="Text" name="nama" class="form-control"placeholder="Nama Mahasiswa">
              </div>

              <label>Gender</label>
              <div class="form-check">
                <input type="Radio" name="gender" value="Pria" class="form-check-input" checked>
                <label>Pria</label>
              </div>
              <div class="form-check">
                <input type="Radio" name="gender" value="Wanita" class="form-check-input">
                <label>Wanita</label>
              </div>

              <div class="form-group">
                <label>Prodi</label>
                <select name="prodi" class="form-control">
                    <option value="0">----pilih program studi----</option>
                    <option value="Sistem Informasi">Sistem informasi</option>
                    <option value="Teknik Informasi">Teknik informasi</option>
                    <option value="kedokteran">kedokteran</option>
                    <option value="teknik komputer">teknik komputer</option>
                    <option value="sains data">sains data</option>
                    
                </select>
              </div>

              <label>Minat</label>
              <div class="form-check">
                <input type="checkbox" name="minat[]" value="AI" class="form-check-input">
                <label>Artificial Intelegent</label>
              </div>
              <div class="form-check">
                <input type="checkbox" name="minat[]" value="DBMS" class="form-check-input">
                <label>Data Engineering</label>
              </div>
              <div class="form-check">
                <input type="checkbox" name="minat[]" value="WEB" class="form-check-input">
                <label>Web Engineering</label>
              </div>


            <button type="submit" class="btn btn-primary mt-4">Submit</button>
          </form>
    </div>
</div>
@endsection
