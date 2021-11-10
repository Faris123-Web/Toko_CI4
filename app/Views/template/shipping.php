<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">

  <title>Toko Online</title>
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/img/logo.png') ?>" />



  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/fontawesome/css/all.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/adminlte.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/bootstrap-4.min.css') ?>" rel="stylesheet">


  <style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  .fa-shopping-cart {
    color: #343A40;
  }
</style>


</head>
<body>


  <?= $this->renderSection('content'); ?>


  <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/fontawesome/js/all.min.js') ?>"></script>
  <script src="<?= base_url('assets/jquery-3.6.0.min.js') ?>"></script>
  <script src="<?= base_url('assets/adminlte.min.js') ?>"></script>
  <script src="<?= base_url('assets/sweetalert2.min.js') ?>"></script>
  <?= $this->renderSection('script'); ?>

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
