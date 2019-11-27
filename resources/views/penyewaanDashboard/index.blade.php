@extends('layouts.boot')

@section('content')
  <div class="container">
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
        Data Berhasil Ditambah!
    </div>
    @endif
    <div class="row">
    
    </div>
  </div>

<div><br><br></div>

  <div class="container" style="border-radius: 25px;background-color: rgba(163, 173, 160, 0.3);padding: 20px">
    <div class="col-8">
      <h1>Upload Data Mobil</h1>
      </div>
        <form action="garage/create" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
 
          <div class="form-group">
            <label for="examplenama">Nama</label>
            <input name="nama" type="text" class="form-control" id="examplenama" placeholder="Nama"  >    
          </div>
          <div class="form-group">
            <label for="examplenama">Kapasitas</label>
            <input name="kapasitas" type="text" class="form-control" id="examplenama" placeholder="kapasitas"  >    
          </div>
          <div class="form-group">
            <label for="examplenama">Harga</label>
            <input name="harga" type="text" class="form-control" id="examplenama" placeholder="harga"  >    
          </div>
          <div class="form-group">
            <label for="examplenama">Detail</label>
            <input name="detail" type="text" class="form-control" id="examplenama" placeholder="verifikasi"  >    
          </div>
          <div class="form-group">
            <b>File Gambar</b><br/>
            <input type="file" name="file" class="form-control">
          </div>
 
          <input type="submit" value="Upload" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>

  
  @endsection