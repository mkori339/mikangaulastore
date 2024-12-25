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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
                        <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">Mikangaula Street,Mtwara</a></small>
                        <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">mkorihafidhi67@Example.com</a></small>
                    </div>
                    <div class="top-link pe-2">
                        <a href="#" class="text-white"><small class="text-white mx-2">Pata wateja kirahisi</small>/</a>
                        <a href="#" class="text-white"><small class="text-white mx-2">kwa haraka</small>/</a>
                        <a href="#" class="text-white"><small class="text-white ms-2">Ufanisi zaidi</small></a>
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
                            <a href="{{ route('index') }}" class="nav-item nav-link active">nyumbani</a>
                         
                            <a href="{{ route('matangazo2') }}" class="nav-item nav-link">matangazo</a>
                            <a href="{{ route('contactus') }}" class="nav-item nav-link">mawasiliano</a>
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





        <!-- Hero Start -->
        <div class="container-fluid py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <h4 class="mb-3 text-secondary">100% Bidhaa za uhakika!</h4>
                        <h1 class="mb-5 display-3 text-primary">mahitaji ya uhakika na haraka</h1>
                       
                    </div>
                    <div class="col-md-12 col-lg-5">
                        <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active rounded">
                                    <img src="{{ asset('img/hero-img-1.png')}}" class="img-fluid w-100 h-100 bg-secondary rounded" alt="First slide">
                                    
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="{{ asset('img/image.png')}}" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="{{ asset('img/featur-3.png')}}" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="{{ asset('img/featur-1.jpg')}}" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="{{ asset('img/featur-2.jpg')}}" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Featurs Section Start -->
       
        <!-- Featurs Section End -->


        <!-- Fruits Shop Start-->
        <div class="container-fluid fruite py-5">
            <div class="container py-5">
                <div class="tab-class text-center">
                    <div class="row g-4" >
                        <div class="col-lg-4 text-start">
                            <h1>Bidhaa zinazopatikana</h1>
                        </div>
                        <div class="col-lg-8 text-end">
                            <ul class="nav nav-pills d-inline-flex text-center mb-5">
                            <div class="dropdown" style="position: sticky; top: 0; z-index: 1000;">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        Bidhaa zote
    </button>
    <ul class="dropdown-menu" aria-labelledby="userDropdown">
        <li>
            <a class="dropdown-item" href="{{ route('index') }}" onclick="setDropdownValue('All Products')">
                Bidhaa zote
            </a>
        </li>
        @foreach ($users as $userss)
            <li>
                <a class="dropdown-item" href="{{ route('sindex',['sindex' =>$userss]) }}" onclick="setDropdownValue('{{ $userss->name }}')">
                @if (strpos($userss->name, '~') !== false)
                <span class="d-block text-dark">  {{ rtrim($userss->name, '~') }}</span>
                            @else
                            <span class="d-block text-dark">{{ $userss->name }}</span>
                @endif
                  
                    <small class="text-muted">{{ $userss->phone }}</small>
                </a>
            </li>
        @endforeach
    </ul>
</div>

<script>
    function setDropdownValue(value) {
        sessionStorage.setItem('dropmenu',value)
        
    }
    var droptext=sessionStorage.getItem('dropmenu');
    document.getElementById('userDropdown').innerText = 'Bidhaa zote';
    if(droptext){
        document.getElementById('userDropdown').innerText = droptext;
        sessionStorage.removeItem('dropmenu');
    }

</script>

                              
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        @foreach ($userpost as $userposts)
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                
                                                    @if ($userposts->imgpath)
                                                  
                                                    <img src="{{ asset('storage/' . $userposts->imgpath) }}" class="img-fluid w-100 rounded-top" alt="">
                                                
                                                    @endif
                                               </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">sample</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>{{$userposts->pname}}</h4>
                                                    <p>{{$userposts->description}}</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">{{$userposts->cost}} Tsh</p>
                                                        <button onclick="orderProduct('{{$userposts->pname}}','{{ route('productorder', ['userpost' => $userposts]) }}')"   class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Agiza sasa</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>      
            </div>
        </div>
        <!-- Fruits Shop End-->
         <!-- Order Modal -->
     <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderModalLabel">Agiza Bidhaa</h5>
                    <button type="button"  onclick="closee()">
                        <span >x</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="orderForm"  class="" method="post">
                    @csrf
                        <div class="form-group">
                            <label>Namba ya Simu</label>
                            <input type="text" class="form-control" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label>Idadi</label>
                            <input type="number" class="form-control" name="quantity" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Tuma Oda</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


        <!-- Featurs Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <a href="#">
                            <div class="service-item bg-secondary rounded border border-secondary">
                                <img src="{{ asset('img/featur-1.jpg')}}" class="img-fluid rounded-top w-100" alt="">
                                <div class="px-4 rounded-bottom">
                                    <div class="service-content bg-primary text-center p-4 rounded">
                                        <h5 class="text-white">MIKANGAULA</h5>
                                        <h3 class="mb-0">wandewa!!!</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="#">
                            <div class="service-item bg-dark rounded border border-dark">
                                <img src="{{ asset('img/featur-2.jpg')}}" class="img-fluid rounded-top w-100" alt="">
                                <div class="px-4 rounded-bottom">
                                    <div class="service-content bg-light text-center p-4 rounded">
                                        <h5 class="text-primary">MIKANGAULA</h5>
                                        <h3 class="mb-0">secondary school</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="#">
                            <div class="service-item bg-primary rounded border border-primary">
                                <img src="{{ asset('img/featur-3.png')}}" class="img-fluid rounded-top w-100" alt="">
                                <div class="px-4 rounded-bottom">
                                    <div class="service-content bg-secondary text-center p-4 rounded">
                                        <h5 class="text-white">KOROSHO ZETU</h5>
                                        <h3 class="mb-0">furaha ya mikangaula</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featurs End -->


        <!-- Vesitable Shop Start-->
        <div class="container-fluid vesitable py-5">
            <div class="container py-5">
                <h1 class="mb-0">Bidhaa zilizopendekezwa</h1>
                <div class="owl-carousel vegetable-carousel justify-content-center">
                    @foreach ($userpost as $userposts)
                    <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="{{ asset('storage/' . $userposts->imgpath) }}" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">sample</div>
                        <div class="p-4 rounded-bottom">
                            <h4>kuhusu bidhaa</h4>
                            <p>{{$userposts->description}}</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">{{$userposts->cost}} Tsh</p>
                                <button onclick="orderProduct('{{$userposts->pname}}','{{ route('productorder', ['userpost' => $userposts]) }}')"   class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Agiza sasa</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  
             
                </div>
            </div>
        </div>
        <!-- Vesitable Shop End -->


        <!-- Banner Section Start-->
         @foreach ($brand as $brands )
         <div class="container-fluid banner bg-secondary my-5">
            <div class="container py-5">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="py-4">
                            <h1 class="display-3 text-white">{{$brands->phone}}</h1>
                            <p class="fw-normal display-3 text-dark mb-4">in Our Store</p>
                            <p class="mb-4 text-dark">{{$brands->description}}</p>
                            <button onclick="orderProduct('bidha','{{ route('brandorder', ['brand' => $brands]) }}')"   class="banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5">BUY</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <img src="{{ asset('storage/' . $brands->imgpath) }}" class="img-fluid w-100 rounded" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-white rounded-circle position-absolute" style="width: 140px; height: 140px; top: 0; left: 0;">
                                <h1 style="font-size: 100px;">1</h1>
                                <div class="d-flex flex-column">
                                    <span class="h2 mb-0">{{$brands->cost}}</span>
                                    <span class="h4 text-muted mb-0">Tsh</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         @endforeach
    
        <!-- Banner Section End -->


        <!-- Bestsaler Product Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                    <h1 class="display-4">Bestseller Products</h1>
                    <p>Chaguo la leo! tumekufikia, jipatie bidhaa kali kwa bei poa kabisa, Chakua sasa na uwagize chapu kwa haraka
                        . wasiliana nasi kupitia simu namba: 0785226584 au  0787135381
                    </p>
                </div>
                <div class="row g-4">
                @foreach ($adminpost as $adminposts)
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('storage/' . $adminposts->imgpath) }}" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">{{ $adminposts->pname}}</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">{{ $adminposts->cost}} Tsh</h4>
                                    <button onclick="orderProduct('{{ $adminposts->pname}}','{{ route('productorder', parameters: ['userpost' =>  $adminposts]) }}')"   class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Agiza sasa</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                        @foreach ( $adminpost as $adminposts )
                        <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center">
                            <img src="{{ asset('storage/' . $adminposts->imgpath) }}" class="img-fluid rounded" alt="">
                            <div class="py-4">
                                <a href="#" class="h5">{{ $adminposts->pname}}</a>
                                <div class="d-flex my-3 justify-content-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">{{ $adminposts->cost}} Tsh</h4>
                                <button onclick="orderProduct('{{ $adminposts->pname}}','{{ route('productorder', ['userpost' =>  $adminposts]) }}')"   class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Agiza sasa</button>
                            </div>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
        <!-- Bestsaler Product End -->


   


        <!-- Tastimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="testimonial-header text-center">
                    <h4 class="text-primary">Our Testimonial</h4>
                    <h1 class="display-5 mb-5 text-dark">Mawazo Kutoka kwa wadau!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                @foreach ($comments as $comment )
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">{{$comment->massege}}
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="{{ asset('img/avatar.jpg')}}" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">{{$comment->name}}</h4>
                                    <p class="m-0 pb-3">Profession</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
        
                </div>
            </div>
        </div>
        <!-- Tastimonial End -->


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
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">H A mkori</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->
   


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    
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