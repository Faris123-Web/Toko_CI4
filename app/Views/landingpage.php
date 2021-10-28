<?= $this->extend('template/index', [$item]); ?>
<?= $this->section('content'); ?>
<main>

  <section class="container">
    <div class="container">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
       <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?= base_url('assets/') ?>/img/Rectangle 21.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Modern Shoping Place <br>for your smartphone needs</h1>    
        <p class="lead">E commerce wich is also known as <br>electronic commerce or internet <br>commerce wich refers to the buying <br> and selling of goods</p>
        <div class="d-grid gap-2 d-md-flex mt-4 justify-content-md-start">
          <a href="#produk" style="background: #17304E; font-size:20px" class="btn btn-secondary my-2">SHOP NOW</a>
        </div>
      </div>
      <hr>
    </div>
  </section>

  <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <a href="#" style="border-radius: 20px; background: #17304E;" class="btn btn-secondary ">PRODUK</a>
        </div>
        <div class="col-lg-6 text-end">
         <a href="#" id="myBtn" style="border-radius: 20px; background: #17304E;" class="btn btn-secondary"><i class="fas fa-tag"></i>&nbsp;TAG</a>
         <a href="#" style="border-radius: 20px; background: #17304E;" class="btn btn-secondary my-2"><i class="fas fa-align-left"></i>&nbsp;URUTKAN</a>
       </div>
     </div>
   </div>

  <div class="album py-5" id="produk">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php foreach($barang as $b) : ?>
          <div class="col">
            <?php echo form_open('cart/add');
            echo form_hidden('id', $b['id']);
            echo form_hidden('price', $b['harga']);
            echo form_hidden('name', $b['nama_barang']);
            //options
            echo form_hidden('foto', $b['foto']);
             ?>

            <div class="card shadow-sm" style="border-radius:10px">
              <img src="<?= base_url('assets/img/')?>/<?= $b['foto']?>">
              <div class="card-body" style="background:#17304E;">
                <h5 style="color:white;"><?= $b['nama_barang']?></h5>
                <p class="card-text" style="color:yellow;"><?= $b['keterangan']?>.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="<?= base_url('Home/detail') ?>/<?= $b['id']?>" class="btn btn-primary">Detail</a>
                    <button type="submit" class="btn btn-danger swalDefaultSuccess">Add</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
        <?php endforeach; ?>


      </div>
    </div>
  </div>

</main>
<?= $this->endSection(); ?>
