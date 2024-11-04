<!doctype html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Admin Portofolio</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/remixicon/remixicon.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="../assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="" class="app-brand-link">
                        <span class="app-brand-text demo menu-text fw-semibold ms-2 " style="color: #724bc6">Admin
                            Portofolio</span>
                    </a>
                </div>
                <ul>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="avatar avatar-online justify-content-center">
                                <img src="../assets/img/avatars/1.png" alt class="w-40 rounded-circle" />
                            </div>
                        </div>
                        <div class="col-md-10">
                            <h6 class="mb-0 small"><?php echo e(Auth::user()->name); ?></h6>
                            <small class="text-muted">Admin</small>
                        </div>
                    </div>
                    <!-- User -->
                </ul>
                <ul class="menu-inner  py-1">
                    <!-- Dashboards -->
                    <li class="menu-item " style="text-decoration: none">
                        <button href="" class="menu-link"
                            style="background-color: #724bc6;border-color:#a68fd8;color:#fff;">
                            <div data-i18n="Dashboards">Daftar Portofolio</div>
                        </button>
                    </li>
                    <li class="menu-item " style="text-decoration: none">
                        <form action="<?php echo e(route('logout')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button class="menu-link btn" type="submit"
                                style="background-color: #724bc6;border-color:#a68fd8;color:#fff;">
                                <div>Logout</div>
                            </button>
                        </form>
                    </li>
                </ul>

            </aside>
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container navbar navbar-expand navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link" href="javascript:void(0)">
                            <i class="ri-menu-fill ri-24px"></i>
                        </a>
                    </div>
                    <div class="navbar-nav-right d-flex align-items-center justify-content-start" id="navbar-collapse">
                        <p class="fs-5 fw-semibold mt-3" id="tanggal" style="color: #a484e8"></p>
                    </div>
                </nav>
                <!-- / Navbar -->


                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row gy-6">
                            <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="border-color: #ffff">
                                <div class="card-header px-3 fs-2" style="background-color:#ffff;">
                                    Portofolio
                                    <!-- Button tambah modal -->
                                    <button type="button" class="btn btn-success btn-sm float-end"
                                        data-bs-toggle="modal" data-bs-target="#modalTambah">
                                        <i class="bi bi-plus-lg"></i> Tambah
                                    </button>
                                </div>
                                <div class="container-fluid">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered ">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>No</th>
                                                    <th>Nama Projek</th>
                                                    <th>Deskripsi</th>
                                                    <th>Tanggal</th>
                                                    <th>Label</th>
                                                    <th>Foto Projek</th>
                                                    <th>Link Projek</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $portofolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <tr class="text-center">
                                                        <td><?php echo e($loop->iteration); ?></td>
                                                        <td><?php echo e($item->judul); ?></td>
                                                        <td><?php echo e($item->deskripsi); ?></td>
                                                        <td><?php echo e($item->tanggal); ?></td>
                                                        <td><?php echo e($item->label); ?></td>
                                                        <td>
                                                            <img src="<?php echo e(asset('storage/' . $item->gambar1)); ?>"
                                                                alt="Gambar 1"
                                                                style="max-width: 100px; max-height: 100px;">
                                                        </td>
                                                        <td><a href="<?php echo e($item->link); ?>"><?php echo e($item->link); ?></a>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group" role="group">
                                                                <form>
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-sm m-1"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modalUbah<?php echo e($item->id); ?>"><i
                                                                            class="bi bi-pencil-fill"></i></button>
                                                                </form>
                                                                <form action="<?php echo e(route('hapus', $item->id)); ?>"
                                                                    method="POST">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('DELETE'); ?>
                                                                    <button type="submit"
                                                                        class="btn btn-danger btn-sm m-1">
                                                                        <i class="bi bi-trash"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                            <form action="<?php echo e(route('tambah')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="modal fade" id="modalTambah" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                    <input type="text" class="form-control" id="judul"
                                                        name="judul" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="deskripsi" class="col-form-label">Deskripsi</label>
                                                    <textarea id="deskripsi" class="form-control" rows="4" name="deskripsi" required></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tanggal" class="col-form-label">Tanggal</label>
                                                    <input type="date" id="tanggal" class="form-control"
                                                        rows="4" name="tanggal" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="label" class="col-form-label">Label</label>
                                                    <input type="text" id="label" class="form-control"
                                                        rows="4" name="label" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="gambar1" class="col-form-label">Foto Projek (Ukuran
                                                        1400 x 500)</label>
                                                    <input type="file" class="form-control" id="gambar1"
                                                        name="gambar1" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="link" class="col-form-label">Link Projek</label>
                                                    <input type="url" class="form-control" id="link"
                                                        name="link" required>
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

                            
                            <?php $__currentLoopData = $portofolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <form action="/ubah/<?php echo e($item->id); ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="modal fade" id="modalUbah<?php echo e($item->id); ?>" tabindex="-1"
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
                                                            value="<?php echo e($item->judul); ?>" name="judul" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="deskripsi"
                                                            class="col-form-label">Deskripsi</label>
                                                        <textarea id="deskripsi" class="form-control" rows="4" name="deskripsi" required><?php echo e($item->deskripsi); ?> </textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tanggal" class="col-form-label">Tanggal</label>
                                                        <input type="date" class="form-control" id="tanggal"
                                                            value="<?php echo e($item->tanggal); ?>" name="tanggal" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="label" class="col-form-label">Label</label>
                                                        <input type="text" class="form-control" id="label"
                                                            value="<?php echo e($item->label); ?>" name="label" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="gambar1" class="col-form-label">Foto Projek
                                                            (Ukuran 1400x500)
                                                        </label>
                                                        <img src="<?php echo e(asset('storage/' . $item->gambar1)); ?>"
                                                            class="my-1" alt="Gambar 1"
                                                            style="max-width: 100px; max-height: 100px;">
                                                        <input type="file" class="form-control" id="gambar1"
                                                            name="gambar1">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="link" class="col-form-label">Link
                                                            Projek</label>
                                                        <input type="url" class="form-control" id="link"
                                                            value="<?php echo e($item->link); ?>" name="link" required>
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
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <!-- / Content -->
                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            <div
                                class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                                <div class="text-body mb-2 mb-md-0">
                                    ©2024
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        new DataTable('#example');
    </script>
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
        const today = new Date();
        const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu']
        const dayName = days[today.getDay()];
        const options = {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };
        const formattedDate = today.toLocaleDateString('id-ID', options)
        const fullDate = `${dayName}, ${formattedDate}`;
        document.getElementById('tanggal').textContent = fullDate;
    </script>
</body>

</html>
<?php /**PATH C:\laragon\www\portofolio_devina\resources\views\admin2.blade.php ENDPATH**/ ?>