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
                    <h1 class="breadcumb-title">@yield('title','Contact Us')</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>@yield('title','Contact Us')</li>
                    </ul>
                </div>
            </div>
        </div>
    <div class="space-top">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-6">
                    <div class="title-area">
                        <h2 class="sec-title">We’re ready for your Business Solution</h2>
                        <p class="sec-text">Consulting services are valuable for businesses of all sizes. They can
                            provide small businesses with the expertise and guidance needed</p>
                    </div>
                    <div class="contact-feature">
                        <div class="box-icon"><i class="fa-light fa-phone"></i></div>
                        <div class="media-body">
                            <h3 class="box-title h5">General Enquires</h3>
                            <p class="box-text">Phone: <a href="tel:+16326543654">+112 (789) 568 25</a> & Email: <a
                                    href="mailto:help@gmail.com">help@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="contact-feature">
                        <div class="box-icon"><i class="fa-light fa-location-dot"></i></div>
                        <div class="media-body">
                            <h3 class="box-title h5">Post Address</h3>
                            <p class="box-text">1901 Thornridge Cir. Shiloh, Hawaii 81063</p>
                        </div>
                    </div>
                    <div class="contact-feature">
                        <div class="box-icon"><i class="fa-light fa-clock"></i></div>
                        <div class="media-body">
                            <h3 class="box-title h5">Operation Hours</h3>
                            <p class="box-text">Mon-Satday: 09.00 to 07.00 (Sunday: Closed)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form-v1 bg-smoke" data-bg-src="assets/img/bg/contact_bg_2.jpg">
                        <h3 class="fs-40 mb-30 mt-n2">Send Massage</h3>
                        <form action="mail.php" method="POST" class="contact-form ajax-contact">
                            <div class="row">
                                <div class="form-group col-md-12 style-white"><input type="text"
                                        class="form-control" name="name" id="name"
                                        placeholder="Write your name"> <i class="fal fa-user"></i></div>
                                <div class="form-group col-md-12 style-white"><input type="email"
                                        class="form-control" name="email" id="email"
                                        placeholder="Email Address"> <i class="fal fa-envelope"></i></div>
                                <div class="form-group col-md-12 style-white"><input type="tel"
                                        class="form-control" name="number" id="number"
                                        placeholder="Phone Number"> <i class="fal fa-phone"></i></div>
                                <div class="form-group col-md-12 style-white"><select name="subject" id="subject"
                                        class="form-select">
                                        <option value="" disabled="disabled" selected="selected" hidden>Select
                                            Service</option>
                                        <option value="Web Development">Web Development</option>
                                        <option value="Brand Marketing">Brand Marketing</option>
                                        <option value="UI/UX Designing">UI/UX Designing</option>
                                        <option value="Digital Marketing">Digital Marketing</option>
                                    </select> <i class="fal fa-chevron-down"></i></div>
                                <div class="form-group col-12 style-white">
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                        placeholder="Your Message"></textarea> <i class="fal fa-comment"></i>
                                </div>
                                <div class="form-btn col-12"><button class="th-btn w-100">Send Message</button></div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="contact-map style2"><iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuztheme!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
                    allowfullscreen="" loading="lazy"></iframe></div>
        </div>
    </div>
    @include('frontend.inc.footer')
</body>

</html>
