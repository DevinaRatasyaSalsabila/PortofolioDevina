<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Halaman Admin
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <form action="{{ route('admin') }}">
                <a class="navbar-brand m-0" style="border: none" target="_blank">
                    <h4 class="ms-1 font-weight-bold text-center">Admin Portofolio</h4>
                </a>
            </form>
        </div>

        <hr class="horizontal dark mt-0">

        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link  active" href="#example">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>office</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF"
                                        fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g id="office" transform="translate(153.000000, 2.000000)">
                                                <path class="color-background opacity-6"
                                                    d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z">
                                                </path>
                                                <path class="color-background"
                                                    d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Projek</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="sidenav-footer mx-3 ">
            <div class="card card-background shadow-none " id="sidenavCard">
                <img src="https://i.pinimg.com/564x/0b/67/b8/0b67b84b3cf6d58ce8ac86aa8aabad8c.jpg" width="60%"
                    alt="">
            </div>
            <a class="btn btn-primary mt-3 w-100">{{ Auth::user()->name }} <br>
                <span class="text-center fs-9 fw-semibold">Admin</span>
            </a>
        </div>
    </aside>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                href="javascript:;">Halaman</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Projek</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Projek</h6>
                </nav>

                <div class="collapse navbar-collapse justify-content-end mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <ul class="navbar-nav">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <li class="nav-item d-flex ">
                                <button class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank">Logout</button>
                            </li>
                        </form>
                        <li class="nav-item px-3 d-flex ">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

        <div class="row m-3">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body pt-0">
                        <div class="card " style="border-color: #918585">
                            <div class="p-3 fs-4" style="background-color:rgb(255, 253, 253);">
                                Daftar Projek
                                <!-- Button tambah modal -->
                                <button type="button" class="btn btn-success btn-sm float-end"
                                    data-bs-toggle="modal" data-bs-target="#modalTambah">
                                    <i class="bi bi-plus-lg"></i>
                                    Tambah
                                </button>
                            </div>
                            <section>
                                <div class="container-fluid">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-bordered" style="width: 100%">
                                            <thead>
                                                <tr class="text-center">
                                                    <th class="text-dark text-center">No</th>
                                                    <th class="text-dark text-center">Nama Projek</th>
                                                    <th class="text-dark text-center">Deskripsi</th>
                                                    <th class="text-dark text-center">Tanggal</th>
                                                    <th class="text-dark text-center">Teknologi</th>
                                                    <th class="text-dark text-center">Foto Projek</th>
                                                    <th class="text-dark text-center">Link Projek</th>
                                                    <th class="text-dark text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($portofolio as $item)
                                                    @csrf
                                                    <tr>
                                                        <td class="text-dark text-center">
                                                            {{ $loop->iteration }}
                                                        </td>
                                                        <td class="text-dark"
                                                            style="white-space: normal;
                                                        word-break: break-word;
                                                        min-width: 150px;
                                                        max-width: 600px">
                                                            {{ $item->judul }}
                                                        </td>
                                                        <td class="text-dark"
                                                            style="white-space: normal;
                                                        word-break: break-word;
                                                        min-width: 300px;
                                                        max-width: 600px">
                                                            {{ Str::limit($item->deskripsi), 100 }} <br>
                                                        </td>
                                                        <td class="text-dark text-center"
                                                            style="white-space: normal;
                                                            word-break: break-word; min-width: 150px; max-width:
                                                            600px">
                                                            {{ $item->tanggal }}
                                                        </td>
                                                        <td class="text-dark">
                                                            {{ $item->label }}</td>
                                                        <td>
                                                            <img src="{{ asset('storage/' . $item->gambar1) }}"
                                                                alt="Gambar 1"
                                                                style="max-width: 100px; max-height: 100px;">
                                                        </td>
                                                        <td
                                                            style="white-space: normal;
                                                        word-break: break-word;
                                                        min-width: 200px;
                                                        max-width: 600px">
                                                            <a class="link-primary"
                                                                href="{{ $item->link }}">{{ $item->link }}
                                                            </a>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group" role="group">
                                                                <form>
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-sm m-1"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modalUbah{{ $item->id }}">
                                                                        Ubah
                                                                    </button>
                                                                </form>
                                                                <form action="{{ route('hapus', $item->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-danger btn-sm m-1">
                                                                        Hapus
                                                                    </button>
                                                                </form>
                                                                <form action="{{ url('detailHalaman', $item->id) }}"
                                                                    method="get">
                                                                    <a href="{{ url('detailHalaman', $item->id) }}" class="btn btn-primary btn-sm m-1">
                                                                        Detail
                                                                    </a>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg ">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Admin Portolio</h5>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Warna Sidebar</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>

                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Tipe Sidenav</h6>
                    <p class="text-sm">Pilih tipe</p>
                </div>
                <div class="d-flex">
                    <button class="btn btn-primary w-100 px-3 mb-2 active" data-class="bg-transparent"
                        onclick="sidebarType(this)">Transparan</button>
                    <button class="btn btn-primary w-100 px-3 mb-2 ms-2" data-class="bg-white"
                        onclick="sidebarType(this)">Putih</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">Kamu dapat menentukan tipr sidenav di tampilan desktop</p>

                <!-- Navbar Fixed -->
                <div class="mt-3">
                    <h6 class="mb-0">Navbar Fixed</h6>
                </div>
                <div class="form-check form-switch ps-0">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                        onclick="navbarFixed(this)">
                </div>
                <hr class="horizontal dark my-sm-4">
            </div>
        </div>
    </div>
    </div>


    <!-- modal -->
    {{-- modal tambah portofolio --}}
    <form action="{{ route('tambah') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Portofolio
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="judul" class="col-form-label">Nama Projek</label>
                            <input type="text" class="form-control" id="judul" name="judul" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="col-form-label">Deskripsi</label>
                            <textarea id="deskripsi" class="form-control" rows="4" name="deskripsi" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="col-form-label">Tanggal</label>
                            <input type="date" id="tanggal" class="form-control" rows="4" name="tanggal"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="label" class="col-form-label">Teknologi</label>
                            <input type="text" id="label" class="form-control" rows="4" name="label"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="link" class="col-form-label">Link Projek</label>
                            <input type="url" class="form-control" id="link" name="link" required>
                        </div>
                        <div class="mb-3">
                            <label for="gambar1" class="col-form-label">Foto Projek (Ukuran
                                1100 x 400)</label>
                            <input type="file" class="form-control" id="gambar1" name="gambar1" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    {{-- modal ubah portofolio --}}
    @foreach ($portofolio as $item)
        <form action="/ubah/{{ $item->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="modalUbah{{ $item->id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah
                                Portofolio</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="judul" class="col-form-label">Nama
                                    Projek</label>
                                <input type="text" class="form-control" id="judul"
                                    value="{{ $item->judul }}" name="judul" required>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="col-form-label">Deskripsi</label>
                                <textarea id="deskripsi" class="form-control" rows="5" name="deskripsi" required>{{ $item->deskripsi }} </textarea>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="col-form-label">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal"
                                    value="{{ $item->tanggal }}" name="tanggal" required>
                            </div>
                            <div class="mb-3">
                                <label for="label" class="col-form-label">Teknologi</label>
                                <input type="text" class="form-control" id="label"
                                    value="{{ $item->label }}" name="label" required>
                            </div>
                            <div class="mb-3">
                                <label for="link" class="col-form-label">Link
                                    Projek</label>
                                <input type="url" class="form-control" id="link"
                                    value="{{ $item->link }}" name="link" required>
                            </div>
                            <div class="mb-3">
                                <label for="gambar1" class="col-form-label">Foto Projek
                                    (Ukuran 1100x400)
                                </label>
                                <img src="{{ asset('storage/' . $item->gambar1) }}" class="my-1" alt="Gambar 1"
                                    style="max-width: 100px; max-height: 100px;">
                                <input type="file" class="form-control" id="gambar1" name="gambar1">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">Batalkan</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endforeach

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        new DataTable('#example');
    </script>

    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.1.0"></script>
</body>

</html>
