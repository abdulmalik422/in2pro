<!-- hero image -->
<div class="container-fluid position-relative px-0 mb-4" style="background-image: url(<?php echo ASSETS_URL.'img/istockphoto-1201798744-2048x2048-login-2.jpg';?>); background-size: cover; background-position: center; height: 40vh;">
    <div class="w-100 position-absolute bottom-0 d-flex justify-content-center align-items-center bg-light bg-opacity-75 border-top border-bottom border-primary border-2" style="min-height: 17%;">
        <h1 class="h3 text-primary text-center text-uppercase px-3 py-1 mb-0">
            <?php echo isset($heading) ? $heading : 'Sign Up' ?>
        </h1>
    </div>
</div>
<!-- end of hero image -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 p-3 text-md-center">
            <p class="lead">
                Create your account and start inviting your friends.
            </p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="" method="post" oninput='pw2.setCustomValidity(pw2.value !== pw1.value ? "Passwords do not match." : "")'>
                <div class="form-floating mb-3">
                    <input type="tel" class="form-control" id="floatingPhone" placeholder="1234567890" required />
                    <label for="floatingPhone">ID (Mobile Phone Number)</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pw1" required />
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Password Confirmation" name="pw2" required />
                    <label for="floatingPasswordConfirm">Password Confirmation</label>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingFirstName" placeholder="First Name" required />
                            <label for="floatingFirstName">First Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingLastName" placeholder="Last Name" required />
                            <label for="floatingLastName">Last Name</label>
                        </div>
                    </div>
                </div>

                <div class="form-floating mb-5">
                    <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com" />
                    <label for="floatingPassword">Email (Optional)</label>
                </div>
                <div class="row px-2 mb-4">
                    <button type="submit" class="btn btn-primary btn-lg">
                        Sign Up
                    </button>
                    <!-- When Success: Goes to the Sign Up Verification Page -->
                </div>

                <p class="text-center text-danger mb-5">
                    <small>Mobile Phone Number is already in use.</small>
                </p>
            </form>
        </div>
    </div>
</div>
