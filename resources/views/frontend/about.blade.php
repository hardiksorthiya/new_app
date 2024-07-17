@include('frontend.inc.app')

<body>
    <div class="preloader"><button class="th-btn preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner"><span class="loader"></span></div>
    </div>
    {{-- menu --}}
    @include('frontend.inc.header')


    {{-- about main content --}}


    
        <div class="breadcumb-wrapper" data-bg-src="{{asset('assets/images/frontend/otherpages/breadcumb-bg.jpg')}}">
            {{-- <div class="breadcumb-shape1"><img src="assets/img/shape/breadcrumb-shape1.svg" alt="img"></div>
            <div class="breadcumb-shape2"><img src="assets/img/shape/breadcrumb-shape2.svg" alt="img"></div> --}}
            <div class="container">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">@yield('title','About Us')</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>@yield('title','About Us')</li>
                    </ul>
                </div>
            </div>
        </div>
       {{-- about company --}}
        
        <div class="overflow-hidden space" id="about-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 mb-50 mb-xl-0">
                        <div class="img-box2">
                            <div class="shape1"><img src="{{asset('assets/images/frontend/about/about_shape2_1.png')}}" alt="About"></div>
                            <div class="img1"><img src="{{asset('assets/images/frontend/about/about_2_1.png')}}" alt="About">
                                <div class="year-counter bg-title" data-bg-src="{{asset('assets/images/frontend/about/about_shape2_2.png')}}">
                                    <div class="year-counter_number"><span class="counter-number">13</span></div>
                                    <p class="year-counter_text">Year Of Experience</p>
                                </div>
                            </div>
                            <div class="img2"><img src="{{asset('assets/images/frontend/about/about_2_2.png')}}" alt="Image"></div>
                            <div class="about-since-wrap jump">
                                <div class="about-since">Since 2011</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="title-area mb-32"><span class="sub-title"><img class="me-2"
                                    src="{{asset('assets/images/frontend/home/title_icon.svg')}}" alt="shape">ABOUT OUR COMPANY<img
                                    class="ms-1" src="{{asset('assets/images/frontend/home/title_icon.svg')}}" alt="img"></span>
                            <h2 class="sec-title">Innovating for a brighter tomorrow</h2>
                            <p class="sec-text">Netchwood Finance Limited is a well-established insolvency practice. Originally based in Shropshire,
                                we relocated to Altrincham (Manchester) in 2019. Since our inception in 2011, we have been
                                dedicated to offering expert advice and support to individuals and companies experiencing financial
                                distress.</p>
                                <p class="sec-text">At Netchwood our purpose is to act with integrity and fairness and in so doing help our clients move
                                    forward to a better place.</p>

                                    <div class="about-wrap1">
                                        <div class="about-feature-wrap">
                                            <div class="about-feature">
                                                <div class="box-icon"><img
                                                        src="{{ asset('assets/images/frontend/home/about_feature_1.svg') }}"
                                                        alt="Icon"></div>
                                                        
                                                            <h3 class="box-title">Company Number:<span> 06937144</span></h3>
                                                
                                                       
                                                
                                            </div>
                                            <div class="about-feature">
                                                <div class="box-icon"><img
                                                        src="{{ asset('assets/images/frontend/home/about_feature_2.svg') }}"
                                                        alt="Icon"></div>
                                                        <h3 class="box-title">License Number:<span> DPL Z1810628</span></h3>
                                            </div>
                                        </div>
                                        <p class="about-border-content">Regulatory Information</p>
                                            <p>Giles McCarthy is an Insolvency Practitioner licensed by the Insolvency Practitioners Association,
                                                located at Valiant House, 4-10 Heneage Lane, London EC3A 5DQ. Our professional indemnity
                                                insurance is provided by RSA Insurance Group plc, based at 20 Fenchurch Street, London EC3M 3AU.</p>
                                            <p>If you have any complaints regarding the conduct of our Insolvency Practitioner or staff, please
                                                address them directly to Giles McCarthy in the first instance. Should the issue remain unresolved,
                                                you may escalate your complaint to the Insolvency Service’s Complaints Gateway. Further details
                                                can be found at <a href="https://www.insolvencydirect.bis.gov.uk/fip1/" target="_blank">Insolvency Direct</a> or by contacting
                                                the Insolvency Service at 0845 602 9848.</p>   
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- why us --}}


        <div class="space overflow-hidden" id="faq-sec" data-bg-src="{{asset('assets/images/frontend/about/faq_bg_1.png')}}">
            <div class="container">
                <div class="row justify-content-center flex-row-reverse align-items-center">
                    <div class="col-xl-6">
                        <div class="faq-img1 text-xl-start text-center"><img src="{{asset('assets/images/frontend/about/faq_1_1.png')}}"
                                alt="faq"></div>
                    </div>
                    <div class="col-xl-6 text-center text-xl-start align-self-center">
                        <div class="title-area text-center text-xl-start"><span class="sub-title"><img class="me-2"
                                    src="{{asset('assets/images/frontend/home/title_icon.svg')}}" alt="shape">Why Netchwood</span>
                            <h2 class="sec-title text-white">Empowering Businesses Igniting Growth</h2>
                        </div>
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-1"><button class="accordion-button"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1"
                                        aria-expanded="true" aria-controls="collapse-1">Experienced Professionals</button></div>
                                <div id="collapse-1" class="accordion-collapse collapse show"
                                    aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Our team has extensive experience in the liquidation industry, providing expert guidance every step of the way.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-2"><button
                                        class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2" aria-expanded="false"
                                        aria-controls="collapse-2">Confidentiality</button></div>
                                <div id="collapse-2" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">We offer personalized services tailored to your specific needs and circumstances.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-3"><button
                                        class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-3" aria-expanded="false"
                                        aria-controls="collapse-3">Tailored Solutions</button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">The duration of a consulting engagement can vary widely depending on the scope of the project project lasting</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-4"><button
                                        class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-4" aria-expanded="false"
                                        aria-controls="collapse-4">Client-Centric Approach</button></div>
                                <div id="collapse-4" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Your satisfaction is our priority. We ensure a smooth and hassle-free liquidation process.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- owner Information --}}

        <div class="space why-sec-1 overflow-hidden"
            data-bg-src="{{ asset('assets/images/frontend/home/why-shape-1-1.svg') }}">
            <div class="container">
                <div class="row justify-content-between flex-row-reverse">
                    
                    <div class="col-xxl-5 col-xl-6">
                        <div class="why-feature-wrap space-top">
                            <div class="title-area mb-30"><span class="sub-title"><img class="me-2"
                                        src="{{ asset('assets/images/frontend/home/title_icon.svg') }}"
                                        alt="shape">Director</span>
                                <h2 class="sec-title">Netchwood Finance</h2>
                                <p class="sec-text">Our Director and owner, Giles McCarthy, founded Netchwood Finance with the mission to assist
                                    those in financial trouble. As our in-house Insolvency Practitioner, Giles is regulated by the
                                    Insolvency Practitioners Association, ensuring the highest standards of professional conduct and
                                    service.</p>
                                    <p class="sec-text">Our other Director, Andrew Howard, has worked in the insolvency profession for over 15 years.
                                        Primarily specialising in personal insolvency, Andrew has assisted hundreds of individuals and
                                        directors to resolve their debt problems.</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="why-img-box">
                            <div class="img1"><img src="{{ asset('assets/images/frontend/home/why_1_1.png') }}"
                                    alt="Why"></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Testimonials --}}

        <section class="testi-sec-2 overflow-hidden space" data-bg-src="{{ asset('assets/images/frontend/about/testi_bg_2_1.png') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="testi-box-area">
                            <div class="title-area"><span class="sub-title"><img class="me-2"
                                        src="{{asset('assets/images/frontend/home/title_icon.svg')}}" alt="shape">TESTIMONIALS<img
                                        class="ms-2" src="{{asset('assets/images/frontend/home/title_icon.svg')}}"
                                        alt="shape"></span>
                                <h2 class="sec-title">What Clients Say About Us</h2>
                            </div>
                            <div class="testi-card-slide">
                                <div class="swiper th-slider" id="testiSlide2"
                                    data-slider-options='{"effect":"slide"}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="testi-card-2">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <div class="testi-card_review"><i
                                                                class="fa-sharp fa-solid fa-star"></i><i
                                                                class="fa-sharp fa-solid fa-star"></i><i
                                                                class="fa-sharp fa-solid fa-star"></i><i
                                                                class="fa-sharp fa-solid fa-star"></i><i
                                                                class="fa-sharp fa-solid fa-star"></i></div>
                                                        <div class="testi-card_profile">
                                                            <div class="testi-card_content">
                                                                <h3 class="testi-card_name">Brooklyn Simmons</h3><span
                                                                    class="testi-card_desig">UI/UX Designer</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="quote-icon"><img src="{{ asset('assets/images/frontend/about/quote.svg') }}"
                                                            alt="icon"></div>
                                                </div>
                                                <p class="testi-card_text">Financial plans should be regularly reviewed,
                                                    especially when there are significant life changes or market shifts.
                                                    Annual reviews are common, but more frequent check-ins may be necessary
                                                    based on individual circumstances. Choosing the right investment
                                                    strategy involves assessing your financial goals, risk tolerance, and
                                                    time horizon</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testi-card-2">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <div class="testi-card_review"><i
                                                                class="fa-sharp fa-solid fa-star"></i><i
                                                                class="fa-sharp fa-solid fa-star"></i><i
                                                                class="fa-sharp fa-solid fa-star"></i><i
                                                                class="fa-sharp fa-solid fa-star"></i><i
                                                                class="fa-sharp fa-solid fa-star"></i></div>
                                                        <div class="testi-card_profile">
                                                            <div class="testi-card_content">
                                                                <h3 class="testi-card_name">Alexan Micelito</h3><span
                                                                    class="testi-card_desig">Customer of Our Shop</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="quote-icon"><img src="{{ asset('assets/images/frontend/about/quote.svg') }}"
                                                            alt="icon"></div>
                                                </div>
                                                <p class="testi-card_text">Financial plans should be regularly reviewed,
                                                    especially when there are significant life changes or market shifts.
                                                    Annual reviews are common, but more frequent check-ins may be necessary
                                                    based on individual circumstances. Choosing the right investment
                                                    strategy involves assessing your financial goals, risk tolerance, and
                                                    time horizon</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-end">
                        <div class="testi-thumb2"><img src="{{ asset('assets/images/frontend/about/testi_thumb1_1.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- CONTACT-CARD --}}

        <div class="space overflow-hidden" id="contact-card-sec" >
            <div class="container">
                <div class="row gy-30 gx-30 justify-content-center hp-contact-card">
                    <div class="col-xl-4 col-lg-12 col-md-4 d-flex align-items-stretch">
                        <div class="service-card">
                            <div class="icon-of-cont">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <h5>Call for Immediate Advice</h5>
                            <p>Speak to an insolvency expert for immediate help and advice and to arrange a free no-obligation consultation with your local office</p>
                            <div class="d-xxl-block d-none"><a href="tel:07511 478229" class="th-btn">Call Us<span class="icon"><i
                                class="fa-solid fa-arrow-up-right ms-3"></i></span></a></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-4 d-flex align-items-stretch">
                        <div class="service-card">
                            <div class="icon-of-cont">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <h5>Email the Netchwood Team</h5>
                            <p>Email our team to arrange a call back or to request further information on how we can help</p>
                            <div class="d-xxl-block d-none"><a href="mailto:info@netchwood.co.uk" class="th-btn">info@netchwood.co.uk<span class="icon"><i
                                class="fa-solid fa-arrow-up-right ms-3"></i></span></a></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-4 d-flex align-items-stretch">
                        <div class="service-card">
                            <div class="icon-of-cont">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <h5>Office Location</h5>
                            <p>Atlantic Business Centre, Atlantic Street, Altrincham, WA14 5NQ</p>
                            <div class="d-xxl-block d-none"><a href="https://maps.app.goo.gl/3gnmm2j6CmbyjGkR9" class="th-btn" target="_blank">Direction<span class="icon"><i
                                class="fa-solid fa-arrow-up-right ms-3"></i></span></a></div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>

  



    {{-- end --}}



    @include('frontend.inc.footer')
</body>

</html>
