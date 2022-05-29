@extends('app')
@section('content')
{{-- <div class="card">
  <div class="card-header">
    <strong> Tambah Data Website </strong>
  </div>
  <div class="card-body card-block">
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="row form-group">
            <div class="col col-md-3"><label for="select" class=" form-control-label">Kategori</label></div>
            <div class="col-12 col-md-9">
              <select name="select" id="select" class="form-control">
                <option value="0">Pilih Kategori</option>
                <option value="1">FMS</option>
                <option value="2">URL</option>
              </select>
            </div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Endpoint</label></div>
            <div class="col-12 col-md-9"><input type="file" id="file-input" name="file-input" class="form-control-file"></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bearer Token</label></div>
            <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control"></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Waktu Fetch API</label></div>
            <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control"></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Judul</label></div>
            <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control"></div>
          </div>
          
            <button type="submit" class="btn btn-primary btn-sm">
              <i class="fa fa-dot-circle-o"></i> Simpan
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
              <i class="fa fa-ban"></i> Batal
            </button>
        
</div><!-- .animated -->
<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">No.</th>
<th scope="col">Nama</th>
<th scope="col">Telepon</th>
<th scope="col">Alamat</th>
<th scope="col">Aksi</th>
</tr>
</thead>
<tbody>
@foreach($data)
<tr>
  <th scope="row"></th>
  <td>{{ $data->nama }}</td>
  <td>{{ $data->telp }}</td>
  <td>{{ $data->alamat }}</td>
  <td>{{ $data->email }}</td>
</tr>
@endforeach --}}
</tbody>
</table>
@endsection