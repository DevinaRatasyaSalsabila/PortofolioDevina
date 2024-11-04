    <!DOCTYPE html>
    <html class="no-js" lang="en">


    <!-- Mirrored from davis-html.netlify.app/blog-details by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2024 04:57:01 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Laralink">
        <!-- Page Title -->
        <title>Detail Portofolio</title>
        <!-- Favicon Icon -->
        <link rel="icon" href="assets/img/favicon.png" />
        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ asset('detail/assets/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('detail/assets/css/fontawesome.css') }}" />
        <link rel="stylesheet" href="{{ asset('detail/assets/css/slick.css') }}" />
        <link rel="stylesheet" href="{{ asset('detail/assets/css/lightgallery.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('detail/assets/css/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('detail/assets/css/style.css') }}" />
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('landing-page/css/main.css') }}"> --}}

        {{-- link bootstrap --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

        <style>
            @import url("https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap");

            h2 {
                color: rgb(154, 164, 224);
            }
        </style>
    </head>

    <body id="home" style="font-family: 'Syne', sans-serif;">
        <!-- Start Header Section -->
        <header class="st-site-header st-style1 st-sticky-header">
            <div class="st-main-header">
                <div class="container">
                    <div class="st-main-header-in">
                        {{-- <div class="st-main-header-left st-site-branding"> --}}
                        {{-- <a href="{{ url('') }}" class="st-btn st-style2 st-color1">Kembali</a> --}}
                        {{-- </div> --}}
                        <div class="st-main-header-left">
                            <a class='st-site-branding'>
                                <a href="{{ url('') }}">
                                    <h3  style="color:rgb(130, 141, 209)"">
                                        <i class="bi bi-arrow-bar-left"></i>     Kembali
                                    </h3>
                                </a>
                            </a>
                        </div>
                        <div class="st-main-header-right">
                            <div class="st-nav">
                                <ul class="st-nav-list st-onepage-nav">
                                    <li><a href='#beranda'>Beranda</a></li>
                                    <li><a href='#portofolio'>Portfolio</a></li>
                                </ul>
                                <div class="sp-phone">
                                    <svg viewBox="0 0 513.64 513.64">
                                        <g>
                                            <g>
                                                <path
                                                    d="M499.66,376.96l-71.68-71.68c-25.6-25.6-69.12-15.359-79.36,17.92c-7.68,23.041-33.28,35.841-56.32,30.72c-51.2-12.8-120.32-79.36-133.12-133.12c-7.68-23.041,7.68-48.641,30.72-56.32c33.28-10.24,43.52-53.76,17.92-79.36l-71.68-71.68c-20.48-17.92-51.2-17.92-69.12,0l-48.64,48.64c-48.64,51.2,5.12,186.88,125.44,307.2c120.32,120.32,256,176.641,307.2,125.44l48.64-48.64C517.581,425.6,517.581,394.88,499.66,376.96z" />
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="sp-phone-no" style="color:rgb(130, 141, 209)">+62 838 7199 2561</div>
                                    <g>
                                        <g>
                                            <path
                                                d="M499.66,376.96l-71.68-71.68c-25.6-25.6-69.12-15.359-79.36,17.92c-7.68,23.041-33.28,35.841-56.32,30.72c-51.2-12.8-120.32-79.36-133.12-133.12c-7.68-23.041,7.68-48.641,30.72-56.32c33.28-10.24,43.52-53.76,17.92-79.36l-71.68-71.68c-20.48-17.92-51.2-17.92-69.12,0l-48.64,48.64c-48.64,51.2,5.12,186.88,125.44,307.2c120.32,120.32,256,176.641,307.2,125.44l48.64-48.64C517.581,425.6,517.581,394.88,499.66,376.96z" />
                                        </g>
                                    </g>
                                    </svg>
                                </div>
                                <span class="st-munu-toggle st-toggle-active"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Section -->
        @if ($portofolio)
            <div class="st-content">
                <div class="st-page-heading st-dynamic-bg"
                    style="background-image: url('https://img.freepik.com/free-vector/gradient-geometric-design-dark-background_23-2148425667.jpg')">
                    <div class="container">
                        <div class="st-page-heading-in text-center">
                            <h1 class="st-page-heading-title" style="color:rgb(130, 141, 209)">
                                Detail
                                {{ $portofolio->judul }}
                            </h1>
                            <div class="st-post-label">
                                <span>By <a href="#">Devina Ratasya Salsabila</a></span>
                                <span>{{ $portofolio->tanggal }}</span>
                            </div>
                        </div>
                    </div>
                </div><!-- .st-page-heading -->
                <div class="st-height-b100 st-height-lg-b80"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-md-1">
                            <div class="st-post-details st-style1" id="beranda">
                                <h2>{{ $portofolio->judul }}</h2>
                                <p>{{ $portofolio->deskripsi }}</p>
                                <img class="st-zoom-in" src="{{ asset('storage/' . $portofolio->gambar1) }}"
                                    alt="blog1">
                                <h2>Teknologi Yang Diguankan</h2>
                                <div class="st-post-info">
                                    <div class="st-post-text">
                                        <p>
                                            {{ $portofolio->judul }} dibangun dengan {{ $portofolio->label }}.Kami
                                            memilih
                                            teknologi ini agar{{ $portofolio->judul }} tampil responsif, modern, dan
                                            interaktif, serta mudah diakses di berbagai perangkat. Desain yang
                                            dihasilkan
                                            juga bersih dan rapi, dengan kemudahan pengelolaan konten jika diperlukan
                                            pembaruan di masa mendatang.
                                        </p>
                                        <h2>Jelajahi Demo Landing Page Kami</h2>
                                        <p>
                                            Klik tombol di bawah ini untuk melihat demo {{ $portofolio->judul }} kami!
                                            Dalam demo ini,
                                            Anda akan menjelajahi berbagai fitur menarik yang kami tawarkan, mulai dari
                                            tampilan responsif hingga desain yang elegan. Setiap elemen dirancang dengan
                                            cermat untuk memberikan pengalaman pengguna yang menyenangkan, menampilkan
                                            informasi dengan cara yang menarik dan informatif. Anda juga akan menemukan
                                            interaksi dinamis, seperti efek animasi dan demo interaktif, yang membuat
                                            pengunjung semakin terlibat. Kami berharap Anda menikmati pengalaman
                                            menjelajahi
                                            halaman ini!
                                        </p>
                                        <blockquote id="portofolio">
                                            <p style="color:rgb(130, 141, 209)">Jelajahi fitur utama dan antarmuka
                                                langsung dari produk kami dengan
                                                mengklik tombol</p>
                                            <a href="{{ $portofolio->link }}"
                                                class="st-btn st-style2 st-color1 st-size-medium">Lihat Demo</a>
                                        </blockquote>

                                        <h2 class="comments-title">Lihat Portofolio Lain</h2>
                                        <div class="row">
                                            @foreach ($rekomendasi as $item)
                                                <div class="col-12 col-md-4">
                                                    <div class="card card  mb-3 px-3"
                                                        style="border-color:rgb(49, 50, 52)">
                                                        <img src="{{ asset('storage/' . $item->gambar1) }}"
                                                            class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <h3 class="card-title">{{ $item->judul }}</h3>
                                                            <p class="card-text">
                                                                {{ $item->label }}
                                                            </p>
                                                            <a href="{{ url('detailHalaman', $item->id) }}"
                                                                style="color:rgb(130, 141, 209) ">Selengkapnya</a>
                                                        </div>
                                                    </div><!-- .comment-list -->
                                                </div>
                                            @endforeach
                                        </div>


                                        <div class="st-height-b35 st-height-lg-b35"></div>
                                        <div class="st-post-meta text-center">
                                            <div class="st-post-tages">
                                                <div>
                                                    <h5>Lokasi</h5>
                                                    <p>Blitar, JawaTimur</p>
                                                </div>
                                            </div>
                                            <div>
                                                <h5>Telepon</h5>
                                                <p>+62 838 7199 2561</p>
                                            </div>
                                            <div class="st-post-share">
                                                <div>
                                                    <h5>Email</h5>
                                                    <p>devinaratasya2812@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="st-height-b60 st-height-lg-b60"></div>
                                    </div>
                                </div>
                                <div class="st-height-b60 st-height-lg-b60"></div>
                            </div>
                        </div>
                    </div>
                    <div class="st-height-b100 st-height-lg-b80"></div>
                </div>

                <!-- Start Footer Seciton -->
                <footer>
                    <div class="container">
                        <div class="st-copyright-wrap text-center">
                            <div class="st-copyright-text">© 2024. All right reserved.</div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- End Footer Seciton -->
        @endif
        <!-- Scripts -->
        <script src="{{ asset('detail/}assets/js/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('detail/assets/js/jquery.slick.min.js') }}"></script>
        <script src="{{ asset('detail/assets/js/lightgallery.min.js') }}"></script>
        <script src="{{ asset('detail/assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('detail/assets/js/ripples.min.js') }}"></script>
        <script src="{{ asset('detail/assets/js/particles.min.js') }}"></script>
        <script src="{{ asset('detail/assets/js/main.js') }}"></script>
    </body>


    <!-- Mirrored from davis-html.netlify.app/blog-details by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2024 04:57:04 GMT -->

    </html>
