@extends('layouts.home')

@section('title', 'Laravel Spor Salonu Tanıtım ve Üyelik')
@section('description')
    Üzerinde çalışacağım en güzel proje benim diyorsan tam aradığın yerdesin
@endsection
@section('keywords','Fitness, Yoga, Pilates, Cardio')
@section('content')
    <section id="feat">
        <div class="container">
            <h2 class="main_title"><em></em>Lovefit nasıl çalışır?<span>Sporu Hayatınıza Katın</span></h2>
            <p class="lead styled">
                Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos.
            </p>
            <div class="row">
                <div class="col-sm-4 wow fadeIn animated" data-wow-delay="0.2s">
                    <div class="box_feat" id="icon_2">
                        <h3>Videolarla Egzersiz</h3>
                        <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. </p>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeIn animated" data-wow-delay="0.5s">
                    <div class="box_feat" id="icon_1">
                        <h3>Uzman Eğitmenler</h3>
                        <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. </p>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeIn animated" data-wow-delay="1s">
                    <div class="box_feat" id="icon_3">
                        <h3>Her Yerde Hareket</h3>
                        <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos. </p>
                    </div>
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </section>
    <!-- End section -->

    <div class="container_styled_1">
        <div class="container margin_60_35">
            <h2 class="main_title"><em></em>Son Antrenman Videoları<span>Sporu Hayatınıza Katın</span></h2>
            <div id="filter_buttons">
                <button data-toggle="portfilter" class="active" data-target="all">Hepsi</button>
                <button data-toggle="portfilter" data-target="Yoga">Yoga</button>
                <button data-toggle="portfilter" data-target="Strength">Güç</button>
                <button data-toggle="portfilter" data-target="Cardio">Kardiyo</button>
                <button data-toggle="portfilter" data-target="Pilates">Pilates</button>
            </div>
            <div class="row">
                <div class="col-md-4" data-tag="Yoga">
                    <div class="course_container">
                        <div class="ribbon top"><span>En çok satan</span>
                        </div>
                        <figure>
                            <a href="fitness-course-1.html">
                                <img src="{{ asset('assets') }}/img/course_1.jpg" width="800" height="533" class="img-responsive" alt="Image">
                                <div class="short_info"><i class="icon-clock-1"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class="course_title">
                            <div class="type"><span>Yoga</span>
                            </div>
                            <h3><a href="fitness-course-1.html">Yoga Temelleri</a></h3>
                            <div class="info_2 clearfix"><span class="price">39.90<sup>$</sup></span><span class="users">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class="col-md-4" data-tag="Yoga">
                    <div class="course_container">
                        <div class="ribbon top"><span>En çok satan</span>
                        </div>
                        <figure>
                            <a href="fitness-course-1.html">
                                <img src="{{ asset('assets') }}/img/course_2.jpg" width="800" height="533" class="img-responsive" alt="Image">
                                <div class="short_info"><i class="icon-clock-1"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class="course_title">
                            <div class="type"><span>Yoga</span>
                            </div>
                            <h3><a href="fitness-course-1.html">Vücut Germe </a></h3>
                            <div class="info_2 clearfix"><span class="price">39.90<sup>$</sup></span><span class="users">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class="col-md-4" data-tag="Yoga">
                    <div class="course_container">
                        <div class="ribbon"><span>Popüler</span>
                        </div>
                        <figure>
                            <a href="fitness-course-1.html">
                                <img src="{{ asset('assets') }}/img/course_3.jpg" width="800" height="533" class="img-responsive" alt="Image">
                                <div class="short_info"><i class="icon-clock-1"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class="course_title">
                            <div class="type"><span>Yoga</span>
                            </div>
                            <h3><a href="fitness-course-1.html">Esneklik ve Tonlama</a></h3>
                            <div class="info_2 clearfix"><span class="price">39.90<sup>$</sup></span><span class="users">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class="col-md-4" data-tag="Strength">
                    <div class="course_container">
                        <div class="ribbon"><span>Popüler</span>
                        </div>
                        <figure>
                            <a href="fitness-course-1.html">
                                <img src="{{ asset('assets') }}/img/course_4.jpg" width="800" height="533" class="img-responsive" alt="Image">
                                <div class="short_info"><i class="icon-clock-1"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class="course_title">
                            <div class="type"><span>Güç</span>
                            </div>
                            <h3><a href="fitness-course-1.html">Güçlü Üst Gövde</a></h3>
                            <div class="info_2 clearfix"><span class="price">39.90<sup>$</sup></span><span class="users">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>

                <div class="col-md-4" data-tag="Strength">
                    <div class="course_container">
                        <div class="ribbon"><span>Popüler</span>
                        </div>
                        <figure>
                            <a href="#0">
                                <img src="{{ asset('assets') }}/img/course_5.jpg" width="800" height="533" class="img-responsive" alt="Image">
                                <div class="short_info"><i class="icon-clock-1"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class="course_title">
                            <div class="type"><span>Güç</span>
                            </div>
                            <h3><a href="#0">Yağ Yakıcı </a></h3>
                            <div class="info_2 clearfix"><span class="price">39.90<sup>$</sup></span><span class="users">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class="col-md-4" data-tag="Cardio">
                    <div class="course_container">
                        <div class="ribbon"><span>Popüler</span>
                        </div>
                        <figure>
                            <a href="fitness-course-1.html">
                                <img src="{{ asset('assets') }}/img/course_6.jpg" width="800" height="533" class="img-responsive" alt="Image">
                                <div class="short_info"><i class="icon-clock-1"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class="course_title">
                            <div class="type"><span>Kardiyo</span>
                            </div>
                            <h3><a href="fitness-course-1.html">1000 Kalori Egzersiz Videosu</a></h3>
                            <div class="info_2 clearfix"><span class="price">39.90<sup>$</sup></span><span class="users">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class="col-md-4" data-tag="Cardio">
                    <div class="course_container">
                        <figure>
                            <a href="fitness-course-1.html">
                                <img src="{{ asset('assets') }}/img/course_7.jpg" width="800" height="533" class="img-responsive" alt="Image">
                                <div class="short_info"><i class="icon-clock-1"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class="course_title">
                            <div class="type"><span>Kardiyo</span>
                            </div>
                            <h3><a href="fitness-course-1.html">Yağ Yakıcı Kardiyo</a></h3>
                            <div class="info_2 clearfix"><span class="price">39.90<sup>$</sup></span><span class="users">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class="col-md-4" data-tag="Pilates">
                    <div class="course_container">
                        <figure>
                            <a href="fitness-course-1.html">
                                <img src="{{ asset('assets') }}/img/course_8.jpg" width="800" height="533" class="img-responsive" alt="Image">
                                <div class="short_info"><i class="icon-clock-1"></i>2 hr 56 min</div>
                            </a>
                        </figure>
                        <div class="course_title">
                            <div class="type"><span>Pilates</span>
                            </div>
                            <h3><a href="fitness-course-1.html">Alt Vücut Pilatesi</a></h3>
                            <div class="info_2 clearfix"><span class="price">39.90<sup>$</sup></span><span class="users">450</span>
                            </div>
                        </div>
                    </div>
                    <!-- End box course_container -->
                </div>
                <div class="col-md-4">
                    <a href="explore-1.html" id="view_all"><span><i class="arrow_carrot-right_alt2"></i>View all courses</span></a>
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </div>
    <!-- End container_styled_1 -->

    <section class="margin_60_35" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Tüm Cihazlarda Kullanılabilir</h3>
                    <p class="lead">Lorem ipsum dolor sit amet, dolore deleniti appareat per no. In ius aliquam suavitate repudiare, pro an quidam inimicus, duo liber labitur repudiandae in.</p>
                    <p>
                    <p>Lorem ipsum dolor sit amet, dolore deleniti appareat per no. In ius aliquam suavitate repudiare, pro an quidam inimicus, duo liber labitur repudiandae in. Nec no tamquam delenit, sit equidem ornatus accommodare at, pro graeco debitis deterruisset no. Eam at veri oratio principes, sit ad vero ipsum affert.</p>
                    <div id="compatib">
                        Android/IOS ile uyumlu
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets') }}/img/devices.png" width="600" height="355" alt="" class="img-responsive">
                </div>
            </div>
            <!--  End row -->
        </div>
        <!--  End container-->
    </section>
    <!--  End section-->
    <section class="promo_full">
        <div class="promo_full_wp">
            <div>
                <h3>Müşteriler ne diyor<span>Id tale utinam ius, an mei omnium recusabo iracundia.</span></h3>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="carousel_testimonials">
                                <div>
                                    <div class="box_overlay">
                                        <div class="pic">
                                            <figure><img src="{{ asset('assets') }}/img/testimonial_1.jpg" alt="" class="img-circle">
                                            </figure>
                                            <h4>Roberta<small>12 October 2015</small></h4>
                                        </div>
                                        <div class="comment">
                                            "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret sed, mel cu unum nostrud."
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>

                                <div>
                                    <div class="box_overlay">
                                        <div class="pic">
                                            <figure><img src="{{ asset('assets') }}/img/testimonial_1.jpg" alt="" class="img-circle">
                                            </figure>
                                            <h4>Roberta<small>12 October 2015</small></h4>
                                        </div>
                                        <div class="comment">
                                            "No nam indoctum accommodare, vix ei discere civibus philosophia. Vis ea dicant diceret ocurreret."
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>

                                <div>
                                    <div class="box_overlay">
                                        <div class="pic">
                                            <figure><img src="{{ asset('assets') }}/img/testimonial_1.jpg" alt="" class="img-circle">
                                            </figure>
                                            <h4>Roberta<small>12 October 2015</small></h4>
                                        </div>
                                        <div class="comment">
                                            "No nam indoctum accommodare, vix ei discere civibus philosophia. Vis ea dicant diceret ocurreret."
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>

                            </div>
                            <!-- End carousel_testimonials -->
                        </div>
                        <!-- End col-md-8 -->
                    </div>
                    <!-- End row -->
                </div>
                <!-- End container -->
            </div>
            <!-- End promo_full_wp -->
        </div>
        <!-- End promo_full -->
    </section>
    <!-- End section -->
    <div id="newsletter_container">
        <div class="container margin_60">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h3>En son haberler için Bültenimize abone olun.</h3>
                    <div id="message-newsletter"></div>
                    <form method="post" action="assets/newsletter.php" name="newsletter" id="newsletter" class="form-inline">
                        <input name="email_newsletter" id="email_newsletter" type="email" value="" placeholder="Your Email" class="form-control">
                        <button id="submit-newsletter" class="btn_1"> Abone Ol</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End newsletter_container -->
@endsection

