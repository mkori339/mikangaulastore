<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('dashboard/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('img/avatar.jpg')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                    
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('dashboardpage') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                   
                    <a href="{{ route('uploadimage') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Posti bidhaa</a>
                    @if (session("status")=="admin")
                    <a href="{{ route('dashboardpage2') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>post tangazo</a>
                    <a href="{{ route('dashboardpage1') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Posti-maalum</a>
                    <a href="{{ route('user') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Admin view</a>
                @endif
              </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                
                <div class="navbar-nav align-items-center ms-auto">
                                  
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{asset('img/avatar.jpg')}}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{session('name')}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            
                            <a href="{{ route('index') }}" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->



            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
    <h6 class="mb-0 text-primary">Bidhaa Zilizotolewa Order</h6>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-hover text-center align-middle">
        <thead class="bg-primary text-white">
            <tr>
                <th>Tarehe</th>
                <th>Jina la Bidhaa</th>
                <th>Namba ya Simu</th>
                <th>Kiasi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userorder as $userorders)
                <tr>
                    <td>{{ $userorders->created_at }}</td>
                    <td>{{ $userorders->pname }}</td>
                    <td>{{ $userorders->phone }}</td>
                    <td>{{ $userorders->quantity }}</td>
                    <td>
                        <form method="POST" action="{{ route('userorderdelete', ['userorderd' => $userorders]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-sm btn-danger" value="Futa Order">
                        </form>
                        <button class="btn btn-sm btn-primary mt-2" 
                                onclick="orderProduct('{{ asset('storage/' . $userorders->imgpath) }}')">
                            Angalia Picha
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<br><br>

<div class="d-flex align-items-center justify-content-between mb-4">
    <h6 class="mb-0 text-primary">Orodha ya Bidhaa Ulizo Posti</h6>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-hover text-center align-middle">
        <thead class="bg-primary text-white">
            <tr>
                <th>Tarehe</th>
                <th>Jina la Bidhaa</th>
                <th>Gharama (Tsh)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userpostshow as $userorderss)
                <tr>
                    <td>{{ $userorderss->created_at }}</td>
                    <td>{{ $userorderss->pname }}</td>
                    <td>{{ $userorderss->cost }}</td>
                    <td>
                        <form method="POST" action="{{ route('userpostshowd', ['userpostshowd' => $userorderss->id]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-sm btn-danger" value="Futa Order">
                        </form>
                        <button class="btn btn-sm btn-primary mt-2" 
                                onclick="orderProduct('{{ asset('storage/' . $userorderss->imgpath) }}')">
                            Angalia Picha
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

                </div>
            </div>
           

      
                    
            <!-- Widgets End -->
          <!-- Order Modal -->
       <!-- Modal Structure -->
       <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderModalLabel">Modal Title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="viewimg" src="" alt="umeshafuta bidhaa hii!" style="width: 100%; height: auto;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Funga</button>
            </div>
        </div>
    </div>
</div>

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Mikangaula Onlineshoping</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">H A mkori</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('dashboard/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('dashboard/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('dashboard/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('dashboard/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('dashboard/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('dashboard/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('dashboard/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('dashboard/js/main.js')}}"></script>
</body>

</html>