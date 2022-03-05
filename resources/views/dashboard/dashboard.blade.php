<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>User Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/assets-dashboard/img/favicon.ico" rel="icon">

    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/assets-dashboard/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets-dashboard/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets-dashboard/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="/assets-landingpage/favicon.png">
    <!-- Template Stylesheet -->
    <link href="/assets-dashboard/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
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
                <a href="/user/dashboard" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>LindungiDiri</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="/assets-dashboard/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{Auth()->user()->name}}</h6>
                        <span>User</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/user/dashboard" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="/" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="/assets-dashboard/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{Auth()->user()->name}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="/user/dashboard/profile/{{Auth()->user()->id}}" class="dropdown-item">My Profile</a>
                            <a href="/user/logout" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-history fa-3x" aria-hidden="true"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Catatan Perjalanan : </p>
                                <h6 class="mb-0">{{$hitungdatacatatan}}</h6>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <br>
            <div class="form-group">
                <form action="/user/dashboard">
              <input type="text" placeholder="Search Lokasi" style="margin-left: 40px" name="search">
                </form>
              </div>
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">User : {{Auth()->user()->name}}</h6>
                        <a href="/user/dashboard/cetak-data"><button class="btn btn-warning"><i class="fa fa-print"></i></button></a>
                        <a href="/user/dashboard/add-data"><button class="btn btn-success"><i class="fa fa-plus"></i></button></a>
                        
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">Tanggal Masuk</th>
                                    <th scope="col">Jam Masuk</th>
                                    <th scope="col">Jam Keluar</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Suhu Tubuh</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                @foreach ($datacatatan as $item)     
                                <tr>
                                   
                                    <td>{{$item->tanggal_masuk}}</td>
                                    <td>{{$item->jam_masuk}}</td>
                                    <td>{{$item->jam_keluar}}</td>
                                    <td>{{$item->lokasi}}</td>
                                    <td>{{$item->suhu_tubuh}}</td>
                                    <td><a class="btn btn-sm btn-danger" href="/user/dashboard/delete/{{$item->id}}">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                          
                        </table><br>
                        @if(session()->has('datatidakada'))
                        <p style="color:gray">Tidak Ada Catatan Perjalanan</p>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
           
            <!-- Widgets End -->


            <!-- Footer Start -->
            
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets-dashboard/lib/chart/chart.min.js"></script>
    <script src="/assets-dashboard/lib/easing/easing.min.js"></script>
    <script src="/assets-dashboard/lib/waypoints/waypoints.min.js"></script>
    <script src="/assets-dashboard/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/assets-dashboard/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/assets-dashboard/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/assets-dashboard/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/assets-dashboard/js/main.js"></script>
</body>

</html>