<?php
// Check if the user is logged in
if ($this->session->userdata('username')) {
    if ($this->session->userdata('user_pword')) {
        echo '<script>alert("';
        echo 'You are logged in already';
        echo '");</script>';
    }
}
?>

    <section class="home" id="home">
      <div class="content">
        <h3>fresh coffee in the morning</h3>
        <p>
          When you buy our products, you are helping a small business & those people who works with us :>
        </p>
        <a href="<?= site_url('webpages/menu')?>" class="btn">get yours now</a>
      </div>
    </section>
 
