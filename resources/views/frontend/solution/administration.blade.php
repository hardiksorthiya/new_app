@include('frontend.inc.app')
@foreach ($page as $row)

<body>
    <div class="preloader"><button class="th-btn preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner"><span class="loader"></span></div>
    </div>
    @include('frontend.inc.header')
    
    <div class="breadcumb-wrapper" data-bg-src="{{asset('assets/images/frontend/otherpages/breadcumb-bg.jpg')}}">
        {{-- <div class="breadcumb-shape1"><img src="assets/img/shape/breadcrumb-shape1.svg" alt="img"></div>
        <div class="breadcumb-shape2"><img src="assets/img/shape/breadcrumb-shape2.svg" alt="img"></div> --}}
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">@yield('title','Administration')</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>@yield('title','Administration')</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-8">
                    <div class="page-single mb-40">
                        <div class="page-content">
                            <h2 class="sec-title page-title h3">{{$row->titletext}}</h2>
                            <div class="desctiption">{!!$row->description!!}</div>
                            <div class="row gy-4 ">
                                <div class="col-xxl-auto col-lg-5"><img class="w-100"
                                        src="{{asset('assets/images/frontend/otherpages/service_inner_1.png')}}" alt="img"></div>
                                <div class="col-xxl-auto col-lg-7"><img class="w-100"
                                        src="{{asset('assets/images/frontend/otherpages/service_inner_2.png')}}" alt="img"></div>
                            </div>
                            <div class="mb-30 mt-2">{!!$row->descriptiontwo!!}</div>
                            <div class="row gy-30 gx-30 justify-content-center">
                                <div class="col-xl-4 col-lg-12 col-md-4 d-flex align-items-stretch">
                                    <div class="service-card">
                                        <div class="box-img"><img src="{{asset('assets/images/frontend/home/service_card_bg_1.jpg')}}"
                                                alt="Service"></div>
                                        <div class="service-card-icon">
                                            <div class="icon"><img src="{{asset('assets/images/frontend/otherpages/maintanin.svg')}}"
                                                    alt="Icon"></div>
                                            <div class="service-card-num"><span>01</span></div>
                                        </div>
                                        <div class="box-content">
                                           
                                            <p class="box-text">Maintain the business as a going concern.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-12 col-md-4 d-flex align-items-stretch">
                                    <div class="service-card">
                                        <div class="box-img"><img src="{{asset('assets/images/frontend/home/service_card_bg_1.jpg')}}"
                                                alt="Service"></div>
                                        <div class="service-card-icon">
                                            <div class="icon"><img src="{{asset('assets/images/frontend/otherpages/maximum.svg')}}"
                                                    alt="Icon"></div>
                                            <div class="service-card-num"><span>02</span></div>
                                        </div>
                                        <div class="box-content">
                                           
                                            <p class="box-text">Maximize returns for creditors compared to other insolvency options (e.g., liquidation).</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-12 col-md-4 d-flex align-items-stretch">
                                    <div class="service-card">
                                        <div class="box-img"><img src="{{asset('assets/images/frontend/home/service_card_bg_1.jpg')}}"
                                                alt="Service"></div>
                                        <div class="service-card-icon">
                                            <div class="icon"><img src="{{asset('assets/images/frontend/otherpages/creditor.svg')}}"
                                                    alt="Icon"></div>
                                            <div class="service-card-num"><span>03</span></div>
                                        </div>
                                        <div class="box-content">
                                           
                                            <p class="box-text">Sell assets to repay secured creditors (e.g., banks) or preferential creditors (e.g., employees owed
                                                money).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-30">Administration is advantageous because it can be implemented quickly (sometimes within hours),
                                halts creditor actions, and allows an IP to devise a plan to save viable businesses.</p>


                                {{-- second section --}}

                            <h3 class="sec-title page-title mt-35">{{$row->titletextsecond}}</h3>
                            <div class="mb-30">{!!$row->descriptionsecond!!}</div>
                            <div class="row gy-30 gx-30 justify-content-center">
                                <div class="col-xl-6 col-lg-12 col-md-6 d-flex align-items-stretch">
                                    <div class="service-card">
                                        <div class="box-img"><img src="{{asset('assets/images/frontend/home/service_card_bg_1.jpg')}}"
                                                alt="Service"></div>
                                        <div class="service-card-icon">
                                            <div class="icon"><img src="{{asset('assets/images/frontend/otherpages/refine.svg')}}"
                                                    alt="Icon"></div>
                                            <div class="service-card-num"><span>01</span></div>
                                        </div>
                                        <div class="box-content">
                                            <h3 class="box-title">Refinance</h3>
                                            <p class="box-text">Securing new working capital to continue operations.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6 d-flex align-items-stretch">
                                    <div class="service-card">
                                        <div class="box-img"><img src="{{asset('assets/images/frontend/home/service_card_bg_1.jpg')}}"
                                                alt="Service"></div>
                                        <div class="service-card-icon">
                                            <div class="icon"><img src="{{asset('assets/images/frontend/otherpages/cva.svg')}}"
                                                    alt="Icon"></div>
                                            <div class="service-card-num"><span>02</span></div>
                                        </div>
                                        <div class="box-content">
                                            <h3 class="box-title">Company Voluntary Arrangement (CVA)</h3>
                                            <p class="box-text">Repaying a portion of the debt, with the remaining
                                                balance written off, and control returning to the directors.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6 d-flex align-items-stretch">
                                    <div class="service-card">
                                        <div class="box-img"><img src="{{asset('assets/images/frontend/home/service_card_bg_1.jpg')}}"
                                                alt="Service"></div>
                                        <div class="service-card-icon">
                                            <div class="icon"><img src="{{asset('assets/images/frontend/otherpages/iva.svg')}}"
                                                    alt="Icon"></div>
                                            <div class="service-card-num"><span>03</span></div>
                                        </div>
                                        <div class="box-content">
                                            <h3 class="box-title">Liquidation</h3>
                                            <p class="box-text">If the IP deems the company unviable, assets are sold and proceeds distributed to
                                                creditors.</p>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>

                            
                            
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Solution</h3>
                            <ul>
                                <li><a href="blog.html">Adminstration</a> <span><i
                                            class="fas fa-angle-right"></i></span></li>
                                <li><a href="blog.html">Insolvant Liquidation</a> <span><i
                                            class="fas fa-angle-right"></i></span></li>
                                <li><a href="blog.html">Solvant Liquidation</a> <span><i
                                            class="fas fa-angle-right"></i></span></li>
                                <li><a href="blog.html">Receivership</a> <span><i
                                            class="fas fa-angle-right"></i></span></li>
                                <li><a href="blog.html">Strato Sync Solutions</a> <span><i
                                            class="fas fa-angle-right"></i></span></li>
                                <li><a href="blog.html">Innovate Hub Connect</a> <span><i
                                            class="fas fa-angle-right"></i></span></li>
                            </ul>
                        </div>
                        <div class="widget widget_download">
                            <h4 class="widget_title">Download</h4>
                            <div class="download-widget-wrap"><a href="service-details.html" class="th-btn">DOWNLOAD
                                    PDF</a> <a href="service-details.html" class="th-btn style4">DOWNLOAD DOC</a>
                            </div>
                        </div>
                        <div class="widget widget_banner" data-bg-src="assets/img/widget/widget-banner.png"
                            data-overlay="title" data-opacity="8">
                            <div class="widget-banner text-center">
                                <div class="icon"><i class="far fa-phone"></i></div>
                                <h4 class="subtitle">Have any Questions?<br>Call us Today!</h4>
                                <h3 class="title"><a href="tel:11278956825">+112 (789) 568 25</a></h3><a
                                    href="mailto:help@gmail.com" class="link">help@gmail.com</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
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
    @include('frontend.inc.footer')
</body>
@endforeach
</html>
