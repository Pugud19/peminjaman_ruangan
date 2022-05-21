<section class="roberto-about-area section-padding-100-0">
        <!-- Hotel Search Form Area -->
        <div class="hotel-search-form-area">
            <div class="container-fluid">
                <div class="hotel-search-form">
                    <form action="#" method="post">
                        <div class="row justify-content-between align-items-end">
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="checkIn">Check In</label>
                                <input type="date" class="form-control" id="checkIn" name="checkin-date">
                            </div>
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="checkOut">Check Out</label>
                                <input type="date" class="form-control" id="checkOut" name="checkout-date">
                            </div>
                            <div class="col-4 col-md-1">
                                <label for="room">Room</label>
                                <select name="room" id="room" class="form-control">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                </select>
                            </div>
                            <div class="col-4 col-md-1">
                                <label for="adults">Adult</label>
                                <select name="adults" id="adults" class="form-control">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                </select>
                            </div>
                            <div class="col-4 col-md-2 col-lg-1">
                                <label for="children">Children</label>
                                <select name="children" id="children" class="form-control">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3">
                                <button type="submit" class="form-control btn roberto-btn w-100">Check Availability</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container mt-100">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                        <h6>About Us</h6>
                        <h2>Welcome to <br>Roberto Hotel Luxury</h2>
                    </div>
                    <div class="about-us-content mb-100">
                        <h5 class="wow fadeInUp" data-wow-delay="300ms">With over 340 hotels worldwide, NH Hotel Group offers a wide variety of hotels catering for a perfect stay no matter where your destination.</h5>
                        <p class="wow fadeInUp" data-wow-delay="400ms">Manager: <span>Michen Taylor</span></p>
                        <img src="img/core-img/signature.png" alt="" class="wow fadeInUp" data-wow-delay="500ms">
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="row no-gutters">
                            <div class="col-6">
                                <div class="single-thumb">
                                    <img src="img/bg-img/13.jpg" alt="">
                                </div>
                                <div class="single-thumb">
                                    <img src="https://images.unsplash.com/photo-1586611292717-f828b167408c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fGhvdGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="single-thumb">
                                    <img src="https://images.unsplash.com/photo-1518733057094-95b53143d2a7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjJ8fGhvdGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="container mt-100">
            <div class="row align-items-center">
    <!-- Blog Area Start -->
    <section class="roberto-blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h6>Our Blog</h6>
                        <h2>Latest News &amp; Event</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Data Gedung Area -->
                <?php 
                // ciptakan object dari class gedung
                $obj = new Gedung();
                // panggil fungsi menampilkan data gedung
                $rs = $obj->getAll();
                // looping data gedung 
                foreach($rs as $g){
                ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" class="post-thumbnail"><img src="img/bg-img/<?= $g['id'] ?>.jpg" alt=""></a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-date">Jan 02, 2019</a>
                            <a href="#" class="post-catagory"><?= $g['kode'] ?></a>
                        </div>
                        <!-- Post Title -->
                        <a href="#" class="post-title"><?= $g['nama'] ?></a>
                        <p><?= $g['alamat'] ?></p>
                        <a href="index.html" class="btn continue-btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <?php
                }
                ?>

            </div>
            
        </div>
    </section>
    <!-- Blog Area End -->
            </div>
        </div>
    </section>