<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Toko Online</title>



  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/fontawesome/css/all.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/adminlte.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/bootstrap-4.min.css') ?>" rel="stylesheet">


</head>
<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('Home') ?>">Toko Pak Rohmat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="<?= base_url('Home') ?>">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user"></i>Account</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown04">
                <li><a class="dropdown-item" href="#">Login</a></li>
                <li><a class="dropdown-item" href="#">Register</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('Home/cart') ?>"><i class="fas fa-shopping-cart"></i></a>
            </li>
          </ul>
          <form>
            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
          </form>
        </div>
      </div>
    </nav>

  </header>

  <main>

    <div class="card card-solid">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-sm-6">
            <h3 class="d-inline-block d-sm-none"><?= $detail['nama_barang']?></h3>
            <div class="col-12">
              <img src="<?= base_url('assets/img/')?>/<?= $detail['foto']?>" width="80%" height="100%" class="product-image" alt="Product Image">
            </div>
            <div class="col-12 product-image-thumbs">
              <!-- <div class="product-image-thumb" ><img src="../../dist/img/prod-2.jpg" alt="Product Image"></div>
              <div class="product-image-thumb" ><img src="../../dist/img/prod-3.jpg" alt="Product Image"></div>
              <div class="product-image-thumb" ><img src="../../dist/img/prod-4.jpg" alt="Product Image"></div>
              <div class="product-image-thumb" ><img src="../../dist/img/prod-5.jpg" alt="Product Image"></div> -->
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <h3 class="my-3"><b><?= $detail['nama_barang']?></b></h3>
            <hr>
            <h5 class="my-3">Deskripsi</h5>
            <p><?= $detail['keterangan']?></p>

            <hr>
  
            <div class="mt-4">
                <a class="btn btn-primary btn-lg btn-flat swalDefaultSuccess" href="<?= base_url('Home/cart') ?>">
                <i class="fas fa-cart-plus fa-lg mr-2"></i>
                Add to Cart
                </a>
            </div>

          </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <!-- <div class="card m-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="<?= base_url('assets/img/')?>/<?= $detail['foto']?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?= $detail['nama_barang']?></h5>
            <p class="card-text"><?= $detail['keterangan']?>.</p>
            <b><p class="card-text">Harga</p></b>
            <p class="card-text">Rp.<?= $detail['harga']?>.</p>
            <button class="btn btn-success"><i class="fas fa-shopping-cart"></i> Add</button>
          </div>
        </div>
      </div>
    </div> -->

  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#">Back to top</a>
      </p>
    </div>
  </footer>


  <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/fontawesome/js/all.min.js') ?>"></script>
  <script src="<?= base_url('assets/jquery-3.6.0.min.js') ?>"></script>
  <script src="<?= base_url('assets/adminlte.min.js') ?>"></script>
  <script src="<?= base_url('assets/sweetalert2.min.js') ?>"></script>

  <script ">
    $(function() {
     var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
     $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Berhasil Add Barang.'
      })
    });

   });
 </script>

</body>
</html>
