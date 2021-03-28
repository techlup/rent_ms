<?= $this->extend("layout/base") ?>

<?= $this->section("main") ?>

    <div class="container">
        <div class="row mx-3 mt-3">
            <form class="col-md-4 mx-auto bg-light border border-dark rounded" method="POST" autocomplete="off">

                <div class="mb-3 d-flex justify-content-center mt-3">
                    <img src="logo-dark.png" alt="logo" class="img-fluid rounded-circle" width="100" height="100">
                </div>

                <div class="mb-3">
                    <p class="form-text px-3">Enter 4 digists code we sent to {phone}</p>
                   
                    <div class="row justify-content-center">
                        <div class="col-2 border-bottom border-dark mx-2"> <input onfocus="this.value=''" name="otp[]" id="otp1" type="number" class="form-control border-0 w-100" placeholder="*" required autofocus onkeyup="document.getElementById('otp2').focus()"></div>
                        <div class="col-2 border-bottom border-dark mx-2"><input onfocus="this.value=''" name="otp[]" id="otp2" type="number" class="form-control border-0 w-100" placeholder="*" required onkeyup="document.getElementById('otp3').focus()"></div>
                        <div class="col-2 border-bottom border-dark mx-2"><input onfocus="this.value=''" name="otp[]" id="otp3" type="number" class="form-control border-0 w-100" placeholder="*" required onkeyup="document.getElementById('otp4').focus()"></div>
                        <div class="col-2 border-bottom border-dark mx-2"><input onfocus="this.value=''" name="otp[]" id="otp4" type="number" class="form-control border-0 w-100" placeholder="*" required onkeyup="document.getElementById('next').click()"></div>
                    </div>
                    <p class="form-text text-danger text-center">{otp_error}</p>
                </div>

                <div class="mb-3 mt-4">
                    <button id="next" name="verify_otp" type="submit" class="btn btn-outline-dark w-100 rounded-pill">Next</button>
                </div>
            </form>
        </div>
    </div>
<?= $this->endSection()?>