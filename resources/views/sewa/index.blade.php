@extends('layouts.boot')

@section('content')
<div class="container">
   <table class="table" style="margin-top: 100px;margin-bottom: 100px;">
   <tr>
      <td>
        <div class="intro-text">
          <h2>Mobil Yang Ditawarkan</h2>
        </div>
      </td>
    @if($userstatus == 'admin' || $userstatus == 'penyewa')
      <td>    
        <div class="container">
            <a class="btn btn-primary" href="{{url('garage')}}">Tambah Mobil</a>
        </div>
      </td>
    </tr>
    </table>
    @endif
       <table class="table" style="margin-top: 100px;margin-bottom: 100px;">
        <?php $j=1; ?>
        
        <tr>
        @foreach($data_sewa as $row) 
          <td>
            <div class="col-md-12">
            
                  <div class="card h-100 nav-item" href="{{url('sewa/$row->id')}}">
                  <a href={{url("sewa/$row->id")}}><img class="card-img-top" src="{{$row->urlimage}}" alt="" width="300" height="300"></a>
                    <div class="card-body">
                      <h4 class="card-title"><a href={{url("sewa/$row->id")}}>{{$row->nama_kendaraan}}</a></h4>
                       <h6 class="card-title">{{$row->kapasitas}} orang</h6>
                        <h6 class="card-title">Rp. {{$row->harga}}</h6>
                    </div>
                  </div>
            </div>
          </td>
          <?php if($j++ == 3) break; ?> 
        @endforeach
        </tr>
        
       
      </table>

</div>
@endsection
