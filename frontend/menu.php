<?php
// membuat variable session
$user = $_SESSION['member'];
?>
<div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            
                            <?php 
                                    if(!isset($user)){ //-------------- jika belum login tampil menu login --------------------
                                ?>
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="index.php?hal=home">Home</a></li>
                                    <li><a href="index.php?hal=ruangan">Rooms</a></li>
                                    <li><a href="#">About Us</a></li>
                                    </ul>
                                 <!-- Book Now -->
                                 <div class="book-now-btn ml-3 ml-lg-5">
                                    <a href="#">Book Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                                <!-- Search -->
                                <div class="search-btn ml-4">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                                <ul>
                                <li><a href="index.php?hal=login">Login</a></li>
                                </ul>
                                <?php 
                                }
                                else{ //-------------- jika sudah login tampil menu Logout -------------------
                                ?>
                            <div class="classynav navbar navbar-expand-lg">
                                <ul id="nav ">
                                    <li class="active"><a href="index.php?hal=home">Home</a></li>
                                    <li><a href="index.php?hal=ruangan">Rooms</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                        <li><a href="index.php?hal=gedung">- Gedung</a></li>
                                            <li><a href="index.php?hal=fasilitas">- Fasilitas</a></li>
                                            <li><a href="index.php?hal=kategori">- Kategori Ruangan</a></li>
                                        </ul>
                                    </li>
                                    </ul>
                                 <!-- Book Now -->
                                 <div class="book-now-btn ml-3 ml-lg-5">
                                    <a href="#">Book Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                                <!-- Search -->
                                <div class="search-btn ml-4">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                                <ul>
                                <li><a href="#"><?= $user['fullname'] ?></a>
                                        <ul class="dropdown">
                                        <li><a href="logout.php">Logout</a></li>
                                            <li><a href="#">My Profile</a></li>
                                            <?php 
                                            if($role == 'admin'){
                                            ?>
                                            <li><a href="index.php?hal=member">Kelola User</a></li>
                                        <?php } ?>
                                    </ul>
                                    </li>
                                </ul>

                                <?php
                                }
                                ?>






                            </div>
                            <!-- Nav End -->
                        </div>