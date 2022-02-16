<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <?php
                    if ($this->session->flashdata('message')) {
                        echo $this->session->flashdata('message');
                    }
                    ?>
                    <div class="login-form">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="au-input au-input--full" type="email" name="email" placeholder="Email Address" value="<?= set_value('email') ?>">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                            </div>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Sign In</button>
                        </form>
                        <div class="register-link">
                            <p>
                                Don't have an account?
                                <a href="<?= base_url('auth/registration') ?>">Sign Up Here</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>