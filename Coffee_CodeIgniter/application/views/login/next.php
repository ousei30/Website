<div class="bg-white m-5 p-5">
    <div class="m-5 p-5">
        <div class="m-5">

        <form action=" <?= base_url('login/next') ?>" method="post">
            <br>
            <?php if($this->session->flashdata('msg')) {?>
                <div>
                    <?= $this->session->flashdata('msg');?>
                </div>
            <?php }?>

            <br>
            <br>
            Halo
            <?php 
                if($this->session->userdata('username'))
                {
                    $username = $this->session->userdata('username');

                    echo $username;
                    ?>
                <input type="hidden" name="username" value="<?= $username?>">
                <span>Please Enter Your Password</span>
            <?php } ?>

            <label for="pword"> Password </label>
            <input class="form-control p-4" type="password" name="pword" id="pword" placeholder = "Please Enter Your Password">
            <input class="h4 p-2 btn-outline-secondary bg-primary text-white rounded mt-2" value="Next" type="submit">
        </form>
        </div>
    </div>
</div>