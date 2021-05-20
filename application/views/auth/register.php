<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('auth/register'); ?>">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control form-control-user" placeholder="Full Name" value="<?= set_value('name'); ?>">
                                <small class="text-danger">
                                    <?= form_error('name'); ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control form-control-user" placeholder="Username" value="<?= set_value('username'); ?>">
                                <small class="text-danger">
                                    <?= form_error('username'); ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-user" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                <small class=" text-danger">
                                    <?= form_error('email'); ?>
                                </small>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" name="password1" class="form-control form-control-user" placeholder="Password">
                                    <small class=" text-danger">
                                        <?= form_error('password1'); ?>
                                    </small>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" name="password2" class="form-control form-control-user" placeholder="Repeat Password">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Register Account">

                            <hr>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>