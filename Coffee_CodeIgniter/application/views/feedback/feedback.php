<?php
if ($this->session->userdata('user_info')) {?>
<div class="px-5 mx-5">

  <form method="post" action="<?= base_url('feedback/addfeedback')?>">
    <input type="hidden" id="emp_number" name="emp_number" value="<?= $this->session->userdata('user_info') ?>">
    <input type="hidden" id="img" name="img" value="<?= $this->session->userdata('img') ?>">
    <div class="input-group mb-3">
      <input type="text" id="feedback" name="feedback" class="form-control" placeholder="Type comment..." />
      <div class="input-group-append">
        <button class="btn btn-success" type="submit">Post</button>
      </div>
    </div>
  </form>
</div>
<?php }?>
  <div class="row row-cols-3 g-3 mx-5 px-5 bg-white">
<?php   foreach($feedback as $user):?>

  <div class="col m-3">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img
          style="height:100px;"
            src="<?= base_url('image/'. $user->img)?>"
            alt="Trendy Pants and Shoes"
            class="img-fluid rounded-start m-auto"
          />
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?= $user->emp_number; ?></h5>
            <p class="card-text">
              <?= $user->feedback; ?>
            </p>
            <p class="card-text">
              <small class="text-muted"><?= $user->date_created; ?></small>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php endforeach;?>

</div>








