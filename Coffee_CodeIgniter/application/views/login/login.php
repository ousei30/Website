<?php
// Check if the user is logged in
if ($this->session->userdata('username')) {
    if($this->session->userdata('user_pword'))
    {
        redirect(base_url());
    }
    redirect(base_url('login/logout'));
}
?> 
<div class="bg-white m-5 p-5">
    <div class="m-5 p-5">
        <div class="m-5">
            <form action="<?= base_url('login/login') ?>" method="post">
                <label class="text-white" for="username"> Email </label>

                <input class="form-control p-4" type="text" name="username" id="username" placeholder="Please enter your username">
                <input class="h4 p-2 btn-outline-secondary bg-primary text-white rounded mt-2" value="Next" type="submit"><br>

                <span class="">no account?
                    <a class="" href="<?= base_url('users/add') ?>">REGISTER NOW</a>
                </span>
            </form>
        </div>
    </div>
</div>