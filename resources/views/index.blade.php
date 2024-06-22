<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<body style=" background-color: var(--body-color)">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-digital-card" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="/"><img class="logo-image"
                    src="assets/images/My_Digital_Card_Logo.png" alt="My Digital Card"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
                aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#price">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    @guest
                            @if (Route::has('login'))
                                
                                    <a class="btn btn-secondary my-2 my-sm-0 btn-hp-style" href="{{ route('login') }}">{{ __('Login') }}</a>
                            
                            @endif

                            @if (Route::has('register'))
                                    <a class="btn btn-secondary my-2 my-sm-0 btn-hp-style" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </form>
            </div>
        </div>
    </nav>
    <!-- end-navbar -->

    <!-- main body start -->

    <main id="home-page-digital-card">
        <section class="top-banner-section margin-bottom-section">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 col-md-6 col-xl-6">
                        <div class="image-section-top-home">
                            <img src="assets/images/topone.png" alt="My Digital Card">
                        </div>
                        <div class="extra-decoration-image-left-side">
                            <img class="extra-decoration-image-left-side-one" src="{{asset('assets/images/round-1.png')}}"
                                alt="My Digital Card">
                            <img class="extra-decoration-image-left-side-two" src="assets/images/round-2.png"
                                alt="My Digital Card">
                            <img class="extra-decoration-image-left-side-three" src="assets/images/ltr.png"
                                alt="My Digital Card">
                            <img class="extra-decoration-image-left-side-four" src="assets/images/rtl-line.png"
                                alt="My Digital Card">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xl-6">
                        <div class="right-side-content-part">
                            <div class="decorate-image-top-banner">
                                <img class="decorate-one-image" src="assets/images/Exclude-2.png"
                                    alt="My Digital Card Member">
                                <img class="decorate-one-image2" src="assets/images/Exclude-3.png"
                                    alt="My Digital Card Member">
                            </div>
                            <h1 class="top-heading-home text-white">Digital Business<br> Card</h1>
                            <h5 class="sub-heading-home">Unlock the power of modern networking with our digital business cards! Our innovative solutions help you make a lasting impression, offering a convenient and eco-friendly way to share your contact information.</h5>
                            <div class="member-showcase">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="image-round-section">
                                            <img src="assets/images/memberimage.png" alt="My Digital Card Member">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="right-member-content">
                                            <h2 class="text-white">3.45M</h2>
                                            <h5 class="body-font-color">Members</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="explore_button">
                                <a class="btn-big" href="#Getstart">Make Your Business Card</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="trusted_by_company margin-bottom-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 margin-bottom-hp">
                        <h5 class="text-center company-trusted">Trusted by global leading payment</h5>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <img src="assets/images/logo-ipsum1.png" alt="My Digital Card" width="200">
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <img src="assets/images/logo-ipsum2.png" alt="My Digital Card" width="200">
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <img src="assets/images/logo-ipsum3.png" alt="My Digital Card" width="200">
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <img src="assets/images/logo-ipsum4.png" alt="My Digital Card" width="200">
                    </div>
                </div>
            </div>
        </section>
        <section class="about-section margin-bottom-section">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-5 col-md-5">
                        <div class="left-aboout-us ">
                            <h2 class="heading-text-theme text-white margin-bottom-hp">
                                Designed From The Ground Up To Protect Privacy
                            </h2>
                            <h5 class="sub-heading-home margin-bottom-hp">Welcome to Digital Buisness Card, where we revolutionize the way you connect and network. Specializing in digital business cards, we offer a modern, eco-friendly solution that makes sharing your contact information effortless and impactful. <br><br>Our mission is to provide innovative, customizable, and interactive digital business cards that help professionals and businesses leave a lasting impression. With a focus on sustainability, convenience, and cutting-edge technology, we strive to enhance your networking experience in today's digital age. <br><br>Join us in embracing the future of professional connections and discover the power of digital business cards with Corpo Key.</h5>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="image-right-about">
                            <img src="assets/images/about.png" alt="My Digital Card About">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="feature-section margin-bottom-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xl-4">
                        <div class="left-images-feature">
                            <img class="feature-image-one" src="assets/images/Group-93-2.png" alt="My Digital Card">
                            <img class="feature-image-two" src="assets/images/Group-94.png" alt="My Digital Card">
                            <img class="feature-image-three" src="assets/images/Group-95.png" alt="My Digital Card">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-xl-8">
                        <h2 class="heading-text-theme text-white margin-bottom-hp">
                            Let's Get To Know <br>Digital Busienss Card
                        </h2>
                        <div class="row feature-content-home">
                            <div class="col-lg-6">
                                <div class="feature-right-onebox">
                                    <h2 class="text-white margin-bottom-hp">Customize your card</h2>
                                    <h5 class="sub-heading-home margin-bottom-hp">Personalize your digital business card with your brand colors, logo, and unique style.</h5>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-right-onebox">
                                    <h2 class="text-white margin-bottom-hp">Interactive Elements</h2>
                                    <h5 class="sub-heading-home margin-bottom-hp">Embed videos, links to social media profiles, websites, and portfolios.</h5>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-right-onebox">
                                    <h2 class="text-white margin-bottom-hp">Instant Sharing</h2>
                                    <h5 class="sub-heading-home margin-bottom-hp">Share your digital business card via QR code, email, or text message in just a few clicks.</h5>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-right-onebox">
                                    <h2 class="text-white margin-bottom-hp">Eco-Friendly</h2>
                                    <h5 class="sub-heading-home margin-bottom-hp">Reduce paper waste with our sustainable digital solution.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background-feature"></div>
            </div>
        </section>
        <section class="how-to-create margin-bottom-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h2 class="heading-text-theme text-white margin-bottom-hp">
                            How to create a Digital Business Card
                        </h2>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h5 class="sub-heading-home margin-bottom-hp">Creating a digital business card typically involves several steps, from logging in to customizing the card. Here’s a detailed guide:</h5>
                    </div>
                </div>
                <div class="row step-create-bcard">
                    <div class="col-lg-3">
                        <div class="step-1">
                            <h2 class="heading-text-theme text-white margin-bottom-hp">
                                01
                            </h2>
                            <h2 class="heading-text-theme text-white margin-bottom-hp">
                                Login<br><br>
                            </h2>
                            <h5 class="sub-heading-home margin-bottom-hp">Use your newly created credentials to log in to your account.</h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="step-1">
                            <h2 class="heading-text-theme text-white margin-bottom-hp">
                                02
                            </h2>
                            <h2 class="heading-text-theme text-white margin-bottom-hp">
                                Choose a Plan
                            </h2>
                            <h5 class="sub-heading-home margin-bottom-hp">Review the available plans and choose the one that suits your needs.
                            </h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="step-1">
                            <h2 class="heading-text-theme text-white margin-bottom-hp">
                                03
                            </h2>
                            <h2 class="heading-text-theme text-white margin-bottom-hp">
                                Customize Design
                            </h2>
                            <h5 class="sub-heading-home margin-bottom-hp">Adjust the layout to ensure all information is clearly visible and well-organized.</h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="step-4">
                            <h2 class="heading-text-theme text-white margin-bottom-hp">
                                04
                            </h2>
                            <h2 class="heading-text-theme text-white margin-bottom-hp">
                                Save and Share
                            </h2>
                            <h5 class="sub-heading-home margin-bottom-hp">Save your digital business card.
                                Share it via email, social media, or download it for printing if needed.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="feature-section margin-bottom-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xl-12">
                        <h2 class="heading-text-theme text-white margin-bottom-hp text-center">
                            Feture Themes
                        </h2>
                        <div class="row feature-content-home">
                            <div class="col-lg-2">
                                <div class="image-theme">
                                    <img src="{{asset('assets/images/IT-Developer.png')}}" alt="Theme 1">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="image-theme">
                                    <img src="{{asset('assets/images/IT-Developer.png')}}" alt="Theme 1">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="image-theme">
                                    <img src="{{asset('assets/images/IT-Developer.png')}}" alt="Theme 1">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="image-theme">
                                    <img src="{{asset('assets/images/IT-Developer.png')}}" alt="Theme 1">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="image-theme">
                                    <img src="{{asset('assets/images/IT-Developer.png')}}" alt="Theme 1">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="image-theme">
                                    <img src="{{asset('assets/images/IT-Developer.png')}}" alt="Theme 1">
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>
                <div class="background-feature"></div>
            </div>
        </section>
        <section id="price" class="how-to-create margin-bottom-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="heading-text-theme text-white margin-bottom-hp">
                            Choose Your Plan
                        </h2>
                        <h5 class="sub-heading-home margin-bottom-hp">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
                    </div>
                </div>
                <div class="row step-create-bcard">
                    <div class="col-lg-4">
                        <div class="step-1">
                            <h2 class="heading-text-theme text-white margin-bottom-hp">
                                999 ₹<span class="sub-heading-home">/Year</span></h2>
                            <h2 class="heading-text-theme text-white margin-bottom-hp">
                                Silver Plan
                            </h2>
                            <h5 class="sub-heading-home margin-bottom-hp">
                                <ul class="list-price" style="list-style: circle;">
                                    <li>20 Exclusive Premium themes</li>
                                    <li>Share cards with anyone, Unlimited times</li>
                                    <li>Update card Unlimited times.</li>
                                    <li>20 Products Ecommerce Store</li>
                                    <li>1 PDF</li>
                                </ul>
                            </h5>
                            <a href="#" class="d-flex justify-content-center">
                                <button class="btn-hp-style btn text-white">Order Now</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="step-1">
                            <h2 class="heading-text-theme text-white margin-bottom-hp">
                                1499 ₹<span class="sub-heading-home">/Year</span>
                            </h2>
                            <h2 class="heading-text-theme text-white margin-bottom-hp">
                                Gold Plan
                            </h2>
                            <h5 class="sub-heading-home margin-bottom-hp">
                                <ul class="list-price" style="list-style: circle;">
                                    <li>20 Exclusive Premium themes</li>
                                    <li>Share cards with anyone, Unlimited times</li>
                                    <li>Update card Unlimited times.</li>
                                    <li>20 Products Ecommerce Store</li>
                                    <li>1 PDF</li>
                                </ul>
                            </h5>
                            <a href="#" class="d-flex justify-content-center">
                                <button class="btn-hp-style btn text-white">Order Now</button>
                            </a>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="step-4">
                            <h2 class="heading-text-theme text-white margin-bottom-hp">
                                Contact Now</h2>
                            <h2 class="heading-text-theme text-white margin-bottom-hp">
                                Franchise Plan
                            </h2>
                            <h5 class="sub-heading-home margin-bottom-hp">
                                <ul class="list-price" style="list-style: circle;">
                                    <li>20 Exclusive Premium themes</li>
                                    <li>Share cards with anyone, Unlimited times</li>
                                    <li>Update card Unlimited times.</li>
                                    <li>20 Products Ecommerce Store</li>
                                    <li>1 PDF</li>
                                </ul>
                            </h5>
                            <a href="#" class="d-flex justify-content-center">
                                <button class="btn-hp-style btn text-white">Contact Now</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- footer -->
    
    <footer>
        <section class="footer-area-hp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="heading-text-theme text-white margin-bottom-hp">
                            Unlock Your Future Digital Card With My Digital Card
                        </h2>
                    </div>
                    <div class="col-lg-5">
                        <a href="#" class="footer-bt">
                            <button class="btn-hp-style text-white">Create Now</button>
                        </a>
                    </div>
                </div>
                <div class="footer-second-section">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-2">
                            <div class="logo-image">
                                <img src="assets/images/My_Digital_Card_Logo.png" alt="My Digital Visiting Card"
                                    width="100">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="menu-footer">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Home
                                            <span class="visually-hidden">(current)</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="social_media_hp">
                                <a href="#" class="social_icon_hp">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="#" class="social_icon_hp">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="#" class="social_icon_hp">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>
                                <a href="#" class="social_icon_hp">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-credit">
                    <div class="row">
                        <div class="col-lg-4">
                            <h5 class="sub-heading-home margin-bottom-hp">© 2024 My Digital Card. All Rights Reserved
                            </h5>
                        </div>
                        <div class="col-lg-8">
                            <div class="menu-footer credit-fotr">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Terms of Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background-footer"></div>
            </div>
        </section>
    </footer>


    <!-- script -->
    
    {{-- <script src="assets/js/script.js"></script>
    <script src="node_modules/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="node_modules/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script> --}}
</body>

