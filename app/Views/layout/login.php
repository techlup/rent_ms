<?= $this->extend("layout/base") ?>

<?= $this->section("main") ?>

    <div class="container">
        <div class="row mx-3 mt-3">
            <form class="col-md-4 mx-auto bg-light border border-dark rounded" method="POST" autocomplete="off">

                <div class="mb-3 d-flex justify-content-center mt-3">
                    <img src="logo-dark.png" alt="logo" class="img-fluid rounded-circle" width="100" height="100">
                </div>

                <div class="mb-3">
                    <p class="form-text px-3">Phone number is required to continue</p>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="icofont-phone"></i>+254</span>
                        </div>
                        <input name="phone" id="phone" type="number" title="Phone Number" class="form-control border-bottom border-dark border-2" placeholder="07********" required>
                    </div>
                        <p class="form-text text-danger text-center">{phone_error}</p>
                </div>

                <div class="mb-3 mt-4">
                    <button type="submit" name="login_begin" class="btn btn-outline-dark w-100 rounded-pill">Next</button>
                </div>
                <div class='mb-3 d-flex justify-content-center'>
                    <input type="submit" name="create_account" class="btn btn-sm btn-dark text-light" Value="Create Account">
                </div>
            </form>
        </div>
    </div>
<?= $this->endSection()?>