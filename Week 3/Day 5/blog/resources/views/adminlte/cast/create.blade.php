@extends('index')
@section('judul_halaman', 'Halaman Tambah Cast')
@section('konten')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Cast</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/cast" method="post">
          		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama','')}}"  placeholder="Masukkan Nama" required="required">
                  </div>
                  <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" class="form-control" id="umur" name="umur"  placeholder="Masukkan Umur" required="required">
                  </div>
                  <div class="form-group">
                    <label for="bio">Bio</label>
                    <input type="text" class="form-control" id="bio" name="bio" placeholder="Masukkan Bio" required="required">
                  </div>
                </div> 
                               
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection


