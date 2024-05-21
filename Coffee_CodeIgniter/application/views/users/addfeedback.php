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
                    <form method="post" action="<?= base_url('users/add') ?>">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required autocapitalize="off">
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="" for="pword">Password</label>
                            <input type="password" class="form-control" id="pword" name="pword" required autocapitalize="off">
                        </div>
                        <button type="submit" class="btn btn-dark btn-block">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
