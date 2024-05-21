<section id="nav">

<header class="header">
  <a href="#" class="logo">
    <img src="<?= base_url('assets/image/logo.png')?>" alt="" />
    <span class="text-white h2 font-weight-bold text-decoration-none">COFFEE NEGRA</span>
  </a>

      <?php
              if ($this->session->userdata('user_info')) {?> 
                <div class="text-align-end flex-column text-dark h4 bg-white p-3 rounded" >
                <img class="rounded-circle" style="height: 33px;width:33px;" src="<?= base_url('image/'. $this->session->userdata('img'))?>" alt="">
                  <?= "You are logged in! " . $this->session->userdata('user_info')?> 
                  <div class="container-fluid d-flex justify-content-end"> 
                      <a href="<?= base_url('login/logout') ?>" class="">Logout</a>
                  </div>
              <?php  }?>
      </div>

      <nav class="navbar mr-5">
        <div class="mr-5">
          <a href="<?= base_url()?>">home</a>
          <a href="<?= base_url('dashboard/about')?>">about</a>
          <a href="<?= base_url('product/product')?>">menu</a>
          <a href="<?= base_url('feedback/feedback')?>">review</a>
          <a href="<?= base_url('dashboard/contact')?>">contact</a>
          <a href="<?= base_url('login/login')?>">Login</a>
          <a href="<?= base_url('users/profile') ?>">Profile</a>
        </div>
      </nav>
      

      <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></a></div>
        <div class="fas fa-bars" id="menu-btn"></div>
      </div>
    </header>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    