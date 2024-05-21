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
                <div class="card-header bg-success text-white text-center">
                    <h4>Profile</h4>
                </div>
                <div class="">
                    <div class="">
                        <h2>Welcome!! <?= $username ?></h2>
                    </div>
                    <!-- Add more fields here to display additional user information -->
                </div>
                <div class="container">
                    <div class="row row-cols-3">

                        <div class="col-12">
                            <div class="container mt-5">
                                <div class="row justify-content-center">
                                    <div class="col-md-12 text-center d-flex justify-content-center">
                                        <div class="rounded-circle border border-dark p-3 d-flex align-items-center justify-content-center"
                                            style="width: 250px; height: 250px; overflow: hidden;">
                                            <img src="<?= base_url('image/'. $img)?>" alt="Your Image" class="img-fluid"
                                                style="max-width: 350px; max-height: 350px; width: auto; height: auto;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-12 p-3 text-center">
                        <a href="<?= base_url('users/display/' . $id); ?>">Edit Profile</a>

                    </div>
                    <div class="col">Full Name: <?= $firstName . " " . $middleName . " " . $lastName ?></div> <br>
                    <div class="col">Gender : <?= $gender?> </div><br>
                    <div class="col">Age : <?= $age?></div><br>
                    <div class="col">status : <?= $statuss?></div><br>
                    <div class="col-12">Transactions</div>
                </div>
            </div>
            <div class="card-footer text-center bg-success">
                <a href="<?= base_url('login/logout') ?>" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</div>
</div>