<?php include 'header.php'; ?>
<main class="container mt-5 mb-4">
    <div class="d-flex justify-content-center h-50">
        <div class="card">
            <div class="card-header">
                <h3>Sign Up</h3>
                <div class="d-flex justify-content-end social_icon">
                    <span><i class="fab fa-facebook-square"></i></span>
                    <span><i class="fab fa-google-plus-square"></i></span>
                    <span><i class="fab fa-twitter-square"></i></span>
                </div>
            </div>

            <div class="card-body">
                <form>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="txtUser"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="username">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="txtPass"><i class="fas fa-key"></i></span>
                        <input type="text" class="form-control" placeholder="password">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="txtPass"><i class="fas fa-key"></i></span>
                        <input type="text" class="form-control" placeholder="Enter the password">
                    </div>


                    <div class="form-group">
                        <input type="submit" value="Sign Up" class="btn float-top-center login_btn">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>