
<?= $this->extend('template/cart'); ?>
<?= $this->section('content'); ?>
<main>


  <div class="container mt-5">
    <?php if($item == 0) { ?>
      <div class="card">
        <div class="card-header">List Cart</div>
        <div class="card-body">
          Keranjang belanja Anda sedang kosong. <a href="<?= base_url('Home')?>" class="btn btn-success">Belanja Yuk</a>
        </div>
      </div>
    <?php } else { ?>
      <div class="card">
        <div class="card-header">List Cart</div>
        <div class="card-body">
          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Photo</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Total</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                  <input type="number" name="quantity[]" min="1" class="form-control" style="width:60px">
                </td>
                <td>@mdo</td>
                <td>@mdo</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    <?php } ?>
  </div>
</main>
<?= $this->endSection(); ?>