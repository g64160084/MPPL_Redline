@extends('layouts.boot')

@section('content')

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Services</h2>
          <h3 class="section-subheading text-muted">Jaminan Layanan Services Layanan Kami.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-car fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Kendaraan Prima</h4>
          <p class="text-muted">Kami Menjamin Kendaraan Yang Disewakan Hanya Kendaraan Dengan Kondisi Terbaik Siap Menghadapi Berbagai Kondisi Di Jalan.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-money-bill-wave-alt fa-stack-1x fa-inverse"></i>
          </span>

          <h4 class="service-heading">Harga Yang Bersahabat</h4>
          <p class="text-muted">Kami Memberikan Penawaran Dengan Harga Terbaik Sesuai Dengan Kebutuhan Anda.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Keamanan Terjamin</h4>
          <p class="text-muted">Penyewa dipilih melalui prosedur yang terjamin.</p>
        </div>
      </div>
    </div>
  </section>
@endsection