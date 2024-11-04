<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .btn {
            background-color: rgb(75, 115, 5);
            border-color: rgb(75, 115, 5);
            border-radius: 5%;
        }

        .btn:hover {
            background-color: rgb(119, 164, 40);
            border-color: rgb(119, 164, 40);
            border-radius: 5%;
        }
    </style>

</head>

<body style="background-color: #343d3c">
    <section class="vh-100" style="background-color: #343d3c;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-6">
                    <form action="<?php echo e(route('loginSubmit')); ?>" method="POST" class="form-floating">
                        <?php echo csrf_field(); ?>
                        <div class="my-5">
                            <div class="card mb-3 mx-3 shadow-lg p-3 mb-5 bg-body-danger rounded"
                                style="max-width: 540px;">
                                <img src="<?php echo e(asset('permission.png')); ?>" width="30%" class="mx-auto d-block"
                                    alt="">
                                <div class="fs-4 text-center my-1 fw-bold">Login Admin</div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            aria-describedby="email" placeholder="Masukkan Email" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Kata Sandi</label>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Buatlah kata sandi" name="password" required>
                                    </div>
                                    <?php if(session('gagal')): ?>
                                        <p class="text-danger"><?php echo e(session('gagal')); ?></p>
                                    <?php endif; ?>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button class="btn btn-primary" type="submit">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\laragon\www\portofolio_devina\resources\views\login.blade.php ENDPATH**/ ?>