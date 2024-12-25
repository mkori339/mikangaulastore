<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Fruitables - Vegetable Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid fixed-top">
            <div class="container topbar bg-primary d-none d-lg-block">
                <div class="d-flex justify-content-between">
                    <div class="top-info ps-2">
                        <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">123 Street, New York</a></small>
                        <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">Email@Example.com</a></small>
                    </div>
                    <div class="top-link pe-2">
                        <a href="#" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                        <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                        <a href="#" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
                    </div>
                </div>
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="index.html" class="navbar-brand"><h1 class="text-primary display-6">MK onlineshoping</h1></a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="{{ route('index') }}" class="nav-item nav-link">Home</a>
                           
                            <a href="{{ route('matangazo2') }}" class="nav-item nav-link active">matangazo</a>
                           
                            <a href="{{ route('contactus') }}" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="d-flex m-3 me-0">
                            
                            <a href="{{ route('userlogin') }}" class="my-auto">
                                <i class="fas fa-user fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Modal Search Start -->
    
        <!-- Modal Search End -->


        <!-- Single Page Header start -->
       <!-- Page Header Start -->
<div class="container-fluid page-header py-5 bg-dark">
    <h1 class="text-center text-white display-6">MATANGAZO</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="{{ route('index') }}" class="text-decoration-none text-white-50">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('contactus') }}" class="text-decoration-none text-white-50">Contact</a></li>
        <li class="breadcrumb-item active text-white">Matangazo</li>
    </ol>
</div>
<!-- Page Header End -->

<!-- Features Start -->
<div class="container-fluid py-5" style="background-color: #f7f9fc;">
    <div class="container py-5">
        <div class="row g-4 justify-content-center">
            @foreach($matangazo as $matangazos)
            <div class="col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="service-item shadow-lg rounded overflow-hidden border-0" style="transition: transform 0.3s, box-shadow 0.3s;">
                        @if($matangazos->imgpath)
                        <img src="{{ asset('storage/' . $matangazos->imgpath) }}" class="img-fluid w-100" style="max-height: 200px; object-fit: cover;" alt="Matangazo Image">
                        @endif
                        <div class="bg-white p-4">
                            <h5 class="text-dark text-uppercase text-center mb-2" style="letter-spacing: 1px;">{{ $matangazos->head }}</h5>
                            <p class="text-muted text-center mb-0">{{ Str::limit($matangazos->description, 200, '.') }}</p>
                            <div class="btn btn-light btn-sm rounded-pill px-4" style="color:green">*{{$matangazos->ownerid}}*</div>
                        </div>
                        <div class="bg-primary text-center p-3">
                            <div class="btn btn-light btn-sm rounded-pill px-4">limetoka:{{$matangazos->created_at}}</div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Features End -->

        <!-- Featurs End -->
    

         <!-- Footer Start -->
         <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
            <div class="container py-5">
                <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <a href="#">
                                <h1 class="text-primary mb-0">Surport Us.</h1>
                                <p class="text-secondary mb-0">Mikangaula</p>
                            </a>
                        </div>
                        
                        <div class="col-lg-3">
                            <div class="d-flex justify-content-end pt-3">
                                <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">kwa nini utumie Website hii!</h4>
                            <p class="mb-4">Website hii itakusaidia wewe mfanya biashara kuweza kupata wateja kirahisi ndani ya muda mfupi
                                pia wewe unaehitaji bidhaa kuwa na wigo wa machaguzi na kuagiza bila ya kufika eneo husika.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Shop Info</h4>
                            <a class="btn-link" href="">Angalia matangazo</a>
                            <a class="btn-link" href="">Wasiliana nasi</a>
                            <a class="btn-link" href="">0785226584</a>
                            <a class="btn-link" href="">mikangaula</a>
                            <a class="btn-link" href="">madukani</a>
                            <a class="btn-link" href="">####</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Account</h4>
                            <a class="btn-link" href="">fungua account</a>
                            <a class="btn-link" href="">post bidhaa</a>
                            <a class="btn-link" href="">pokea oda</a>
                            <a class="btn-link" href="">maliza bishara</a>
                            <a class="btn-link" href="">....simply...</a>
                            <a class="btn-link" href="">International Orders</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Mawasiliano</h4>
                            <p>Address: 1429 mikangaula, CENTER</p>
                            <p>Email: mkorihafidhi67@gmail.com</p>
                            <p>Phone: +225785226584</p>
                            <p>WELL COME!</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Mikangaula online shoping</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">H A Mkori</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->
        <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
    </body>

</html>