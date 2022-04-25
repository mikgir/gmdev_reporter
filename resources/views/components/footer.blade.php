<!-- Footer Main -->
<footer id="footer-main" class="container-fluid no-left-padding no-right-padding footer-main">
    <!-- Top Footer -->
    <div class="container-fluid no-left-padding no-right-padding top-footer">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row d-flex justify-content-between">

                <!-- Widget About -->
                <div class="col-md-4 col-sm-8 col-xs-8">
                    <aside class="widget widget_about">
                        <h3 class="widget-title">О НАС</h3>
                        <div class="logo-block">
                            <a href="{{ route('home') }}"><img src="{{ asset('images/logo-2.png') }}"
                                                                          alt="Logo"/></a>
                        </div>
                        <p>Reporter is one of the excellent magazine in the world.</p>
                    </aside>
                </div><!-- Widget About /- -->
            <!-- Widget Links -->
                <div class="col-md-4 col-sm-8 col-xs-8">
                    <aside class="widget widget_categories">
                        <h3 class="widget-title">КАТЕГОРИИ</h3>
                        <ul>
                            <li><a href="#" title="Business">Бизнес </a>(7)</li>
                            <li><a href="#" title="Sports">Спорт</a>(4)</li>
                            <li><a href="#" title="Science">Наука </a>(6)</li>
                            <li><a href="#" title="Economic">Экономика</a>(8)</li>
                            <li><a href="#" title="Politics">Политика</a>(3)</li>
                            <li><a href="#" title="World ">Мир </a>(5)</li>
                        </ul>
                    </aside>
                </div><!-- Widget Links /- -->

                <!-- Widget Category -->
                <div class="col-md-4 col-sm-8 col-xs-8">
                    <aside class="widget widget_tag_cloud">
                        <h3 class="widget-title">ПОПУЛЯРНЫЕ ТЭГИ</h3>
                        <div class="tagcloud">
                            <a href="#" title="Android">Android</a>
                            <a href="#" title="Apple">Apple</a>
                            <a href="#" title="Development">Development</a>
                            <a href="#" title="Dev and Design">Dev and Design</a>
                            <a href="#" title="Gallery">Gallery</a>
                            <a href="#" title="Games">Games</a>
                            <a href="#" title="Life and Style">Life and Style</a>
                            <a href="#" title="Technology">Technology</a>
                            <a href="#" title="Sports">Sports</a>
                        </div>
                    </aside>
                </div><!-- Widget Category /- -->
            </div><!-- Row /- -->
        </div><!-- Container /- -->
    </div><!-- Top Footer -->
    <!-- Bottom Footer -->
    <div class="container-fluid bottom-footer">
        <p>GMdev Reporter &copy; {{ date('Y') }}</p>
    </div><!-- Bottom Footer /- -->
</footer><!-- Footer Main /- -->

