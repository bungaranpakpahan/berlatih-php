@extends('index')
@section('judul_halaman', 'Halaman Tampil Cast')
@section('konten')
<div class="card-body">
        <table class="table table-bordered">
            <h3 class="card-title">Data Cast</h3>
              </div>
              <div class="col-sm-6">
                <ol ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('create')}}">Create Cast</a></li>
              </ol>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Nama</th>
                      <th>Umur</th>
                      <th>Bio</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($cast as $key=>$cast)
                     <tr>
                      <td>{{ (int) $key + 1 }}
                      </td>
                      <td>{{ $cast->nama }} 
                      </td>
                      <td>{{ $cast->umur }}
                      </td>
                      <td>{{ $cast->bio }} 
                      </td>
                        <td>
                        <a class="btn btn-primary btn-sm" href="/cast/edit/{{ $cast->id }}/">Edit</a>
                       <a class="btn btn btn-danger btn-sm" href="/cast/delete/{{ $cast->id }}">Hapus</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

@endsection