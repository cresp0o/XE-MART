<?php 
session_start();
 include "design/header.php";
?>
        <!-- Breadcrumb Area -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-box text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#">Home</a></li>
                                <li class="list-inline-item"><span>||</span> Login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->

        <!-- Log In -->
        <section class="login">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="n-customer">
                            <h5>New Customer</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem est eum earum eius dolores, alias modi aut officia quo perferendis id aspernatur neque provident quas, quidem libero veritatis voluptatum illum!</p>
                            <a href="09-register.php">Create an Account</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="r-customer">
                            <h5>Registered Customer</h5>
                            <p>If you have an account with us, please log in.</p>
                            <form method="post" action="admin/functions/client_validate.php">
                                <div class="emal">
                                    <label>User name or email address</label>
                                    <input type="text" name="email">
                                </div>
                                <div class="pass">
                                    <label>Password</label>
                                    <input type="text" name="password">
                                </div>
                                <div class="d-flex justify-content-between nam-btm">
                                    <div>
                                        <input type="checkbox" name="rememberme" id="rmme">
                                        <label for="rmme">Remember Me</label>
                                    </div>
                                    <div>
                                        <a href="#">Lost your password?</a>
                                    </div>
                                </div>
                                <input type="submit" value="login" class="btn btn-primary" style="width:100%;">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Log In -->

        <!-- Brand area 2 -->
        <section class="brand2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tp-bnd owl-carousel">
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-01.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-02.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-03.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-04.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-05.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-06.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="bnd-items">
                                <a href="#"><img src="images/brand-07.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Brand area 2 -->
        <?php 
       include "design/footer.php";
       ?>