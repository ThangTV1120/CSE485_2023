<?php include 'header.php';?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="d-flex justify-content-center h-100">
                <div class="card" >
                    <div class="card-header">
                        <h3>Sign In</h3>
                        <div class="d-flex justify-content-end social_icon">
                            <span><i class="fab fa-facebook-square"></i></span>
                            <span><i class="fab fa-google-plus-square"></i></span>
                            <span><i class="fab fa-twitter-square"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <form  action="loginuser.php" method="POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text" ><i class="fas fa-user"></i></span>
                                <input type="text" id="txtUser" name="txtUser" class="form-control" placeholder="username">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" ><i class="fas fa-key"></i></span>
                                <input type="password" id="txtPass" name="txtPass" class="form-control" placeholder="password">
                            </div>
                            
                            <div class="row align-items-center remember">
                                <input type="checkbox">Remember Me
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" class="btn float-end login_btn">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center ">    
                            Don't have an account?<a href="signup.php" class="text-warning text-decoration-none">Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="text-warning text-decoration-none">Forgot your password?</a>
                        </div>
                    </div>
                </div>

                    
        </div>
    </main>
<?php include 'footer.php';?>