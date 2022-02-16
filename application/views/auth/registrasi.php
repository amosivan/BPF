    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-form">
                            <form action="<?= base_url('auth/registration') ?>" method="post">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input class="au-input au-input--full" type="text" name="name" placeholder="Full Name" value="<?= set_value('name') ?>">
                                    <small class="text-danger"><?= form_error('name') ?></small>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email Address">
                                    <small class="text-danger"><?= form_error('email') ?></small>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                    <small class="text-danger"><?= form_error('password') ?></small>
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input class="au-input au-input--full" type="text" name="no_hp" placeholder="Phone Number">
                                    <small class="text-danger"><?= form_error('no_hp') ?></small>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="register">register</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="<?= base_url('auth') ?>">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>