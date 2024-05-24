<br>
<br>
<br>
<br>
<br>
<br>
<div class="container-fluid">
    <div class="container shadow mt-5 bg-warning text-white text-center">
        <?php if(validation_errors()) :?>
        <p><?= validation_errors();?></p>
        <?php endif;?>
    </div>
    <div class="container p-5 shadow mt-4 bg-dark  border border-white"
        style="background-image: url(<?= base_url('assets/image/try.jpg')?>); font-size: 15px;">
        <div class="container-fuid bg-white">
            <p>If you have made any changes, please log out and log back in to see the updates on your account.</p>
        </div>

        <form method="post" action="<?= base_url('users/update')?>" enctype="multipart/form-data">
            <label for="">Admin Image : <span class="text-warning"></span></label>
            <input class="form-control-file" type="file" name="img" id="">

            <label for="">Username : <span class="text-warning"></span></label>
            <input class="form-control" type="text" name="username" value="<?= $user->username; ?>" id=""
                style="height: 35px; font-size 25px;">

            <div class="row">
                <div class="col-4">
                    <label for="">First Name : <span class="text-warning"></span></label>
                    <input class="form-control" type="text" name="firstName" value="<?= $user->firstName; ?>" id=""
                        style="height: 35px; font-size 25px;">
                </div>
                <div class="col-4">
                    <label for="">Middle Name : <span class="text-warning"></span></label>
                    <input class="form-control" type="text" name="middleName" value="<?= $user->middleName; ?>" id=""
                        style="height: 35px; font-size 25px;">
                </div>
                <div class="col-4">
                    <label for="">Last Name : <span class="text-warning"></span></label>
                    <input class="form-control" type="text" name="lastName" value="<?= $user->lastName; ?>" id=""
                        style="height: 35px; font-size 25px;">
                </div>
            </div>

            <input type="hidden" name="id" value="<?= $user->id; ?>">
            <input class="btn btn-success mt-2" type="submit" value="Update">
        </form>
    </div>
</div>
