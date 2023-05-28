@extends('layouts.app')
@section('konten')
    <div class="row">
        <div class="col wande-section">
            <div class="wande-section-header">
                <h1>FITUR UNGGULAN</h1>
                <p class="wande-desc">Nikmati dan manfaatkan fitur-fitur unggulan kami</p>
            </div>
            <div class="wande-section-body" id="wdfeatures">
                {{-- @for ($x=0 ; $x < 5 ; $x++)
                    <div class="card wande-card" style="width: 12rem;">
                        <img src="{{ asset('assets/images/calculator.png') }}" class="card-img-top" alt="fitur-x">
                        <div class="card-body">
                        <p class="card-text text-center my-2 fw-bold">Fitur-x</p>
                        </div>
                    </div>
                  @endfor 
                  --}}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col wande-section">
            <div class="wande-section-header">
                <h1>Kategori Kedai</h1>
            </div>
            <div class="wande-section-body" id="wdoutlets">
                {{-- @for ($x=0 ; $x < 4 ; $x++)
                    <div class="card wande-card-outlet" style="width: 12rem;">
                        <img src="{{ asset('assets/images/kios-kelontong.png') }}" class="card-img-top" alt="fitur-x">
                        <div class="card-body">
                        <p class="card-text text-center my-2 fw-bold">Kedai-x</p>
                        </div>
                    </div>
                  @endfor --}}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col wande-section">
            <div class="wande-section-header">
                <h1>Peta Lokasi</h1>
            </div>
            <div class="wande-section-body d-flex justify-content-center">
                <iframe id="wdmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.641414387127!2d109.69827447429326!3d-7.39401649261581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa919b46770e5%3A0x37af45450b194429!2sPasar%20Kota%20Banjarnegara!5e0!3m2!1sen!2sid!4v1685057615936!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        
    </div>

    <div class="row">
        <div class="col wande-section">
            <div class="d-flex justify-content-center">
                <div class="wande-brand align-items-center">
                    <p class="display-6">
                        Segera daftarkan warung Anda!
                    </p>
                </div>
                <div class="wande-brand align-items-center">
                    <img src="{{ asset('assets/images/registration.png') }}" alt="registration">
                    <a href="#" id="wdweb" class="btn btn-dark wande-btn">https://wande.co.id</a>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="wande-brand align-items-center">
                    <img src="{{ asset('assets/images/download-app.png') }}" alt="download">
                </div>
                <div class="wande-brand align-items-center">
                    <p class="display-6">
                        Unduh aplikasi WanDe sekarang!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 mx-auto wande-section">
            <div class="wande-section-header">
                <h1>Tentang Wande</h1>
            </div>
            <div class="wande-section-body wande-about" id="wdabout">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam, quam illum maxime qui quos non et explicabo nesciunt, suscipit a neque cupiditate at voluptates placeat aliquid dolor. Nobis, repudiandae voluptatem.
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col wande-section">
            <div class="wande-section-header">
                <h1>Peluang Karir</h1>
            </div>
            <div class="wande-section-body mb-3">
                Bergabung bersama kami. Merintis dan mengembangkan karir di wande.co.id. Tunjukkan kamu punya gagasan mencerdaskan dan mencerahkan orang-orang di sekitarmu! 
            </div>
            <div class="wande-section-body">
                <div class="row" id="wdcareers">                        
                    <div class="card mb-3 col-lg-6 col-md-6">
                        <div class="row g-0 mb-5">
                            <div class="col-md-4">
                                <img src="https://cdn.pixabay.com/photo/2017/07/24/05/38/customer-2533659_1280.png" class="img-fluid rounded-start" alt="customer service">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Customer Service</h5>
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, saepe.</p>
                              <a href="#" class="btn btn-success btn-sm btn-wande">Apply!</a>
                            </div>
                          </div> 
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection

@section('skripsi')    
    <script src="{{ asset('/assets/js/wande.js') }}"></script>
@endsection