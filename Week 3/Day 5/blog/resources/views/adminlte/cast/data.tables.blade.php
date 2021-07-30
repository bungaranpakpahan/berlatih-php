@extends('adminlte.index')
@section('konten')
 
<div class="panel panel-info">
    <div class="panel-heading">
        <center>
        <h1>
        Data Cast
        </h1>
        </center>
    </div>
    <div class="panel-body">
        <a href="{{ URL('cast/create') }}" class="btn btn-raised btn-primary pull-right">Tambah</a>
        {{-- part alert --}}
        
            {{-- Kita cek, jika sessionnya ada maka tampilkan alertnya, jika tidak ada maka tidak ditampilkan alertnya --}}
        
        @if (Session::has('after_update'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-dismissible alert-{{ Session::get('after_update.alert') }}">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ Session::get('after_update.title') }}</strong>
                      <a href="javascript:void(0)" class="alert-link">{{ Session::get('after_update.text-1') }}</a> {{ Session::get('after_update.text-2') }}
                    </div>
                </div>
            </div>
        @endif
        {{-- end part alert --}}
        <table class="table table-bordered table-hover ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Bio</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php(
                    $no = 1 {{-- buat nomor urut --}}
                    )
                {{-- loop all cast --}}
                @foreach ($cast)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $cast->nama }}</td>
                        <td>{{ $cast->umur }}</td>
                        <td>{{ $cast->bio }}</td>
                        <td>
                            <center>
                                <a href="{{ URL('cast/show') }}/{{ $cast->id }}" class="btn btn-sm btn-raised btn-info">Edit</a>
                                <a href="{{ URL('cast/destroy') }}/{{ $cast->id }}" class="btn btn-sm btn-raised btn-danger">Hapus</a>
                            </center>
                        </td>
                    </tr>
                @endforeach
                {{-- // end loop --}}
            </tbody>
        </table>
    </div>
</div>
 
@stop

@push('scripts')
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush

@endsection('konten')