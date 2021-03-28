<?= $this->extend("layout/base") ?>

<?= $this->section("main") ?>

    <div class="container">
        <div class="row mx-3 mt-3">
            <form class="col-md-4 mx-auto bg-light border border-dark rounded" method="POST" autocomplete="off">

                <div class="mb-3 d-flex justify-content-center mt-3">
                    <img src="logo-dark.png" alt="logo" class="img-fluid rounded-circle" width="100" height="100">
                </div>
                <div class="mb-3">
                    <p class="form-text">Update your profile</p>
                </div>
                <div class="mb-3">
                    <label for="full_name" class="form-label">Enter your full name (*)</label>
                    <input name="full_name" id="full_name" type="text" title="Full Name" class="form-control border-bottom border-dark border-2" placeholder="Enter your name" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Set your password (*)</label>
                    <input name="password" id="password" type="password" title="Password" class="form-control border-bottom border-dark border-2" placeholder="******" required>
                </div>
                <p class="form-text text-danger text-center">{password_error}</p>
                <div class="mb-3">
                    <label for="password1" class="form-label">Confirm password (*)</label>
                    <input name="password1" id="password1" type="password" title="Confirm Password" class="form-control border-bottom border-dark border-2" placeholder="******" required>
                </div>

                <div class="mb-3 mt-4">
                    <button type="submit" name="update_profile" class="btn btn-outline-dark w-100 rounded-pill">Update</button>
                </div>
            </form>
        </div>
    </div>
<?= $this->endSection()?>