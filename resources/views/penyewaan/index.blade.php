@extends('layouts.boot')

@section('content')
	<div class="container">
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
  			Data Berhasil Ditambah!
		</div>
		@endif
	<div class="row">


	<div class="container" style="margin-top:100px;margin-bottom:100px;border-radius: 25px;background-color: rgba(163, 173, 160, 0.3);padding: 20px">
		<div class="col-8">
			<h1>Daftar Menjadi Penyewa</h1>
			</div>
				<form action="/penyewaan/create" method="POST" enctype="multipart/form-data">
					{{method_field('POST')}}
					{{@csrf_field()}}
					<div class="form-group">
						<label for="examplenama">Nama</label>
						<input name="nama" type="text" class="form-control" id="examplenama" placeholder="Nama"  >		
					</div>
  				<div class="form-group">
              <label for="examplenama">Alamat</label>
              <input name="alamat" type="text" class="form-control" id="examplenama" placeholder="Loc"  >    
          </div>
          <div class="form-group">
            <label for="examplenama">Kontak</label>
            <input name="kontak" type="text" class="form-control" id="examplenama" placeholder="Kontak"  >    
          </div>
		   			<div >
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection