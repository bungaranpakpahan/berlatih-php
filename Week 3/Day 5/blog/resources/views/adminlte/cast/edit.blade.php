@extends('index')
@section('judul_halaman', 'Halaman Edit Cast')
@section('konten')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Cast {{$cast->id}} </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/cast" method="post">
                @csrf
          		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                <!-- @method('post') -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama',$cast->nama)}}"  placeholder="Masukkan Nama" required="required">
                  </div>
                  <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" class="form-control" id="umur" name="umur"  value="{{old('umur',$cast->umur)}}" placeholder="Masukkan Umur" required="required">
                  </div>
                  <div class="form-group">
                    <label for="bio">Bio</label>
                    <input type="text" class="form-control" id="bio" name="bio" value="{{old('bio',$cast->bio)}}" placeholder="Masukkan Bio" required="required">
                  </div>
                </div> 
               
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection

<!-- @push('scripts')
 <script>
    var wrapper =document.getElementsByClassName("wrappers");
    var items =["ini,contoh"];
    console.log("ini items : " , items)
 </script>
@endpush -->