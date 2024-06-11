@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-4 align-items-center">
        <div class="col-md-6">
            <div class="content-text">
                Wellness & Shine adalah destinasi utama untuk produk kecantikan dan kosmetik yang menjanjikan kilau dan kesehatan bagi pelanggan. Berbasis di Surabaya, perusahaan ini menawarkan berbagai pilihan produk dari merek-merek terkemuka yang telah teruji kualitasnya. Dari perawatan kulit hingga riasan, Wellness & Shine menawarkan solusi lengkap untuk memenuhi kebutuhan kecantikan setiap individu. Dengan website yang user-friendly, pelanggan dapat dengan mudah menelusuri dan membeli produk favorit mereka, sambil mendapatkan tips kecantikan yang berguna. Keunggulan perusahaan ini tidak hanya terletak pada produk yang mereka tawarkan, tetapi juga pada komitmen mereka untuk mempromosikan kecantikan yang sehat dan berkelanjutan.
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/images/logo3.png') }}" style="width:60%" alt="">
        </div>
    </div>

    <div class="d-flex justify-content-lg-between mt-5">
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-users fa-2x"></i>
            <p class="m-0 fs-5">+ 300 Pelanggan</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fas fa-home fa-2x"> </i>
            <p class="m-0 fs-5"> +500 Seller</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fas fa-shirt fa-2x"></i>
            <p class="m-0 fs-5">+ 300 Product</p>
        </div>
    </div>

    <h4 class="text-center mt-md-5 mb-md-2">Contact Us</h4>
    <hr class="mb-5">
    <div class="row  mb-md-5">
        <div class="col-md-5">
            <div class="bg-secondary" style="width: 100%; height:50vh; border-radius:10px; position: relative;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d672.6415166294119!2d112.75731546232346!3d-7.254490235903929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f97730632983%3A0x8476ba2d3b02744d!2sJl.%20Karang%20Gayam%20Gg.%20III%20No.9-B%2C%20RT.003%2FRW.09%2C%20Tambaksari%2C%20Kec.%20Tambaksari%2C%20Surabaya%2C%20Jawa%20Timur%2060136!5e0!3m2!1sid!2sid!4v1717345960219!5m2!1sid!2sid" style="width: 100%; height: 100%; border:0; border-radius: 10px; position: absolute; top: 0; left: 0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center text-white">
                    <h2><i class="fas fa-comments"></i> Beri Kritik dan Saran</h2>
                </div>

                <div class="card-body">
                    <p class="p-0 mb-5 text-lg-center">Masukan kritik dan saran anda kepada aplikasi kami ini agar kami dapat memberikan
                        apa yang menjadi kebutuhan anda dan kami dapat berkembang lebih baik lagi.
                    </p>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" value=""
                                placeholder="Masukan email Anda">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pesan" placeholder="Masukan Pesan Anda">
                        </div>
                    </div>
                    <button class="btn btn-primary mt-4 w-100"> Kirim pesan anda</button>
                </div>
            </div>
        </div>
    </div>
@endsection
