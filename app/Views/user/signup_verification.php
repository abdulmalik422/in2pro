<!-- CONTENTS -->
<div class="container">
    <div class="py-4"></div>
    <div class="py-4">
        <p class="lead text-primary text-center fw-bold">
            Enter the code that was sent to your mobile to verify your phone number.
        </p>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="" method="post">
                <div class="row justify-content-evenly mb-5">
                    <input class="form-control form-control-lg p-1 text-center fs-2" style="width: 14%;" type="text" maxlength="1" required />

                    <input class="form-control form-control-lg p-1 text-center fs-2" style="width: 14%;" type="text" maxlength="1" required />

                    <input class="form-control form-control-lg p-1 text-center fs-2" style="width: 14%;" type="text" maxlength="1" required />

                    <input class="form-control form-control-lg p-1 text-center fs-2" style="width: 14%;" type="text" maxlength="1" required />

                    <input class="form-control form-control-lg p-1 text-center fs-2" style="width: 14%;" type="text" maxlength="1" required />

                    <input class="form-control form-control-lg p-1 text-center fs-2" style="width: 14%;" type="text" maxlength="1" required />
                </div>

                <div class="row px-2 mb-4">
                    <button type="submit" class="btn btn-primary btn-lg">
                        Verify
                    </button>
                    <!-- When Success: Goes to the Dashboard Refer Friends Page -->
                </div>

                <p class="text-center text-danger">
                    <small>Incorrect code.</small>
                </p>
                <p class="text-center text-primary fw-bold">
                    No Code Yet?
                    <button type="button" class="btn btn-outline-primary btn-sm ms-2">
                        Click Here to Resend.
                    </button>
                </p>
            </form>
        </div>
    </div>
</div>
<!-- END OF CONTENTS -->

<!-- Auto focus to next input field when fill 1 character -->
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        $(".form-control").keyup(function () {
            if (this.value.length == this.maxLength) {
                var $next = $(this).next(".form-control");
                if ($next.length) $(this).next(".form-control").focus();
                else $(this).blur();
            }
        });
    });
</script>
