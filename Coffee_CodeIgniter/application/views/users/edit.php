
<div class="container-fluid">
  <div class="container shadow mt-5 bg-warning text-white text-center">
    <?php if(validation_errors()) :?>
    <p><?= validation_errors();?></p>
    <?php endif;?>
  </div>
  <div class="container p-5 shadow mt-4 bg-dark  border border-white">

      <label for="">Product Image : <span class="text-warning"></span></label>
      <input class="form-control-file" type="file" name="img" id="">

      <form method="post" action="<?= base_url('users/update')?>">
      <label for="">username : <span class="text-warning"></span></label>
      <input class="form-control" type="text" name="username" value= <?= $user->username; ?> id="">

      <label for="">firstname : <span class="text-warning"></span></label>
      <input class="form-control" type="text" name="firstName" value= <?= $user->username; ?> id="">

      <label for="">middlename : <span class="text-warning"></span></label>
      <input class="form-control" type="text" name="middleName" value= <?= $user->username; ?> id="">

      <label for="">lastname : <span class="text-warning"></span></label>
      <input class="form-control" type="text" name="lastName" value= <?= $user->username; ?> id="">

      <input type="hidden" name="id"  value= <?= $user->id; ?>>
      <input class="btn btn-success mt-2" type="submit" value="Update">
      </form>
  </div>
</div>