<?php
// Check if the user is logged in
if (!$this->session->userdata('user_pword')) {
    // Display an alert box and redirect to the login page after a delay
    echo '<script>alert("Please log in to view this page"); 
    window.setTimeout(function()
    {
        window.location.href = "'.base_url('login/login').'"; 
    }, 1000);</script>';
    // Stop execution to prevent further rendering of the page
    exit();
}
// Get user information from session
$username   = $this->session->userdata('username');
$firstName  = $this->session->userdata('firstName');
$middleName = $this->session->userdata('middleName');
$lastName   = $this->session->userdata('lastName');
$gender     = $this->session->userdata('gender');
$age        = $this->session->userdata('age');
$statuss    = $this->session->userdata('user_status');
$img        = $this->session->userdata('img');
$id        = $this->session->userdata('id');
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Profile</h4>
                </div>
                <div class="card-body">
                    <!-- Added missing div -->
                    <div class="row">
                        <div class="col">
                            <h2> <?= "Welcome! " . $username . " You are an Admin" ?></h2>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row row-cols-3 font-weight-bold">
                            <div class="col-12 shadow p-3 m-3">
                                Admin Controls
                                <div class="row">
                                    <div class="col-3">
                                        <a href="<?= base_url('product/productlist') ?>">Product List</a>
                                    </div>
                                    <div class="col-3">
                                        <a href="<?= base_url('users/index') ?>">Users List</a>
                                    </div>
                                    <div class="col-3">
                                        <a href="<?= base_url('users/display/' . $id); ?>">Edit Profile</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="container mt-5">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12 text-center d-flex justify-content-center">
                                            <div class="rounded-circle border border-dark p-3 d-flex align-items-center justify-content-center"
                                                style="width: 250px; height: 250px; overflow: hidden;">
                                                <img src="<?= base_url('image/'. $img)?>" alt="Your Image"
                                                    class="img-fluid"
                                                    style="max-width: 350px; max-height: 350px; width: auto; height: auto;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-white"> br</div>
                            <div class="col-12 text-white"> br</div>
                            <div class="col">Full Name: <?= $firstName . " " . $middleName . " " . $lastName ?></div>
                            <br>
                            <div class="col-12 text-white"> br</div>
                            <div class="col">Gender : <?= $gender?> </div><br>
                            <div class="col-12 text-white"> br</div>
                            <div class="col">Age : <?= $age?></div><br>
                            <div class="col-12 text-white"> br</div>
                            <div class="col">Status : <?= $statuss?></div><br>
                            <div class="col-12 text-white"> br</div>
                            <div class="col-12">Transactions</div>
                        </div>
                    </div>
                </div> <!-- Close card-body -->
                <div class="card-footer text-center p-5">
                    <a href="<?= base_url('login/logout') ?>" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>