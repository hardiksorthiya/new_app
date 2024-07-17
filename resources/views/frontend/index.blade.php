@include('frontend.inc.app')

<body>
    <div class="preloader"><button class="th-btn preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner"><span class="loader"></span></div>
    </div>
    {{-- menu --}}
    @include('frontend.inc.header')
    <div class="th-hero-wrapper hero-1" id="hero">
        <div class="th-hero-bg" data-bg-src="{{ asset('assets/images/frontend/home/hero_bg_1_1.jpg') }}"><img
                src="{{ asset('assets/images/frontend/home/hero_bg_ovarlay1_1.jpg') }}" alt="img"></div>
        <div class="th-hero-shape hero-tweenmax"
            data-bg-src="{{ asset('assets/images/frontend/home/hero_bg_shape1_1.jpg') }}"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center flex-row-reverse">
                <div class="col-lg-6 col-md-8">
                    <div class="hero-1-img text-lg-end">
                        <div class="thumb" data-bg-src="{{ asset('assets/images/frontend/home/hero_1_2.jpg') }}"><img
                                src="{{ asset('assets/images/frontend/home/hero_1_1.jpg') }}" alt="shape"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-style1"><span class="sub-title"><img class="me-2"
                                src="{{ asset('assets/images/frontend/home/title_icon.svg') }}"
                                alt="img">Professional Liquidation</span>
                        <h1 class="hero-title text-white">End Creditor Pressure and Move Forward</h1>
                        <p class="hero-text text-white">Expert Liquidation Services to Relieve Your Business from
                            Creditor Pressure</p>
                        <div class="btn-wrap"><a href="#" class="th-btn style3">Get a Free Consultation<div
                                    class="icon"><i class="fa-solid fa-arrow-up-right ms-3"></i></div></a>
                            {{-- <a
                                href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="style-video popup-video">
                                <div class="play-btn"><i class="fas fa-play"></i></div> --}}
                            {{-- <div class="btn-content">
                                    <p class="btn-title">Watch The Video</p>
                                </div> --}}
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overflow-hidden space-top" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-50 mb-xl-0">
                    <div class="img-box1">
                        <div class="img1"><img src="{{ asset('assets/images/frontend/home/about_1_1.png') }}"
                                alt="About"></div>
                        <div class="img2"><img src="{{ asset('assets/images/frontend/home/about_1_2.png') }}"
                                alt="Image"></div>
                        <div class="year-counter"
                            data-bg-src="{{ asset('assets/images/frontend/home/about_1_3.png') }}">
                            <div class="year-counter_number"><span class="counter-number">25</span></div>
                            <p class="year-counter_text">Year Of Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xxl-4 ps-xl-2">
                        <div class="title-area mb-32"><span class="sub-title"><img class="me-2"
                                    src="{{ asset('assets/images/frontend/home/title_icon.svg') }}" alt="shape">ABOUT
                                OUR COMPANY<img class="ms-1"
                                    src="{{ asset('assets/images/frontend/home/title_icon.svg') }}"
                                    alt="img"></span>
                            <h2 class="sec-title">Seamless Solutions for Stellar Success</h2>
                        </div>
                        <div class="about-wrap1">
                            <p class="about-wrap-content">Securing funding for a startup can be achieved through
                                methods like bootstrapping, angel investors, venture capital, crowdfunding, or loans
                                from banks and financial institutions.</p>
                            <div class="about-feature-wrap">
                                <div class="about-feature">
                                    <div class="box-icon"><img
                                            src="{{ asset('assets/images/frontend/home/about_feature_1.svg') }}"
                                            alt="Icon"></div>
                                    <h3 class="box-title">Solutions that Spark Excellence</h3>
                                </div>
                                <div class="about-feature">
                                    <div class="box-icon"><img
                                            src="{{ asset('assets/images/frontend/home/about_feature_2.svg') }}"
                                            alt="Icon"></div>
                                    <h3 class="box-title">Where Vision Meets Action</h3>
                                </div>
                            </div>
                            <p class="about-border-content">A successful business strategy involves clear goals,
                                understanding of the market and competition, effective resource allocation</p>
                        </div>
                        <div class="btn-wrap mt-40"><a href="#" class="th-btn">READ MORE<div class="icon"><i
                                        class="fa-solid fa-arrow-up-right ms-3"></i></div></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="overflow-hidden space" id="service-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="title-area text-center"><span class="sub-title"><img class="me-2"
                                src="{{ asset('assets/images/frontend/home/title_icon.svg') }}" alt="shape">FINANCE
                            SOLUTION<img class="ms-2" src="{{ asset('assets/images/frontend/home/title_icon.svg') }}"
                                alt="shape"></span>
                        <h2 class="sec-title">Guiding Growth Driving Success</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30 gx-30 justify-content-center">
                <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
                    <div class="service-card">
                        <div class="box-img"><img
                                src="{{ asset('assets/images/frontend/home/service_card_bg_1.jpg') }}" alt="Service">
                        </div>
                        <div class="service-card-icon">
                            <div class="icon"><img src="{{ asset('assets/images/frontend/home/insolvant.png') }}"
                                    alt="Icon">
                            </div>
                            <div class="service-card-num"><span>01</span></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="#">Insolvent Liquidation</a></h3>
                            <p class="box-text">Insolvent Liquidation is the process of winding up a company that
                                cannot pay its debts, where the company's assets are sold to repay creditors.
                            </p><a href="#" class="link-btn">Read More<div class="icon"><i
                                        class="fa-solid fa-arrow-up-right ms-3"></i></div></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
                    <div class="service-card">
                        <div class="box-img"><img
                                src="{{ asset('assets/images/frontend/home/service_card_bg_1.jpg') }}"
                                alt="Service"></div>
                        <div class="service-card-icon">
                            <div class="icon"><img
                                    src="{{ asset('assets/images/frontend/home/Solvent_Liquidation.png') }}"
                                    alt="Icon">
                            </div>
                            <div class="service-card-num"><span>02</span></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="#">Solvent Liquidation</a></h3>
                            <p class="box-text">Solvent Liquidation, or Members Voluntary Liquidation (MVL), involves
                                winding up a company that can pay its debts, distributing the remaining assets to
                                shareholders.
                            </p><a href="#" class="link-btn">Read More<div class="icon"><i
                                        class="fa-solid fa-arrow-up-right ms-3"></i></div></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
                    <div class="service-card">
                        <div class="box-img"><img
                                src="{{ asset('assets/images/frontend/home/service_card_bg_1.jpg') }}"
                                alt="Service"></div>
                        <div class="service-card-icon">
                            <div class="icon"><img src="{{ asset('assets/images/frontend/home/CVA.png') }}"
                                    alt="Icon">
                            </div>
                            <div class="service-card-num"><span>03</span></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="#">Company Voluntary Arrangement (CVA)</a></h3>
                            <p class="box-text">A CVA is a formal agreement between an insolvent company and its
                                creditors to repay a portion of its debts over time while avoiding liquidation.

                            </p><a href="#" class="link-btn">Read More<div class="icon"><i
                                        class="fa-solid fa-arrow-up-right ms-3"></i></div></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
                    <div class="service-card">
                        <div class="box-img"><img
                                src="{{ asset('assets/images/frontend/home/service_card_bg_1.jpg') }}"
                                alt="Service"></div>
                        <div class="service-card-icon">
                            <div class="icon"><img src="{{ asset('assets/images/frontend/home/IVA.png') }}"
                                    alt="Icon">
                            </div>
                            <div class="service-card-num"><span>04</span></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="#">Individual Voluntary Arrangement (IVA)</a></h3>
                            <p class="box-text">An IVA is a contract between an individual and their creditors to repay
                                a reduced amount of debt over an agreed period, typically five years, while preventing
                                further legal action from creditors.
                            </p><a href="#" class="link-btn">Read More<div class="icon"><i
                                        class="fa-solid fa-arrow-up-right ms-3"></i></div></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
                    <div class="service-card">
                        <div class="box-img"><img
                                src="{{ asset('assets/images/frontend/home/service_card_bg_1.jpg') }}"
                                alt="Service"></div>
                        <div class="service-card-icon">
                            <div class="icon"><img
                                    src="{{ asset('assets/images/frontend/home/Receivership.png') }}" alt="Icon">
                            </div>
                            <div class="service-card-num"><span>05</span></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="#">Receivership</a></h3>
                            <p class="box-text"> Receivership is an insolvency process initiated by a secured lender,
                                like a bank, to appoint a receiver to recover owed money by selling the company's assets
                                or business.
                            </p><a href="#" class="link-btn">Read More<div class="icon"><i
                                        class="fa-solid fa-arrow-up-right ms-3"></i></div></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
                    <div class="service-card">
                        <div class="box-img"><img
                                src="{{ asset('assets/images/frontend/home/service_card_bg_1.jpg') }}"
                                alt="Service"></div>
                        <div class="service-card-icon">
                            <div class="icon"><img
                                    src="{{ asset('assets/images/frontend/home/adminstration.png') }}"
                                    alt="Icon">
                            </div>
                            <div class="service-card-num"><span>06</span></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="#">Administration</a></h3>
                            <p class="box-text">Administration is an insolvency procedure where an Insolvency
                                Practitioner takes control of a company to restructure its operations, sell its assets,
                                or find a buyer to repay creditors and save the business.</p><a href="#"
                                class="link-btn">Read More<div class="icon"><i
                                        class="fa-solid fa-arrow-up-right ms-3"></i></div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- faq --}}
    {{-- <div class="space overflow-hidden" id="faq-sec" data-bg-src="assets/img/bg/faq_bg_1.png">
        <div class="container">
            <div class="row justify-content-center flex-row-reverse align-items-center">
                <div class="col-xl-6">
                    <div class="faq-img1 text-xl-start text-center"><img src="assets/img/normal/faq_1_1.png"
                            alt="faq"></div>
                </div>
                <div class="col-xl-6 text-center text-xl-start align-self-center">
                    <div class="title-area text-center text-xl-start"><span class="sub-title"><img class="me-2"
                                src="assets/img/theme-img/title_icon.svg" alt="shape">SOLUTION FOR KONSAL</span>
                        <h2 class="sec-title text-white">Empowering Businesses Igniting Growth</h2>
                    </div>
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-1"><button class="accordion-button"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1"
                                    aria-expanded="true" aria-controls="collapse-1">How can a business consultant my
                                    company?</button></div>
                            <div id="collapse-1" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">A business consultant can bring fresh perspectives, industry
                                        expertise, and specialized knowledge to identify areas for improvement and
                                        implement effective strategies for growth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-2"><button
                                    class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="false"
                                    aria-controls="collapse-2">How can a business consultant benefit my
                                    company?</button></div>
                            <div id="collapse-2" class="accordion-collapse collapse"
                                aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">A business consultant can bring fresh perspectives, industry
                                        expertise, and specialized knowledge to identify areas for improvement and
                                        implement effective strategies for growth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-3"><button
                                    class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="false"
                                    aria-controls="collapse-3">How long does a consulting engagement last?</button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse"
                                aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">A business consultant can bring fresh perspectives, industry
                                        expertise, and specialized knowledge to identify areas for improvement and
                                        implement effective strategies for growth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-4"><button
                                    class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="false"
                                    aria-controls="collapse-4">What services do business consultants typically
                                    offer?</button></div>
                            <div id="collapse-4" class="accordion-collapse collapse"
                                aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">A business consultant can bring fresh perspectives, industry
                                        expertise, and specialized knowledge to identify areas for improvement and
                                        implement effective strategies for growth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- price --}}
    {{-- <section class="space">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title"><img class="me-2"
                        src="assets/img/theme-img/title_icon.svg" alt="shape">OUR PRICING PLAN<img
                        class="ms-2" src="assets/img/theme-img/title_icon.svg" alt="shape"></span>
                <h2 class="sec-title">Affordable Price Package</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="price-card">
                        <div class="price-card-bg"><img src="assets/img/bg/pricing_card_bg_1.jpg" alt="img">
                        </div>
                        <h3 class="box-title">Business Plan</h3>
                        <p class="price-card_text">Holds in these matters this principle.</p>
                        <h4 class="price-card_price"><span class="currency">$</span>46.00<span class="duration"> /
                                Per Month</span></h4>
                        <div class="price-card_content">
                            <div class="checklist">
                                <ul>
                                    <li><i class="fas fa-circle-check"></i> Marketing Consultations</li>
                                    <li><i class="fas fa-circle-check"></i> Financial Access...</li>
                                    <li><i class="fas fa-circle-check"></i> Meeting Room$5/Per Hour</li>
                                    <li class="unavailable"><i class="far fa-circle-check"></i> Market Growth
                                        Solution</li>
                                    <li class="unavailable"><i class="far fa-circle-check"></i> 24/7 Consultant
                                        Service</li>
                                </ul>
                            </div><a href="pricing.html" class="th-btn w-100">Choose Your plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="price-card active">
                        <div class="price-card-bg"><img src="assets/img/bg/pricing_card_bg_1.jpg" alt="img">
                        </div>
                        <h3 class="box-title">Premium Plan</h3>
                        <p class="price-card_text">Enjoy a pleasure that has annoying.</p>
                        <h4 class="price-card_price"><span class="currency">$</span>67.00<span class="duration"> /
                                Per Month</span></h4>
                        <div class="price-card_content">
                            <div class="checklist">
                                <ul>
                                    <li><i class="fas fa-circle-check"></i> Marketing Consultations</li>
                                    <li><i class="fas fa-circle-check"></i> Financial Access...</li>
                                    <li><i class="fas fa-circle-check"></i> Meeting Room$5/Per Hour</li>
                                    <li><i class="fas fa-circle-check"></i> Market Growth Solution</li>
                                    <li><i class="fas fa-circle-check"></i> 24/7 Consultant Service</li>
                                </ul>
                            </div><a href="pricing.html" class="th-btn w-100">Choose Your plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="price-card">
                        <div class="price-card-bg"><img src="assets/img/bg/pricing_card_bg_1.jpg" alt="img">
                        </div>
                        <h3 class="box-title">Basic Plan</h3>
                        <p class="price-card_text">Holds in these matters this principle.</p>
                        <h4 class="price-card_price"><span class="currency">$</span>89.00<span class="duration"> /
                                Per Month</span></h4>
                        <div class="price-card_content">
                            <div class="checklist">
                                <ul>
                                    <li><i class="fas fa-circle-check"></i> Marketing Consultations</li>
                                    <li><i class="fas fa-circle-check"></i> Financial Access...</li>
                                    <li><i class="fas fa-circle-check"></i> Meeting Room$5/Per Hour</li>
                                    <li class="unavailable"><i class="far fa-circle-check"></i> Market Growth
                                        Solution</li>
                                    <li><i class="fas fa-circle-check"></i> 24/7 Consultant Service</li>
                                </ul>
                            </div><a href="pricing.html" class="th-btn w-100">Choose Your plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- portfolio --}}
    {{-- <section class="space-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="title-area text-center"><span class="sub-title"><img class="me-2"
                                src="assets/img/theme-img/title_icon.svg" alt="shape">PORTFOLIO<img
                                class="ms-2" src="assets/img/theme-img/title_icon.svg" alt="shape"></span>
                        <h2 class="sec-title">We're proud of the Same works</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30 gx-30 filter-active">
                <div class="col-xxl-auto col-xl-4 col-lg-6 filter-item">
                    <div class="project-card">
                        <div class="project-img"><img src="assets/img/project/project_1_1.png"
                                alt="project image"></div>
                        <div class="project-content">
                            <div class="project-details">
                                <h3 class="project-title"><a href="project-details.html">Process Optimization</a>
                                </h3>
                                <p class="project-subtitle">Financial consultants offer a range</p><a
                                    href="project-details.html" class="icon-btn"><i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-auto col-xl-4 col-lg-6 filter-item">
                    <div class="project-card">
                        <div class="project-img"><img src="assets/img/project/project_1_2.png"
                                alt="project image"></div>
                        <div class="project-content">
                            <div class="project-details">
                                <h3 class="project-title"><a href="project-details.html">Retirement Strategies</a>
                                </h3>
                                <p class="project-subtitle">Business consulting providing expert</p><a
                                    href="project-details.html" class="icon-btn"><i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-auto col-xl-4 col-lg-6 filter-item">
                    <div class="project-card">
                        <div class="project-img"><img src="assets/img/project/project_1_3.png"
                                alt="project image"></div>
                        <div class="project-content">
                            <div class="project-details">
                                <h3 class="project-title"><a href="project-details.html">Empowering Businesses</a>
                                </h3>
                                <p class="project-subtitle">Eco Sustain Environmental Services</p><a
                                    href="project-details.html" class="icon-btn"><i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-auto col-xl-4 col-lg-6 filter-item">
                    <div class="project-card">
                        <div class="project-img"><img src="assets/img/project/project_1_4.png"
                                alt="project image"></div>
                        <div class="project-content">
                            <div class="project-details">
                                <h3 class="project-title"><a href="project-details.html">Insightful Analytics</a>
                                </h3>
                                <p class="project-subtitle">Financial consultants offer a range</p><a
                                    href="project-details.html" class="icon-btn"><i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-auto col-xl-4 col-lg-6 filter-item">
                    <div class="project-card">
                        <div class="project-img"><img src="assets/img/project/project_1_5.png"
                                alt="project image"></div>
                        <div class="project-content">
                            <div class="project-details">
                                <h3 class="project-title"><a href="project-details.html">InsightTech Consulting</a>
                                </h3>
                                <p class="project-subtitle">Business consulting providing expert</p><a
                                    href="project-details.html" class="icon-btn"><i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- team --}}
    <section class="space-bottom">
        <div class="container z-index-common">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-8">
                    <div class="title-area text-center"><span class="sub-title"><img class="me-2"
                                src="{{ asset('assets/images/frontend/home/title_icon.svg') }}" alt="shape">GREAT
                            TEAM<img class="ms-2" src="{{ asset('assets/images/frontend/home/title_icon.svg') }}"
                                alt="shape"></span>
                        <h2 class="sec-title">Meet Our Experience Team</h2>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="teamSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img"><img
                                            src="{{ asset('assets/images/frontend/home/team_1_1.png') }}"
                                            alt="Team">
                                    </div>
                                    <div class="team-social-hover"><a href="#" class="team-social-hover_btn"><i
                                                class="far fa-plus"></i></a>
                                        <div class="th-social"><a target="_blank" href="https://vimeo.com/"><i
                                                    class="fab fa-vimeo-v"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a> <a target="_blank"
                                                href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Brooklyn Simmons</a></h3><span
                                        class="team-desig">Founder & CEO</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img"><img
                                            src="{{ asset('assets/images/frontend/home/team_1_1.png') }}"
                                            alt="Team">
                                    </div>
                                    <div class="team-social-hover"><a href="#" class="team-social-hover_btn"><i
                                                class="far fa-plus"></i></a>
                                        <div class="th-social"><a target="_blank" href="https://vimeo.com/"><i
                                                    class="fab fa-vimeo-v"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a> <a target="_blank"
                                                href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Savannah Nguyen</a></h3><span
                                        class="team-desig">Senior Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img"><img
                                            src="{{ asset('assets/images/frontend/home/team_1_1.png') }}"
                                            alt="Team">
                                    </div>
                                    <div class="team-social-hover"><a href="#" class="team-social-hover_btn"><i
                                                class="far fa-plus"></i></a>
                                        <div class="th-social"><a target="_blank" href="https://vimeo.com/"><i
                                                    class="fab fa-vimeo-v"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a> <a target="_blank"
                                                href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Marvin McKinney</a></h3><span
                                        class="team-desig">Junior Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img"><img
                                            src="{{ asset('assets/images/frontend/home/team_1_1.png') }}"
                                            alt="Team">
                                    </div>
                                    <div class="team-social-hover"><a href="#" class="team-social-hover_btn"><i
                                                class="far fa-plus"></i></a>
                                        <div class="th-social"><a target="_blank" href="https://vimeo.com/"><i
                                                    class="fab fa-vimeo-v"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a> <a target="_blank"
                                                href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Brooklyn Simmons</a></h3><span
                                        class="team-desig">Founder & CEO</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img"><img
                                            src="{{ asset('assets/images/frontend/home/team_1_1.png') }}"
                                            alt="Team">
                                    </div>
                                    <div class="team-social-hover"><a href="#" class="team-social-hover_btn"><i
                                                class="far fa-plus"></i></a>
                                        <div class="th-social"><a target="_blank" href="https://vimeo.com/"><i
                                                    class="fab fa-vimeo-v"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a> <a target="_blank"
                                                href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Savannah Nguyen</a></h3><span
                                        class="team-desig">Senior Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="img-wrap">
                                    <div class="team-img"><img
                                            src="{{ asset('assets/images/frontend/home/team_1_1.png') }}"
                                            alt="Team">
                                    </div>
                                    <div class="team-social-hover"><a href="#" class="team-social-hover_btn"><i
                                                class="far fa-plus"></i></a>
                                        <div class="th-social"><a target="_blank" href="https://vimeo.com/"><i
                                                    class="fab fa-vimeo-v"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a> <a target="_blank"
                                                href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Marvin McKinney</a></h3><span
                                        class="team-desig">Junior Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><button data-slider-prev="#teamSlider1" class="slider-arrow slider-prev"><i
                        class="far fa-arrow-left"></i></button> <button data-slider-next="#teamSlider1"
                    class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section>
    {{-- number --}}
    <div class="space" data-bg-src="{{ asset('assets/images/frontend/home/counter_bg_1.png') }}">
        <div class="container">
            <div class="counter-card-wrap">
                <div class="counter-card">
                    <div class="box-icon"><img src="{{ asset('assets/images/frontend/home/YearsOfExperience.png') }}"
                            alt="Icon"></div>
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">25</span>+</h2>
                        <p class="box-text">Years Of Experience</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <div class="box-icon"><img src="{{ asset('assets/images/frontend/home/AwardsReceived.png') }}"
                            alt="Icon"></div>
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">105</span>+</h2>
                        <p class="box-text">Awards Received</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <div class="box-icon"><img src="{{ asset('assets/images/frontend/home/ProjectComplete.png') }}"
                            alt="Icon"></div>
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">160</span>+</h2>
                        <p class="box-text">Project Complete</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <div class="box-icon"><img src="{{ asset('assets/images/frontend/home/NetchwoodComplete.png') }}"
                            alt="Icon"></div>
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">75</span>K</h2>
                        <p class="box-text">Netchwood Complete</p>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </div>
    {{-- why us --}}
    <div class="space why-sec-1 overflow-hidden"
        data-bg-src="{{ asset('assets/images/frontend/home/why-shape-1-1.svg') }}">
        <div class="container">
            <div class="row justify-content-between flex-row-reverse">
                <div class="col-xl-6">
                    <div class="why-img-box">
                        <div class="img1"><img src="{{ asset('assets/images/frontend/home/why_1_1.png') }}"
                                alt="Why"></div>
                        <div class="about-grid jump"><img class="about-grid_thumb"
                                src="{{ asset('assets/images/frontend/home/why_1_2.png') }}" alt="about">
                            <p class="about-grid_text">We have <span class="counter-number">2563</span>+ Global
                                Active Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-6">
                    <div class="why-feature-wrap space-top">
                        <div class="title-area mb-30"><span class="sub-title"><img class="me-2"
                                    src="{{ asset('assets/images/frontend/home/title_icon.svg') }}"
                                    alt="shape">WHY CHOOSE US</span>
                            <h2 class="sec-title">About Netchwood Finance</h2>
                            <p class="sec-text">Netchwood Finance is a trusted liquidation firm based in the United
                                Kingdom, specializing in helping businesses navigate the complex process of liquidation.
                                With years of experience and a team of seasoned professionals, we provide tailored
                                solutions to ensure a smooth and stress-free closure of your company. Our mission is to
                                relieve you from creditor pressure and help you move forward with confidence.</p>
                        </div>
                        <ul class="why-feature-list">
                            <li class="why-feature-list-wrap">
                                <div class="icon"><i class="fas fa-square-check"></i></div>
                                <div class="why-feature-list-details">
                                    <h4 class="feature-title">Experienced Professionals</h4>
                                    <p class="feature-text">Our team has extensive experience in the liquidation
                                        industry, providing expert guidance every step of the way.</p>
                                </div>
                            </li>
                            <li class="why-feature-list-wrap">
                                <div class="icon"><i class="fas fa-square-check"></i></div>
                                <div class="why-feature-list-details">
                                    <h4 class="feature-title">Confidentiality</h4>
                                    <p class="feature-text">We offer personalized services tailored to your specific
                                        needs and circumstances.</p>
                                </div>
                            </li>
                            <li class="why-feature-list-wrap">
                                <div class="icon"><i class="fas fa-square-check"></i></div>
                                <div class="why-feature-list-details">
                                    <h4 class="feature-title">Tailored Solutions</h4>
                                    <p class="feature-text">The duration of a consulting engagement can vary widely
                                        depending on the scope of the project project lasting</p>
                                </div>
                            </li>
                            <li class="why-feature-list-wrap">
                                <div class="icon"><i class="fas fa-square-check"></i></div>
                                <div class="why-feature-list-details">
                                    <h4 class="feature-title">Client-Centric Approach</h4>
                                    <p class="feature-text">Your satisfaction is our priority. We ensure a smooth and
                                        hassle-free liquidation process.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- blog --}}
    {{-- <section class="space" id="blog-sec">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title"><img class="me-2"
                        src="assets/img/theme-img/title_icon.svg" alt="shape">BLOG & NEWS<img class="ms-2"
                        src="assets/img/theme-img/title_icon.svg" alt="shape"></span>
                <h2 class="sec-title">Get Update Blog & News</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="blogSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img"><a href="blog-details.html"><img
                                            src="assets/img/blog/blog_1_1.jpg" alt="blog image">
                                        <div class="icon-btn"><i class="far fa-plus"></i></div>
                                    </a></div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <div class="blog-date">12 April <span class="blog-year">2023</span></div><a
                                            href="blog.html"><i class="far fa-comments"></i>2 Comments</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">A business consultant provides
                                            expert advice businesses</a></h3>
                                    <p class="blog-text">This can include areas like strategy, operations in
                                        marketing, finance, and more business</p><a href="blog-details.html"
                                        class="link-btn style2"><i class="fas fa-plus-circle me-1"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img"><a href="blog-details.html"><img
                                            src="assets/img/blog/blog_1_2.jpg" alt="blog image">
                                        <div class="icon-btn"><i class="far fa-plus"></i></div>
                                    </a></div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <div class="blog-date">16 March <span class="blog-year">2023</span></div><a
                                            href="blog.html"><i class="far fa-comments"></i>3 Comments</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Consider consulting services
                                            if you're areas like stagnant</a></h3>
                                    <p class="blog-text">Business consulting services can benefit your is company by
                                        providing specialized</p><a href="blog-details.html"
                                        class="link-btn style2"><i class="fas fa-plus-circle me-1"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img"><a href="blog-details.html"><img
                                            src="assets/img/blog/blog_1_3.jpg" alt="blog image">
                                        <div class="icon-btn"><i class="far fa-plus"></i></div>
                                    </a></div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <div class="blog-date">17 June <span class="blog-year">2023</span></div><a
                                            href="blog.html"><i class="far fa-comments"></i>2 Comments</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">The duration of a consulting
                                            is can vary widely depending</a></h3>
                                    <p class="blog-text">Some projects may be short-term, lasting a few weeks, while
                                        others may be long-term</p><a href="blog-details.html"
                                        class="link-btn style2"><i class="fas fa-plus-circle me-1"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img"><a href="blog-details.html"><img
                                            src="assets/img/blog/blog_1_1.jpg" alt="blog image">
                                        <div class="icon-btn"><i class="far fa-plus"></i></div>
                                    </a></div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <div class="blog-date">12 April <span class="blog-year">2023</span></div><a
                                            href="blog.html"><i class="far fa-comments"></i>4 Comments</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">A business consultant provides
                                            expert advice businesses</a></h3>
                                    <p class="blog-text">This can include areas like strategy, operations in
                                        marketing, finance, and more business</p><a href="blog-details.html"
                                        class="link-btn style2"><i class="fas fa-plus-circle me-1"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img"><a href="blog-details.html"><img
                                            src="assets/img/blog/blog_1_2.jpg" alt="blog image">
                                        <div class="icon-btn"><i class="far fa-plus"></i></div>
                                    </a></div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <div class="blog-date">16 March <span class="blog-year">2023</span></div><a
                                            href="blog.html"><i class="far fa-comments"></i>2 Comments</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Consider consulting services
                                            if you're areas like stagnant</a></h3>
                                    <p class="blog-text">Business consulting services can benefit your is company by
                                        providing specialized</p><a href="blog-details.html"
                                        class="link-btn style2"><i class="fas fa-plus-circle me-1"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img"><a href="blog-details.html"><img
                                            src="assets/img/blog/blog_1_3.jpg" alt="blog image">
                                        <div class="icon-btn"><i class="far fa-plus"></i></div>
                                    </a></div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <div class="blog-date">17 June <span class="blog-year">2023</span></div><a
                                            href="blog.html"><i class="far fa-comments"></i>3 Comments</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">The duration of a consulting
                                            is can vary widely depending</a></h3>
                                    <p class="blog-text">Some projects may be short-term, lasting a few weeks, while
                                        others may be long-term</p><a href="blog-details.html"
                                        class="link-btn style2"><i class="fas fa-plus-circle me-1"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><button data-slider-prev="#blogSlider1" class="slider-arrow slider-prev"><i
                        class="far fa-arrow-left"></i></button> <button data-slider-next="#blogSlider1"
                    class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section> --}}
    

    @include('frontend.inc.footer')
</body>

</html>































