<footer>
    <section class="footer-top">
        <div class="bg-footer-top">
            <div class="container">

                <section class="links-section">

                    <div class="col-left">

                        <div class="col-left-top">

                            <div class="col col-links">
                                <h3>dc comics</h3>
                                <ul>
                                    @foreach ($dc_comics_links as $link)
                                        <li>
                                            <a href="">{{ $link }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                                <h3>shop</h3>
                                <ul>
                                    @foreach ($shop_links as $link)
                                        <li>
                                            <a href="">{{ $link }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="col col-links">
                                <h3>dc</h3>
                                <ul>
                                    @foreach ($dc_links as $link)
                                        <li>
                                            <a href="">{{ $link }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="col col-links">
                                <h3>sites</h3>
                                <ul>
                                    @foreach ($sites_links as $link)
                                        <li>
                                            <a href="">{{ $link }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-left-bottom">
                            <div class="cookies-set">
                                <p>All Site Content TM and 2020 DC Entertainment, unless oyherwise <span>noted
                                        here</span>. All rights reserved.</p>
                                <a href="">Cookies Setting</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-right"></div>

                </section>

            </div>

        </div>
    </section>

    <section class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-left">
                    <div class="btn-sign">sign-up now!</div>
                </div>

                <div class="col-right">
                    <span>Follow us</span>
                    <ul>
                        <li>
                            <div class="social-logo">
                                <a href="">
                                    <img src="{{ asset('images/footer-facebook.png') }}" alt="">
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="social-logo">
                                <a href="">
                                    <img src="{{ asset('images/footer-twitter.png') }}" alt="">
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="social-logo">
                                <a href="">
                                    <img src="{{ asset('images/footer-youtube.png') }}" alt="">
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="social-logo">
                                <a href="">
                                    <img src="{{ asset('images/footer-pinterest.png') }}" alt="">
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="social-logo">
                                <a href="">
                                    <img src="{{ asset('images/footer-periscope.png') }}" alt="">
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</footer>
