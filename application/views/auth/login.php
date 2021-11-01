<div class="container"><br><br><br>

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-5 col-lg-6 col-md-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5" style="background-color: #2C394B">
                                <div class="text-center">
                                    <h1 class="h4 mb-0" style="color:#FF4C29"><b>Welcome To</b></h1>
                                    <h3 class="h3 mb-4" style="color:#FF4C29"><b>Web Interface Sistem Monitoring Bus</b></h3>
                                    <?= $this->session->flashdata('message'); ?>
                                    <?= $this->session->flashdata('pesan'); ?>
                                </div>
                                <form method="POST" action="<?= base_url('Auth'); ?>" class="user">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" name="username" value="<?= set_value('username'); ?>">
                                        <?= form_error('username', '<div class="text-danger small ml-3">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                        <?= form_error('password', '<div class="text-danger small ml-3">', '</div>'); ?>
                                    </div>
                                    <button class="btn btn-user btn-block" style="background-color: #FF4C29; color: #f3f3f3;">Login</button>
                                </form>
                                <hr>
                                <!-- <div class="text-center">
                                    <a class="small" href="<?= base_url('Auth/forgotpassword'); ?>">Forgot Password?</a>
                                </div> -->
                                <!-- <div class="text-center">
                                    <a class="small" href="<?= base_url('Auth/registration'); ?>">Create an Account!</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>