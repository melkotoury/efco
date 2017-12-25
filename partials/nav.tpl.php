<?php
require 'config/lang.php';
?>
<!-- Main Menu Start -->
<div class="index1">
    <div class="mnmenu-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="index.php"><img src="<?= IMG_DIR;  ?>logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="menu">
                        <nav id="main-menu" class="main-menu">
                            <ul>
                                <?php
                                if ($_SESSION['lang'] == 'en' || !isset($_SESSION['lang'])) {


                                    ?>
                                    <li class="active"><a href="index.php"> Home </a></li>
                                    <li><a href="gallery.php"> Gallery </a></li>
                                    <li><a href="project.php"> Projects </a></li>
                                    <!--
                                                                            <li><a href="service.php">Service<i class="fa fa-caret-down"></i></a>
                                                                                <ul class="submenu">
                                                                                    <li><a href="service.php">Service</a></li>
                                                                                    <li><a href="service-details.php">Service Details</a></li>
                                                                                </ul>
                                                                            </li>
                                    -->
                                    <li><a href="about.php"> About Us</a></li>
                                    <!--                                        <li><a href="employees.php">employees</a></li>-->
                                    <!--
                                                                            <li><a href="blog.php">Blog<i class="fa fa-caret-down"></i></a>
                                                                                <ul class="submenu">
                                                                                    <li><a href="blog.php">Blog</a></li>
                                                                                    <li><a href="blog-details.php">Blog Details</a></li>
                                                                                </ul>
                                                                            </li>
                                    -->
                                    <li><a href="contact.php"> Contact Us </a></li>

                                    <?php
                                }
                                elseif ($_SESSION['lang'] == 'ar'){
                                ?>
                                <li class="active"><a href="index.php"> الرئيسية </a></li>
                                <li><a href="gallery.php"> الصور </a></li>
                                <li><a href="project.php"> المشاريع </a></li>
                                <li><a href="about.php"> من نحن </a></li>
                                <li><a href="contact.php"> اتصل بنا </a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu End -->
</header>
<!-- Header End -->