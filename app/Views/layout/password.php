<?= $this->extend("layout/base") ?>

<?= $this->section("main") ?>

    <div class="container">
        <div class="row mx-3 mt-3">
            <form class="col-md-4 mx-auto bg-light border border-dark rounded" method="POST" autocomplete="off">

                <div class="d-flex justify-content-center mt-3">
                    <img src="logo-dark.png" alt="logo" class="img-fluid rounded-circle" width="100" height="100">
                </div>
                <div class="mb-3">
                    <p class="form-text px-3 text-center"><i class="icofont-phone"></i> {phone}</p>
                </div>

                <div class="mb-3">
                   <label for="password" class="form-lable">Enter your password (*)</label>
                    <input name="password" id="password" type="password" title="Password" class="form-control border-bottom border-dark border-2" placeholder="********" required>
                    <p class="form-text text-danger text-center">{password_error}</p>
                </div>

                <div class="mb-3 mt-4">
                    <button type="submit" name="Login" class="btn btn-dark w-100 rounded-pill">Login</button>
                </div>
            </form>
        </div>
    </div>
<?= $this->endSection()?>