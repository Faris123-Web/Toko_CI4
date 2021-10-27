<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>
<main>

  <div class="container mt-5">
    <div class="row flex-lg-row-reverse g-5 py-5">
      <div class="col-lg-6">
        <span class="mb-3">
          <i class="fas fa-star fa-2x" style="color:#FFC107;"></i>
          <i class="fas fa-star fa-2x" style="color:#FFC107;"></i>
          <i class="fas fa-star fa-2x" style="color:#FFC107;"></i>
          <i class="fas fa-star fa-2x" style="color:#FFC107;"></i>
          <i class="far fa-star fa-2x" style="color:#FFC107;"></i>
        </span>
        <h1 class="display-5 fw-bold lh-1 mt-2 mb-3" style="color:#17304E;"><?= $detail['nama_barang']?></h1>  
        <p class="display-5 fw-bold lh-1 mb-3" style="color:#FFC107;">Rp.<?= $detail['harga']?></p> 
        <p class="lead mb-3">Keterangan</p>
        <p class="lead" style="color: #a9a9a9; text-align: justify;"><?= $detail['keterangan']?></p>
          <p class="lead mt-3 mb-3">Memory</u> :</p>
          <span>
            <a href=""><i class="fas fa-circle fa-2x" style="color:grey;"></i></a>
            <a href=""><i class="fas fa-circle fa-2x" style="color:black;"></i></a>
            <a href=""><i class="fas fa-circle fa-2x" style="color:#17304E;"></i></a>
            <a href=""><i class="fas fa-circle fa-2x" style="color:green;"></i></a>
          </span>
          <div class="d-grid gap-2 d-md-flex mt-2 justify-content-md-start">
            <button type="button" style="background: #17304E; font-size:20px" class="btn btn-secondary fw-bold my-2"><b>ADD TO CART</b></button>
          </div>
      </div>
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?= base_url('assets/img/')?>/<?= $detail['foto']?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
    </div>
    <hr>

  </div>
  </main>
  <?= $this->endSection(); ?>