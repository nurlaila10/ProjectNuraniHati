<!doctype html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/nurture/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Jan 2023 07:00:27 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&amp;family=Muli:wght@400;700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <title>Nurture Free HTML Template by Colorlib</title>
    <script nonce="740b1bf8-5910-4fe2-a8bd-1bed822194aa">
        (function(w, d) {
            ! function(eK, eL, eM, eN) {
                eK.zarazData = eK.zarazData || {};
                eK.zarazData.executed = [];
                eK.zaraz = {
                    deferred: [],
                    listeners: []
                };
                eK.zaraz.q = [];
                eK.zaraz._f = function(eO) {
                    return function() {
                        var eP = Array.prototype.slice.call(arguments);
                        eK.zaraz.q.push({
                            m: eO,
                            a: eP
                        })
                    }
                };
                for (const eQ of ["track", "set", "debug"]) eK.zaraz[eQ] = eK.zaraz._f(eQ);
                eK.zaraz.init = () => {
                    var eR = eL.getElementsByTagName(eN)[0],
                        eS = eL.createElement(eN),
                        eT = eL.getElementsByTagName("title")[0];
                    eT && (eK.zarazData.t = eL.getElementsByTagName("title")[0].text);
                    eK.zarazData.x = Math.random();
                    eK.zarazData.w = eK.screen.width;
                    eK.zarazData.h = eK.screen.height;
                    eK.zarazData.j = eK.innerHeight;
                    eK.zarazData.e = eK.innerWidth;
                    eK.zarazData.l = eK.location.href;
                    eK.zarazData.r = eL.referrer;
                    eK.zarazData.k = eK.screen.colorDepth;
                    eK.zarazData.n = eL.characterSet;
                    eK.zarazData.o = (new Date).getTimezoneOffset();
                    if (eK.dataLayer)
                        for (const eX of Object.entries(Object.entries(dataLayer).reduce(((eY, eZ) => ({
                                ...eY[1],
                                ...eZ[1]
                            }))))) zaraz.set(eX[0], eX[1], {
                            scope: "page"
                        });
                    eK.zarazData.q = [];
                    for (; eK.zaraz.q.length;) {
                        const e_ = eK.zaraz.q.shift();
                        eK.zarazData.q.push(e_)
                    }
                    eS.defer = !0;
                    for (const fa of [localStorage, sessionStorage]) Object.keys(fa || {}).filter((fc => fc
                        .startsWith("_zaraz_"))).forEach((fb => {
                        try {
                            eK.zarazData["z_" + fb.slice(7)] = JSON.parse(fa.getItem(fb))
                        } catch {
                            eK.zarazData["z_" + fb.slice(7)] = fa.getItem(fb)
                        }
                    }));
                    eS.referrerPolicy = "origin";
                    eS.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(eK
                        .zarazData)));
                    eR.parentNode.insertBefore(eS, eR)
                };
                ["complete", "interactive"].includes(eL.readyState) ? zaraz.init() : eK.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>
</head>

<body>
    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <nav class="site-nav mb-5">
        @include('layouts-landingPage.partial.topbar')
    </nav>
    <div class="untree_co-hero overlay" style="background-image: url('admin/assets/images/hero_bg.jpg');">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="row justify-content-left">
                        <div class="col-lg-6 text-center text-lg-left">
                            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Learning
                                Center for Your Kids</h1>
                            <div class="mb-5 text-white desc mx-" data-aos="fade-up" data-aos-delay="200">
                                <p>Another free template by <a href="https://colorlib.com/" target="_blank"
                                        class="link-highlight">Colorlib</a>. Far far away, behind the word mountains,
                                    far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section py-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="block-v1 color-1" data-aos="fade-up" data-aos-delay="0">
                        <span class="flaticon-teach"></span>
                        <h3>Learn</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="block-v1 color-2" data-aos="fade-up" data-aos-delay="100">
                        <span class="flaticon-bear"></span>
                        <h3>Play</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="block-v1 color-3" data-aos="fade-up" data-aos-delay="200">
                        <span class="flaticon-baby"></span>
                        <h3>Meal</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom text-center mb-4">What We Offer</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature">
                        <span class="icon-music_note color-1"></span>
                        <h3>Music Class</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature">
                        <span class="icon-calculator color-2"></span>
                        <h3>Math Class</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature">
                        <span class="icon-leanpub color-3"></span>
                        <h3>English Class</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay=100">
                    <div class="feature">
                        <span class="icon-book color-4"></span>
                        <h3>Reading for Kids</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature">
                        <span class="icon-change_history color-5"></span>
                        <h3>History Class</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature">
                        <span class="icon-class color-6"></span>
                        <h3>Active Class</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section pt-0 bg-img overlay"
        style="background-image: url('admin/assets/images/hero_bg_2.jpg');">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-lg-7">
                    <h2 class="text-white mb-3" data-aos="fade-up" data-aos-delay="0">Education for Tomorrow's
                        Leaders</h2>
                    <p class="text-white h5 mb-4" data-aos="fade-up" data-aos-delay="100">Far far away, behind the
                        word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p><a href="#" class="btn btn-primary" data-aos="fade-up" data-aos-delay="200">Enroll
                            Now</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 mb-5">
                    <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0">About Us</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the
                        countries Vokalia and Consonantia, there live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <ul class="list-unstyled ul-check mb-5 primary" data-aos="fade-up" data-aos-delay="200">
                        <li>Separated they live</li>
                        <li>Bookmarksgrove right at the coast</li>
                        <li>large language ocean</li>
                    </ul>
                    <div class="row count-numbers mb-5">
                        <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                            <span class="counter d-block"><span data-number="4000">0</span><span>+</span></span>
                            <span class="caption-2">Students</span>
                        </div>
                        <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <span class="counter d-block"><span data-number="49">0</span><span></span></span>
                            <span class="caption-2">Teachers</span>
                        </div>
                        <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <span class="counter d-block"><span data-number="12">0</span><span></span></span>
                            <span class="caption-2">Awards</span>
                        </div>
                    </div>
                    <p data-aos="fade-up" data-aos-delay="200">
                        <a href="#" class="btn btn-primary">Admission</a>
                        <a href="#" class="btn btn-outline-primary">Learn More</a>
                    </p>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="bg-1"></div>
                    <a href="https://vimeo.com/342333493" data-fancybox class="video-wrap">
                        <span class="play-wrap"><span class="icon-play"></span></span>
                        <img src="images/about_1.jpg" alt="Image" class="img-fluid rounded">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom text-center mb-4">School News</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>
            </div>
            <div class="row align-items-stretch">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-h d-flex h-100">
                        <figure>
                            <img src="images/hero_bg.jpg" alt="Image">
                        </figure>
                        <div class="media-h-body">
                            <h2 class="mb-3"><a href="#">Education for Tomorrow's Leaders</a></h2>
                            <div class="meta "><span class="icon-calendar mr-2"></span><span>June 22, 2020</span>
                                <span class="icon-person mr-2"></span>Colorlib</div>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="media-h d-flex h-100">
                        <figure>
                            <img src="images/hero_bg_2.jpg" alt="Image">
                        </figure>
                        <div class="media-h-body">
                            <h2 class="mb-3"><a href="#">Enroll Your Kids This Summer to get 30% off</a></h2>
                            <div class="meta "><span class="icon-calendar mr-2"></span><span>June 22, 2020</span>
                                <span class="icon-person mr-2"></span>Colorlib</div>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="line-bottom text-center mb-4">Pricing</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="00">
                    <div class="pricing">
                        <div class="pricing-img mb-4"><img src="images/1x/asset-1.png" alt="Image"
                                class="img-fluid"></div>
                        <div class="pricing-body">
                            <h3 class="pricing-plan">Infant</h3>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                and Consonantia, there live the blind texts.</p>
                            <div class="price"><span class="fig">$50.99</span><span>/month</span></div>
                            <p><a href="#" class="btn btn-outline-primary">Get Started</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing">
                        <div class="pricing-img mb-4"><img src="images/1x/asset-2.png" alt="Image"
                                class="img-fluid"></div>
                        <div class="pricing-body">
                            <h3 class="pricing-plan">Toddler</h3>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                and Consonantia, there live the blind texts.</p>
                            <div class="price"><span class="fig">$99.99</span><span>/month</span></div>
                            <p><a href="#" class="btn btn-primary">Get Started</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing">
                        <div class="pricing-img mb-4"><img src="images/1x/asset-3.png" alt="Image"
                                class="img-fluid"></div>
                        <div class="pricing-body">
                            <h3 class="pricing-plan">Lad</h3>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                and Consonantia, there live the blind texts.</p>
                            <div class="price"><span class="fig">$199.99</span><span>/month</span></div>
                            <p><a href="#" class="btn btn-outline-primary">Get Started</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section">
        <div class="bg-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mr-auto mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
                    <h3 class="line-bottom mb-4">Testimonials</h3>
                    <div class="owl-carousel wide-slider-testimonial">
                        <div class="item">
                            <blockquote class="block-testimonial">
                                <p>
                                    &ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
                                    at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                <div class="author">
                                    <img src="images/person_1.jpg" alt="Free template by TemplateUX">
                                    <h3>John Doe</h3>
                                    <p class="position">CEO, Founder</p>
                                </div>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="block-testimonial">
                                <p>
                                    &ldquo;When she reached the first hills of the Italic Mountains, she had a last view
                                    back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village
                                    and the subline of her own road, the Line Lane. Pityful a rethoric question ran over
                                    her cheek, then she continued her way.&rdquo;</p>
                                <div class="author">
                                    <img src="images/person_2.jpg" alt="Free template by TemplateUX">
                                    <h3>James Woodland</h3>
                                    <p class="position">Designer at Facebook</p>
                                </div>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="block-testimonial">
                                <p>
                                    &ldquo;A small river named Duden flows by their place and supplies it with the
                                    necessary regelialia. It is a paradisematic country, in which roasted parts of
                                    sentences fly into your mouth.&rdquo;</p>
                                <div class="author">
                                    <img src="images/person_3.jpg" alt="Free template by TemplateUX">
                                    <h3>Rob Smith</h3>
                                    <p class="position">Product Designer at Twitter</p>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 ml-auto" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="line-bottom mb-4">Why Choose Us</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. </p>
                    <div class="custom-accordion" id="accordion_1">
                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Good
                                    Teachers and Staffs</button>
                            </h2>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion_1">
                                <div class="accordion-body">
                                    <div class="d-flex">
                                        <div class="accordion-img mr-4">
                                            <img src="images/about_1.jpg" alt="Image" class="img-fluid">
                                        </div>
                                        <div>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia
                                                and Consonantia, there live the blind texts. </p>
                                            <p>Separated they live in Bookmarksgrove right at the coast of the
                                                Semantics, a large language ocean.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">We
                                    Value Good Characters</button>
                            </h2>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion_1">
                                <div class="accordion-body">
                                    <div class="d-flex">
                                        <div class="accordion-img mr-4">
                                            <img src="images/about_2.jpg" alt="Image" class="img-fluid">
                                        </div>
                                        <div>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia
                                                and Consonantia, there live the blind texts. </p>
                                            <p>Separated they live in Bookmarksgrove right at the coast of the
                                                Semantics, a large language ocean.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">Your Children are Safe</button>
                            </h2>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion_1">
                                <div class="accordion-body">
                                    <div class="d-flex">
                                        <div class="accordion-img mr-4">
                                            <img src="images/about_1.jpg" alt="Image" class="img-fluid">
                                        </div>
                                        <div>
                                            <p>When she reached the first hills of the Italic Mountains, she had a last
                                                view back on the skyline of her hometown Bookmarksgrove, the headline of
                                                Alphabet Village and the subline of her own road, the Line Lane.</p>
                                            <p>Pityful a rethoric question ran over her cheek, then she continued her
                                                way.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mr-auto">
                    <div class="widget">
                        <h3>About Nurture<span class="text-primary">.</span> </h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                    <div class="widget">
                        <h3>Connect</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-pinterest"></span></a></li>
                            <li><a href="#"><span class="icon-dribbble"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 ml-auto">
                    <div class="widget">
                        <h3>Projects</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">HTML5</a></li>
                            <li><a href="#">CSS3</a></li>
                            <li><a href="#">jQuery</a></li>
                            <li><a href="#">Bootstrap</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget">
                        <h3>Gallery</h3>
                        <ul class="instafeed instagram-gallery list-unstyled">
                            <li><a class="instagram-item" href="{{ asset('admin/assets/images/gal_1.jpg') }}"
                                    data-fancybox="gal"><img src="{{ asset('admin/assets/images/gal_1.jpg') }}"
                                        alt="" width="72" height="72"></a>
                            </li>
                            <li><a class="instagram-item" href="{{ asset('admin/assets/images/gal_2.jpg') }}"
                                    data-fancybox="gal"><img src="{{ asset('admin/assets/images/gal_2.jpg') }}"
                                        alt="" width="72" height="72"></a>
                            </li>
                            <li><a class="instagram-item" href="{{ asset('admin/assets/images/gal_3.jpg') }}"
                                    data-fancybox="gal"><img src="{{ asset('admin/assets/images/gal_3.jpg') }}"
                                        alt="" width="72" height="72"></a>
                            </li>
                            <li><a class="instagram-item" href="{{ asset('admin/assets/images/gal_4.jpg') }}"
                                    data-fancybox="gal"><img src="{{ asset('admin/assets/images/gal_4.jpg') }}"
                                        alt="" width="72" height="72"></a>
                            </li>
                            <li><a class="instagram-item" href="{{ asset('admin/assets/images/gal_5.jpg') }}"
                                    data-fancybox="gal"><img src="{{ asset('admin/assets/images/gal_5.jpg') }}"
                                        alt="" width="72" height="72"></a>
                            </li>
                            <li><a class="instagram-item" href="{{ asset('admin/assets/images/gal_6.jpg') }}"
                                    data-fancybox="gal"><img src="{{ asset('admin/assets/images/gal_6.jpg') }}"
                                        alt="" width="72" height="72"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget">
                        <h3>Contact</h3>
                        <address>43 Raymouth Rd. Baltemoer, London 3910</address>
                        <ul class="list-unstyled links mb-4">
                            <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                            <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                            <li><a
                                    href="https://preview.colorlib.com/cdn-cgi/l/email-protection#3d54535b527d50445952505c5453135e5250"><span
                                        class="__cf_email__"
                                        data-cfemail="dbb2b5bdb49bb6a2bfb4b6bab2b5f5b8b4b6">[email&#160;protected]</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p>

                        Copyright &copy;
                        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i
                            class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com/"
                            target="_blank">Colorlib</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <script src="{{ asset('admin/assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('admin/assets/js/aos.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"78319e251ba29f7f","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/nurture/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Jan 2023 07:00:44 GMT -->

</html>
