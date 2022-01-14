<!-- hero image -->
<div class="container-fluid position-relative px-0 mb-5" style="background-image: url(<?php echo ASSETS_URL.'img/istockphoto-1201798744-2048x2048-login-2.jpg';?>); background-size: cover; background-position: center; height: 40vh;">
    <div class="w-100 position-absolute bottom-0 d-flex justify-content-center align-items-center bg-light bg-opacity-75 border-top border-bottom border-primary border-2" style="min-height: 17%;">
        <h1 class="h3 text-primary text-center text-uppercase px-3 py-1 mb-0"><?php echo isset($heading) ? $heading : 'Log In' ?></h1>
    </div>
</div>
<!-- end of hero image -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="" method="post">
                <div class="form-floating mb-3">
                    <input type="tel" class="form-control" id="floatingPhone" placeholder="1234567890" required />
                    <label for="floatingPhone">ID (Mobile Phone Number)</label>
                </div>
                <div class="form-floating mb-5">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pw1" required />
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="row px-2 mb-4">
                    <button type="submit" class="btn btn-primary btn-lg">
                        Log In
                    </button>
                </div>

                <p class="text-center text-danger">
                    <small>Incorrect Mobile Phone Number or Password.</small>
                </p>
                <p class="text-center text-primary fw-bold">
                    Forgot Passwrd?
                    <a href="/login-pw-reset.html" class="btn btn-outline-primary btn-sm ms-2">Click Here to Reset.</a>
                </p>
            </form>
        </div>
    </div>
</div>
