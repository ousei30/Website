<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-dark text-white text-center">
                    <h4>Register</h4>
                </div>
                <div class="card-body">
                    <?php if(validation_errors()): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif; ?>
                    <form method="post" action="<?= base_url('users/add') ?>" enctype="multipart/form-data">

                    <label for="">Profile Image : <span class="text-warning"></span></label>
                    <input class="form-control-file" type="file" name="img" id="">
                    
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required autocapitalize="off">
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="" for="pword">Password</label>
                            <input type="password" class="form-control" id="pword" name="pword" required autocapitalize="off">
                        </div>


                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required autocapitalize="off">
                        </div>
                        <br><div class="form-group">
                            <label for="middleName">Middle Name</label>
                            <input type="text" class="form-control" id="middleName" name="middleName" required autocapitalize="off">
                        </div>
                        <br><div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" required autocapitalize="off">
                        </div>
                        <br><div class="form-group">
                            <label for="age">Age</label>
                            <input type="text" class="form-control" id="age" name="age" required autocapitalize="off">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="text" class="form-control" id="gender" name="gender" required autocapitalize="off">
                        </div>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-dark btn-block">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
