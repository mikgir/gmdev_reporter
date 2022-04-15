@extends('layouts.main')
@section('title',){{ $author['name'] }}@endsection
@section('content')
    <main class="site-main">

        <!-- Author Detail -->
        <div class="container-fluid author-details no-left-padding no-right-padding">
            <!-- Container -->
            <div class="container">
                <div class="author-cnt-block">
                    <i><img src="{{ $author['avatar'] }}" alt="Author" /></i>
                    <div class="author-cnt">
                        <a href="#"><i class="fa fa-envelope"></i>info@youremail.com</a>
                        <a href="#"><i class="fa fa-phone"></i> +1 (234) 567-8900</a>
                        <a href="#"><i class="fa fa-twitter"></i> Follow Us on Twitter</a>
                        <a href="#"><i class="fa fa-globe"></i> Your website address.com</a>
                    </div>
                </div>
                <h3>{{ $author['name'] }} <span>вэб дезайнер</span></h3>
                <p><i class="fa fa-map-marker"></i> Москва - Россия</p>
            </div><!-- Container /- -->
            <!-- Author Tabs -->
            <div class="container-fluid author-tabs no-left-padding no-right-padding">
                <div class="container">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation"><a href="#my-post" aria-controls="my-post" role="tab" data-toggle="tab">мои публикации</a></li>
                        <li role="presentation" class="active"><a href="#about-me" aria-controls="about-me" role="tab" data-toggle="tab"> обо мне</a></li>
                        <li role="presentation"><a href="#popular-video" aria-controls="popular-video" role="tab" data-toggle="tab">мои раьоты</a></li>
                    </ul>
                </div>
            </div><!-- Author Tabs /- -->
        </div><!-- Author Detail -->

        <div class="container-fluid no-left-padding no-right-padding author-post tab-content">
            <!-- My Post -->
            <div role="tabpanel" class="tab-pane" id="my-post">
                <!-- Container -->
                <div class="container">
                    <div class="row">
                        <!-- Content Area -->
                        <div class="col-md-8 col-sm-6 col-xs-6 no-left-padding no-right-padding content-area">

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <!-- Type Post -->
                                <div class="type-post color-1">
                                    <div class="entry-cover"><a href="#"><img src="assets/images/mypost1.jpg" alt="Post" /></a></div>
                                    <div class="entry-content">
                                        <div class="post-format"><i class="fa fa-play"></i></div>
                                        <div class="post-category"><a href="#" title="business">business</a></div>
                                        <h3 class="entry-title"><a href="#">Mahindra To Buy 51% Stake In Peugeot Motorcycle</a></h3>
                                        <p>Reporter is one of the excellent magazine in the world.Newshub magazine reached many readers very soon.</p>
                                        <div class="entry-footer">
                                            <span class="post-date"><a href="#">02 July, 2016</a></span>
                                            <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">320</a></span>
                                            <span class="post-view"><i class="fa fa-eye"></i><a href="#">2350</a></span>
                                        </div>
                                        <a href="#" title="Watch Now">Watch Now<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Type Post /- -->
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <!-- Type Post -->
                                <div class="type-post color-5">
                                    <div class="entry-cover"><a href="#"><img src="assets/images/mypost2.jpg" alt="Post" /></a></div>
                                    <div class="entry-content">
                                        <div class="post-format"><i class="fa fa-play"></i></div>
                                        <div class="post-category"><a href="#" title="Sports">Sports</a></div>
                                        <h3 class="entry-title"><a href="#">Grand Canyon Considers Changes to Back country</a></h3>
                                        <p>Reporter is one of the excellent magazine in the world.Newshub magazine reached many readers very soon.</p>
                                        <div class="entry-footer">
                                            <span class="post-date"><a href="#">28 Augest, 2016</a></span>
                                            <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">651</a></span>
                                            <span class="post-view"><i class="fa fa-eye"></i><a href="#">253</a></span>
                                        </div>
                                        <a href="#" title="Watch Now">Watch Now<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Type Post /- -->
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <!-- Type Post -->
                                <div class="type-post color-4">
                                    <div class="entry-cover"><a href="#"><img src="assets/images/mypost3.jpg" alt="Post" /></a></div>
                                    <div class="entry-content">
                                        <div class="post-format"><i class="fa fa-play"></i></div>
                                        <div class="post-category"><a href="#" title="cricket">cricket</a></div>
                                        <h3 class="entry-title"><a href="#">Grand Canyon Considers Changes to Back country</a></h3>
                                        <p>Reporter is one of the excellent magazine in the world.Newshub magazine reached many readers very soon.</p>
                                        <div class="entry-footer">
                                            <span class="post-date"><a href="#">13 November, 2016</a></span>
                                            <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">651</a></span>
                                            <span class="post-view"><i class="fa fa-eye"></i><a href="#">253</a></span>
                                        </div>
                                        <a href="#" title="Watch Now">Watch Now<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Type Post /- -->
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <!-- Type Post -->
                                <div class="type-post color-2">
                                    <div class="entry-cover"><a href="#"><img src="assets/images/mypost4.jpg" alt="Post" /></a></div>
                                    <div class="entry-content">
                                        <div class="post-format"><i class="fa fa-play"></i></div>
                                        <div class="post-category"><a href="#" title="Science">Science</a></div>
                                        <h3 class="entry-title"><a href="#">Grand Canyon Considers Changes to Back country</a></h3>
                                        <p>Reporter is one of the excellent magazine in the world.Newshub magazine reached many readers very soon.</p>
                                        <div class="entry-footer">
                                            <span class="post-date"><a href="#">5 July, 2016</a></span>
                                            <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">651</a></span>
                                            <span class="post-view"><i class="fa fa-eye"></i><a href="#">253</a></span>
                                        </div>
                                        <a href="#" title="Watch Now">Watch Now<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Type Post /- -->
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <!-- Type Post -->
                                <div class="type-post color-3">
                                    <div class="entry-cover"><a href="#"><img src="assets/images/mypost5.jpg" alt="Post" /></a></div>
                                    <div class="entry-content">
                                        <div class="post-format"><i class="fa fa-play"></i></div>
                                        <div class="post-category"><a href="#" title="Business">Business</a></div>
                                        <h3 class="entry-title"><a href="#">Grand Canyon Considers Changes to Back country</a></h3>
                                        <p>Reporter is one of the excellent magazine in the world.Newshub magazine reached many readers very soon.</p>
                                        <div class="entry-footer">
                                            <span class="post-date"><a href="#">7 September, 2016</a></span>
                                            <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">651</a></span>
                                            <span class="post-view"><i class="fa fa-eye"></i><a href="#">253</a></span>
                                        </div>
                                        <a href="#" title="Watch Now">Watch Now<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Type Post /- -->
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <!-- Type Post -->
                                <div class="type-post color-6">
                                    <div class="entry-cover"><a href="#"><img src="assets/images/mypost6.jpg" alt="Post" /></a></div>
                                    <div class="entry-content">
                                        <div class="post-format"><i class="fa fa-play"></i></div>
                                        <div class="post-category"><a href="#" title="TECHNOLOGY">TECHNOLOGY</a></div>
                                        <h3 class="entry-title"><a href="#">Grand Canyon Considers Changes to Back country</a></h3>
                                        <p>Reporter is one of the excellent magazine in the world.Newshub magazine reached many readers very soon.</p>
                                        <div class="entry-footer">
                                            <span class="post-date"><a href="#">15 Augest, 2016</a></span>
                                            <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">127</a></span>
                                            <span class="post-view"><i class="fa fa-eye"></i><a href="#">756</a></span>
                                        </div>
                                        <a href="#" title="Watch Now">Watch Now<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Type Post /- -->
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <!-- Type Post -->
                                <div class="type-post color-2">
                                    <div class="entry-cover"><a href="#"><img src="assets/images/mypost7.jpg" alt="Post" /></a></div>
                                    <div class="entry-content">
                                        <div class="post-format"><i class="fa fa-play"></i></div>
                                        <div class="post-category"><a href="#" title="sports">sports</a></div>
                                        <h3 class="entry-title"><a href="#">Grand Canyon Considers Changes to Back country</a></h3>
                                        <p>Reporter is one of the excellent magazine in the world.Newshub magazine reached many readers very soon.</p>
                                        <div class="entry-footer">
                                            <span class="post-date"><a href="#">7 September, 2016</a></span>
                                            <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">651</a></span>
                                            <span class="post-view"><i class="fa fa-eye"></i><a href="#">253</a></span>
                                        </div>
                                        <a href="#" title="Watch Now">Watch Now<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Type Post /- -->
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <!-- Type Post -->
                                <div class="type-post color-5">
                                    <div class="entry-cover"><a href="#"><img src="assets/images/mypost8.jpg" alt="Post" /></a></div>
                                    <div class="entry-content">
                                        <div class="post-format"><i class="fa fa-play"></i></div>
                                        <div class="post-category"><a href="#" title="POLITICS">POLITICS</a></div>
                                        <h3 class="entry-title"><a href="#">Grand Canyon Considers Changes to Back country</a></h3>
                                        <p>Reporter is one of the excellent magazine in the world.Newshub magazine reached many readers very soon.</p>
                                        <div class="entry-footer">
                                            <span class="post-date"><a href="#">15 Augest, 2016</a></span>
                                            <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">127</a></span>
                                            <span class="post-view"><i class="fa fa-eye"></i><a href="#">756</a></span>
                                        </div>
                                        <a href="#" title="Watch Now">Watch Now<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Type Post /- -->
                            </div>

                        </div><!-- Content Area /- -->

                        <!-- Widget Area -->
                        <div class="col-md-4 col-sm-6 col-xs-6 widget-area">
                            <!-- Widget Recent Post -->
                            <aside class="widget widget_latestposts">
                                <h3 class="widget-title">Recent Posts</h3>
                                <div class="latest-content-box">
                                    <div class="latest-content color-5">
                                        <a href="#" title="Recent Posts"><i><img src="assets/images/wd-rcnt-1.jpg" class="wp-post-image" alt="blog-1"></i></a>
                                        <span><a href="#" title="POLITICS">POLITICS</a> <a href="#">22 OCT 2014</a></span>
                                        <h5><a title="Qaim says prominent people arrested" href="#">Qaim says prominent people arrested </a></h5>
                                    </div>
                                    <div class="latest-content color-2">
                                        <a href="#" title="Recent Posts"><i><img src="assets/images/wd-rcnt-2.jpg" class="wp-post-image" alt="blog-1"></i></a>
                                        <span><a href="#" title="SPORTS">SPORTS</a> <a href="#">22 OCT 2014</a></span>
                                        <h5><a title="Way now cleared for Australian" href="#">Way now cleared for Australian </a></h5>
                                    </div>
                                    <div class="latest-content color-3">
                                        <a href="#" title="Recent Posts"><i><img src="assets/images/wd-rcnt-3.jpg" class="wp-post-image" alt="blog-3"/></i></a>
                                        <span><a href="#" title="BUSINESS">BUSINESS</a> <a href="#">22 OCT 2014</a></span>
                                        <h5><a title="EU exit would leave Britain with zero" href="#">EU exit would leave Britain with zero</a></h5>
                                    </div>
                                </div>
                                <div class="see-more"><a href="#" title="SEE MORE POST">SEE MORE POST</a></div>
                            </aside><!-- Widget Recent Post -->

                            <!-- Popular Video -->
                            <aside class="widget widget_video">
                                <h3 class="widget-title">POPULAR VIDEOS</h3>
                                <div class="video-block">
                                    <div class="video-post">
                                        <a href="#"><img src="assets/images/popular-video1.jpg" alt="Popular Video" /></a>
                                        <h5><a href="#"><i class="fa fa-play"></i>Qaim says prominent people arrested </a></h5>
                                    </div>
                                    <div class="video-post">
                                        <a href="#"><img src="assets/images/popular-video2.jpg" alt="Popular Video" /></a>
                                        <h5><a href="#"><i class="fa fa-play"></i>Way now cleared for Australian </a></h5>
                                    </div>
                                    <div class="video-post">
                                        <a href="#"><img src="assets/images/popular-video3.jpg" alt="Popular Video" /></a>
                                        <h5><a href="#"><i class="fa fa-play"></i>Way now cleared for Australian </a></h5>
                                    </div>
                                </div>
                                <div class="see-more"><a href="#" title="SEE MORE Video">SEE MORE Video</a></div>
                            </aside><!-- Popular Video /- -->
                        </div><!-- Widget Area /- -->
                    </div>
                </div><!-- Container /- -->
            </div><!-- My Post -->

            <!-- About Me -->
            <div role="tabpanel" class="tab-pane active" id="about-me">
                <div class="container">
                    <!-- We Are Doing -->
                    <div class="container-fluid we-are-doing-section">
                        <!-- Author Content -->
                        <div class="col-md-6 author-content">
                            <h3>ОБО МНЕ</h3>
                            <p>{{ $author['description'] }}</p>
                            <a href="#" title="Contact Us">Написать мне</a>
                        </div><!-- Author Content -->
                        <div class="col-md-6 author-image-block">
                            <i><img src="{{ $author['image'] }}" alt="Author Image" /></i>
                        </div>
                    </div><!-- We Are Doing /- -->

                    <!-- Our Experience and Skills -->
                    <div class="container-fluid experience-skills">
                        <h3 class="block-title">MY EXPERIENCE &amp; SKILLS</h3>
                        <!-- Accoridan -->
                        <div class="col-md-6 col-sm-12">
                            <div class="accordion-block">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="accordion_1_1">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion1_1" aria-expanded="true">themeforest (2011 - current)</a>
                                            </h4>
                                        </div>
                                        <div id="accordion1_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="accordion_1_1">
                                            <div class="panel-body">
                                                <div class="experience-box">
                                                    <img src="assets/images/experience1.jpg" alt="Experience" />
                                                    <h5>Author</h5>
                                                    <p>Newshub is one of the excellent magazine in the world.Newshub magazine reached many readers.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="accordion_1_2">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion1_2" aria-expanded="false">codecanyon (2009 - 2011)</a>
                                            </h4>
                                        </div>
                                        <div id="accordion1_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion_1_2">
                                            <div class="panel-body">
                                                <div class="experience-box">
                                                    <img src="assets/images/experience1.jpg" alt="Experience" />
                                                    <h5>Author</h5>
                                                    <p>Newshub is one of the excellent magazine in the world.Newshub magazine reached many readers.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="accordion_1_3">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion1_3" aria-expanded="false">graphicriver (2006 - 2008)</a>
                                            </h4>
                                        </div>
                                        <div id="accordion1_3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion_1_3">
                                            <div class="panel-body">
                                                <div class="experience-box">
                                                    <img src="assets/images/experience1.jpg" alt="Experience" />
                                                    <h5>Author</h5>
                                                    <p>Newshub is one of the excellent magazine in the world.Newshub magazine reached many readers.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Accoridan /- -->

                        <!-- Skill Block -->
                        <div class="col-md-6 col-sm-12">
                            <div id="skill_type-1" class="skill-block">
                                <div class="skill-progress-box">
                                    <h3>web development <span data-skill_percent="95" id="skill_1_count-1"></span></h3>
                                    <div class="progress-box">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" id="skill_bar_1_count-1"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-progress-box">
                                    <h3>photography <span data-skill_percent="89" id="skill_1_count-2"></span></h3>
                                    <div class="progress-box">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" id="skill_bar_1_count-2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-progress-box">
                                    <h3>graphic design <span data-skill_percent="80" id="skill_1_count-3"></span></h3>
                                    <div class="progress-box">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" id="skill_bar_1_count-3"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-progress-box">
                                    <h3>business learning <span data-skill_percent="92" id="skill_1_count-4"></span></h3>
                                    <div class="progress-box">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" id="skill_bar_1_count-4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Skill Block /- -->
                    </div>
                </div>
            </div><!-- About Me /- -->

            <!-- Popular Video -->
            <div role="tabpanel" class="tab-pane" id="popular-video">
                <!-- Container -->
                <div class="container">
                    <div class="row">
                        <!-- Content Area -->
                        <div class="col-md-8 col-sm-6 col-xs-6 no-left-padding no-right-padding content-area">

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <!-- Type Post -->
                                <div class="type-post color-1">
                                    <div class="entry-cover"><a href="#"><img src="assets/images/mypost1.jpg" alt="Post" /></a></div>
                                    <div class="entry-content">
                                        <div class="post-format"><i class="fa fa-play"></i></div>
                                        <div class="post-category"><a href="#" title="business">business</a></div>
                                        <h3 class="entry-title"><a href="#">Mahindra To Buy 51% Stake In Peugeot Motorcycle</a></h3>
                                        <p>Reporter is one of the excellent magazine in the world.Newshub magazine reached many readers very soon.</p>
                                        <div class="entry-footer">
                                            <span class="post-date"><a href="#">02 July, 2016</a></span>
                                            <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">320</a></span>
                                            <span class="post-view"><i class="fa fa-eye"></i><a href="#">2350</a></span>
                                        </div>
                                        <a href="#" title="Watch Now">Watch Now<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Type Post /- -->
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <!-- Type Post -->
                                <div class="type-post color-5">
                                    <div class="entry-cover"><a href="#"><img src="assets/images/mypost2.jpg" alt="Post" /></a></div>
                                    <div class="entry-content">
                                        <div class="post-format"><i class="fa fa-play"></i></div>
                                        <div class="post-category"><a href="#" title="Sports">Sports</a></div>
                                        <h3 class="entry-title"><a href="#">Grand Canyon Considers Changes to Back country</a></h3>
                                        <p>Reporter is one of the excellent magazine in the world.Newshub magazine reached many readers very soon.</p>
                                        <div class="entry-footer">
                                            <span class="post-date"><a href="#">28 Augest, 2016</a></span>
                                            <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">651</a></span>
                                            <span class="post-view"><i class="fa fa-eye"></i><a href="#">253</a></span>
                                        </div>
                                        <a href="#" title="Watch Now">Watch Now<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Type Post /- -->
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <!-- Type Post -->
                                <div class="type-post color-4">
                                    <div class="entry-cover"><a href="#"><img src="assets/images/mypost3.jpg" alt="Post" /></a></div>
                                    <div class="entry-content">
                                        <div class="post-format"><i class="fa fa-play"></i></div>
                                        <div class="post-category"><a href="#" title="cricket">cricket</a></div>
                                        <h3 class="entry-title"><a href="#">Grand Canyon Considers Changes to Back country</a></h3>
                                        <p>Reporter is one of the excellent magazine in the world.Newshub magazine reached many readers very soon.</p>
                                        <div class="entry-footer">
                                            <span class="post-date"><a href="#">13 November, 2016</a></span>
                                            <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">651</a></span>
                                            <span class="post-view"><i class="fa fa-eye"></i><a href="#">253</a></span>
                                        </div>
                                        <a href="#" title="Watch Now">Watch Now<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Type Post /- -->
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <!-- Type Post -->
                                <div class="type-post color-2">
                                    <div class="entry-cover"><a href="#"><img src="assets/images/mypost4.jpg" alt="Post" /></a></div>
                                    <div class="entry-content">
                                        <div class="post-format"><i class="fa fa-play"></i></div>
                                        <div class="post-category"><a href="#" title="Science">Science</a></div>
                                        <h3 class="entry-title"><a href="#">Grand Canyon Considers Changes to Back country</a></h3>
                                        <p>Reporter is one of the excellent magazine in the world.Newshub magazine reached many readers very soon.</p>
                                        <div class="entry-footer">
                                            <span class="post-date"><a href="#">5 July, 2016</a></span>
                                            <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">651</a></span>
                                            <span class="post-view"><i class="fa fa-eye"></i><a href="#">253</a></span>
                                        </div>
                                        <a href="#" title="Watch Now">Watch Now<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Type Post /- -->
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <!-- Type Post -->
                                <div class="type-post color-3">
                                    <div class="entry-cover"><a href="#"><img src="assets/images/mypost5.jpg" alt="Post" /></a></div>
                                    <div class="entry-content">
                                        <div class="post-format"><i class="fa fa-play"></i></div>
                                        <div class="post-category"><a href="#" title="Business">Business</a></div>
                                        <h3 class="entry-title"><a href="#">Grand Canyon Considers Changes to Back country</a></h3>
                                        <p>Reporter is one of the excellent magazine in the world.Newshub magazine reached many readers very soon.</p>
                                        <div class="entry-footer">
                                            <span class="post-date"><a href="#">7 September, 2016</a></span>
                                            <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">651</a></span>
                                            <span class="post-view"><i class="fa fa-eye"></i><a href="#">253</a></span>
                                        </div>
                                        <a href="#" title="Watch Now">Watch Now<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Type Post /- -->
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <!-- Type Post -->
                                <div class="type-post color-6">
                                    <div class="entry-cover"><a href="#"><img src="assets/images/mypost6.jpg" alt="Post" /></a></div>
                                    <div class="entry-content">
                                        <div class="post-format"><i class="fa fa-play"></i></div>
                                        <div class="post-category"><a href="#" title="TECHNOLOGY">TECHNOLOGY</a></div>
                                        <h3 class="entry-title"><a href="#">Grand Canyon Considers Changes to Back country</a></h3>
                                        <p>Reporter is one of the excellent magazine in the world.Newshub magazine reached many readers very soon.</p>
                                        <div class="entry-footer">
                                            <span class="post-date"><a href="#">15 Augest, 2016</a></span>
                                            <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">127</a></span>
                                            <span class="post-view"><i class="fa fa-eye"></i><a href="#">756</a></span>
                                        </div>
                                        <a href="#" title="Watch Now">Watch Now<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Type Post /- -->
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <!-- Type Post -->
                                <div class="type-post color-2">
                                    <div class="entry-cover"><a href="#"><img src="assets/images/mypost7.jpg" alt="Post" /></a></div>
                                    <div class="entry-content">
                                        <div class="post-format"><i class="fa fa-play"></i></div>
                                        <div class="post-category"><a href="#" title="sports">sports</a></div>
                                        <h3 class="entry-title"><a href="#">Grand Canyon Considers Changes to Back country</a></h3>
                                        <p>Reporter is one of the excellent magazine in the world.Newshub magazine reached many readers very soon.</p>
                                        <div class="entry-footer">
                                            <span class="post-date"><a href="#">7 September, 2016</a></span>
                                            <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">651</a></span>
                                            <span class="post-view"><i class="fa fa-eye"></i><a href="#">253</a></span>
                                        </div>
                                        <a href="#" title="Watch Now">Watch Now<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Type Post /- -->
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <!-- Type Post -->
                                <div class="type-post color-5">
                                    <div class="entry-cover"><a href="#"><img src="assets/images/mypost8.jpg" alt="Post" /></a></div>
                                    <div class="entry-content">
                                        <div class="post-format"><i class="fa fa-play"></i></div>
                                        <div class="post-category"><a href="#" title="POLITICS">POLITICS</a></div>
                                        <h3 class="entry-title"><a href="#">Grand Canyon Considers Changes to Back country</a></h3>
                                        <p>Reporter is one of the excellent magazine in the world.Newshub magazine reached many readers very soon.</p>
                                        <div class="entry-footer">
                                            <span class="post-date"><a href="#">15 Augest, 2016</a></span>
                                            <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">127</a></span>
                                            <span class="post-view"><i class="fa fa-eye"></i><a href="#">756</a></span>
                                        </div>
                                        <a href="#" title="Watch Now">Watch Now<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- Type Post /- -->
                            </div>

                        </div><!-- Content Area /- -->

                        <!-- Widget Area -->
                        <div class="col-md-4 col-sm-6 col-xs-6 widget-area">
                            <!-- Widget Recent Post -->
                            <aside class="widget widget_latestposts">
                                <h3 class="widget-title">Recent Posts</h3>
                                <div class="latest-content-box">
                                    <div class="latest-content color-5">
                                        <a href="#" title="Recent Posts"><i><img src="assets/images/wd-rcnt-1.jpg" class="wp-post-image" alt="blog-1"></i></a>
                                        <span><a href="#" title="POLITICS">POLITICS</a> <a href="#">22 OCT 2014</a></span>
                                        <h5><a title="Qaim says prominent people arrested" href="#">Qaim says prominent people arrested </a></h5>
                                    </div>
                                    <div class="latest-content color-2">
                                        <a href="#" title="Recent Posts"><i><img src="assets/images/wd-rcnt-2.jpg" class="wp-post-image" alt="blog-1"></i></a>
                                        <span><a href="#" title="SPORTS">SPORTS</a> <a href="#">22 OCT 2014</a></span>
                                        <h5><a title="Way now cleared for Australian" href="#">Way now cleared for Australian </a></h5>
                                    </div>
                                    <div class="latest-content color-3">
                                        <a href="#" title="Recent Posts"><i><img src="assets/images/wd-rcnt-3.jpg" class="wp-post-image" alt="blog-3"/></i></a>
                                        <span><a href="#" title="BUSINESS">BUSINESS</a> <a href="#">22 OCT 2014</a></span>
                                        <h5><a title="EU exit would leave Britain with zero" href="#">EU exit would leave Britain with zero</a></h5>
                                    </div>
                                </div>
                                <div class="see-more"><a href="#" title="SEE MORE POST">SEE MORE POST</a></div>
                            </aside><!-- Widget Recent Post -->

                            <!-- Popular Video -->
                            <aside class="widget widget_video">
                                <h3 class="widget-title">POPULAR VIDEOS</h3>
                                <div class="video-block">
                                    <div class="video-post">
                                        <a href="#"><img src="assets/images/popular-video1.jpg" alt="Popular Video" /></a>
                                        <h5><a href="#"><i class="fa fa-play"></i>Qaim says prominent people arrested </a></h5>
                                    </div>
                                    <div class="video-post">
                                        <a href="#"><img src="assets/images/popular-video2.jpg" alt="Popular Video" /></a>
                                        <h5><a href="#"><i class="fa fa-play"></i>Way now cleared for Australian </a></h5>
                                    </div>
                                    <div class="video-post">
                                        <a href="#"><img src="assets/images/popular-video3.jpg" alt="Popular Video" /></a>
                                        <h5><a href="#"><i class="fa fa-play"></i>Way now cleared for Australian </a></h5>
                                    </div>
                                </div>
                                <div class="see-more"><a href="#" title="SEE MORE Video">SEE MORE Video</a></div>
                            </aside><!-- Popular Video /- -->
                        </div><!-- Widget Area /- -->
                    </div>
                </div><!-- Container /- -->
            </div><!-- Popular Video -->

        </div>

    </main>

@endsection
