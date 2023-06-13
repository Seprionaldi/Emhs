@extends('layouts.main')
@section('tittle','Mahasiswa')
@section('content')
    <div class="card mt-4">
        <div class ="card-header">
          <a href="/mahasiswa/formtambah" class="btn btn-primary" role="button"><i class="bi bi-person-fill-add"></i></a>
          <form action="/mahasiswa/pencarian" method="GET" class="form-inline my-2 my-lg-0 float-right">
            <input name="q"  class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
        <div class ="card-body">
            @if (session('flash'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>{{ session('flash') }}</strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              @endif

            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIM</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">GENDER</th>
                    <th scope="col">PRODI</th>
                    <th scope="col">MINAT</th>
                    <th scope="col">AKSI</th>
                </tr>
                </thead>
                <tbody>



                  
                    @foreach ($mhs as $idx => $data)
                    <tr>
                        <th scope="row">{{ $mhs->firstItem() + $idx }}</th>
                        <th>{{ $data->nim }}</th>
                        <th>{{ $data->nama }}</th>
                        <th>{{ $data->gender }}</th>
                        <th>{{ $data->prodi }}</th>
                        <th>{{ $data->minat }}</th>
                        <td>
                          <a href="/mahasiswa/formedit/{{ $data->nim }}" class="btn btn-success" role="button"><i class="bi bi-pencil-square"></i></a>
                        </td>
                        <td>
                          <a href="/mahasiswa/delete/{{ $data->nim }}" class="btn btn-danger" role="button"><i class="bi bi-trash-fill"></i></a>
                        </td>
                      </tr> 
                    @endforeach
                  
                </tbody>
              </table>
              <span>{{ $mhs-> count() }}</span>
              <span class= "float-right">{{ $mhs->links() }}</span>
        </div>
    </div>
@endsection