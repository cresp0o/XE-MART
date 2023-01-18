<?php 
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
                                <li class="list-inline-item"><span>||</span> Register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->

        <!-- Register -->
        <section class="register">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" action="admin/functions/add_client.php">
                            <h5>Create Your Account</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>First Name*</label>
                                    <input type="text" name="fname" placeholder="Your first name">
                                </div>
                                <div class="col-md-12">
                                    <label>Last Name*</label>
                                    <input type="text" name="lname" placeholder="Your Last name">
                                </div>
                                <div class="col-md-12">
                                    <label>Email Address*</label>
                                    <input type="text" name="email" placeholder="Your email address">
                                </div>
                                <div class="col-md-12">
                                    <label>Phone Number*</label>
                                    <input type="text" name="phone" placeholder="Your phone number">
                                </div>
                                <div class="col-md-12">
                                    <label>Password*</label>
                                    <input type="text" name="password" placeholder="Password should be more than 6 character">
                                </div>
                                <div class="col-md-7">
                                    <div>
                                        <input type="checkbox" id="t-box" id="t-box">
                                        <label for="t-box">I have read the terms and condition.</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="c-box" id="c-box">
                                        <label for="c-box">Subscribe for newsletter</label>
                                    </div>
                                </div>
                                <div class="col-md-5 text-right">
                                <input type="submit" name="submit" class="btn btn-primary" value="Submit">  
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Register -->

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