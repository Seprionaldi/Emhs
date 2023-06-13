@extends('layouts.main')
@section('tittle','Mahasiswa')
@section('content')
<div class="card mt-4">
    <div class="card-header"></div>
    @php
        $minat = explode(',', $mhs->minat);
    @endphp
    <div class="card-body">
        <form action="/mahasiswa/update/{{ $mhs->nim }}" method="POST">
          @csrf
          @method('PUT')
            <div class="form-group">
              <label>Nim</label>
              <input type="Number" name="nim" class="form-control" value="{{ $mhs->nim }}">
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input type="Text" name="nama" class="form-control" value="{{ $mhs->nama }}">
              </div>

              <label>Gender</label>
              <div class="form-check">
                <input type="Radio" name="gender" value="Pria" class="form-check-input"{{ ($mhs->gender == 'Pria') ? 'checked':"" }}>
                <label>Pria</label>
              </div>
              <div class="form-check">
                <input type="Radio" name="gender" value="Wanita" class="form-check-input"{{ ($mhs->gender == 'Wanita') ? 'checked':"" }}>
                <label>Wanita</label>
              </div>

              <div class="form-group">
                <label>Prodi</label>
                <select name="prodi" class="form-control">
                    <option value="0">----pilih program studi----</option>
                    <option value="Sistem Informasi" {{ ($mhs->prodi =='Sistem Informasi') ? 'selected':'' }}>Sistem informasi</option>
                    <option value="Teknik Informasi" {{ ($mhs->prodi =='Teknik Informasi') ? 'selected':'' }}>Teknik informasi</option>
                    <option value="kedokteran" {{ ($mhs->prodi =='kedokteran') ? 'selected':'' }}>kedokteran</option>
                    <option value="teknik komputer" {{ ($mhs->prodi =='teknik komputer') ? 'selected':'' }}>teknik komputer</option>
                    <option value="sains data" {{ ($mhs->prodi =='sains data') ? 'selected':'' }}>sains data</option>
                    
                </select>
              </div>

              <label>Minat</label>
              <div class="form-check">
                <input type="checkbox" name="minat[]" value="AI" class="form-check-input" {{ in_array('AI', $minat) ? 'checked':'' }}>
                <label>Artificial Intelegent</label>
              </div>
              <div class="form-check">
                <input type="checkbox" name="minat[]" value="DBMS" class="form-check-input" {{ in_array('DBMS', $minat) ? 'checked':'' }}>
                <label>Data Engineering</label>
              </div>
              <div class="form-check">
                <input type="checkbox" name="minat[]" value="WEB" class="form-check-input" {{ in_array('WEB', $minat) ? 'checked':'' }}>
                <label>Web Engineering</label>
              </div>


            <button type="submit" class="btn btn-primary mt-4">Submit</button>
          </form>
    </div>
</div>
@endsection