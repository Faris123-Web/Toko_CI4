
<header>
  <div class="container">
    <nav class="navbar navbar-expand-md navbar-light bg-light" aria-label="Fourth navbar example">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('Home') ?>"><img src="<?= base_url('assets/img/') ?>/logo.png" width="40" height="36" class="d-inline-block align-text-top mr-2"><b>TOKO PAK ROHMAT</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
          <ul class="navbar-nav mx-auto mb-2 mb-md-0 justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= base_url('Home') ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#produk">Product</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user"></i>Account</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown04">
                <li><a class="dropdown-item" href="<?= route_to('login') ?>">Login</a></li>
                <li><a class="dropdown-item" href="<?= route_to('register') ?>">Register</a></li>
              </ul>
            </li>
          </ul>
          <div class="search-box">
            <button class="btn-search"><i class="fas fa-search"></i></button>
            <input type="text" class="input-search" placeholder="Type to Search...">
          </div>
          <a class="text-decoration-none" href="<?= base_url('Cart') ?>"><i class="fas fa-shopping-cart"></i><span class="badge badge-danger navbar-badge"><?= $item ?></span></a>
          <form>

          </form>
        </div>
      </div>
    </nav>
  </div>

</header>
