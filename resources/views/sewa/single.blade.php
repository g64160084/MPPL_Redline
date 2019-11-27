@extends('layouts.boot')

@section('content')
<div class="container">
      <div class="intro-text">
          <h2>Detail Mobil</h2>
      </div>
      <table class="table" style="margin-top: 100px;margin-bottom: 100px;">
        <tr>
        
          <td>
            <div class="col-md-12">
                  <div class="card h-100 nav-item" href="#">
                  <img class="card-img-top" src="{{url("$detail_sewa->urlimage")}}" alt="" width="300" height="300">
                    <div class="card-body">
                      <h4 class="card-title"><a href={{url("sewa/$detail_sewa->id")}}> {{$detail_sewa->nama_kendaraan}} </a></h4>
                      <h6 class="card-title">Nama Penyewa : {{$useracc->name}} </h6>
                      <h6 class="card-title">Kapasitas : {{$detail_sewa->kapasitas}} orang</h6>
                      <h6 class="card-title">Harga : Rp. {{$detail_sewa->harga}}</h6>
                      <h6 class="card-title">Detail : {{$detail_sewa->detail}}</h6>
                      <h6 class="card-title">No Telp : {{$notelp->kontak}}</h6>
                      <a class="btn btn-primary" href="https://wa.me/{{$notelp->kontak}}?text=Aku%20tertarik%20menyewa%20mobilmu">Sewa Mobil</a>
                    </div>
                  </div>
                </div>
          </td>
        </tr>

      </table>

</div>
 @endsection
 


