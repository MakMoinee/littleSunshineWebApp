<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Little Sunshine</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="/lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
    <style>
        .bg-mbg {

            background-color: #1b2e3d !important;
        }

        .color-mbg {
            color: #d95c5c !important;
        }

        .text-primary {
            color: white !important;
        }

        .navbar-light .navbar-nav .nav-link {
            color: white !important;
        }

        .header {
            width: 100%;
            background-color: #1b2e3d;
            color: #f2f2f2;
            padding: 18px;
            text-align: left;
            position: fixed;
            top: 0;
            left: 0;
            border-bottom: 5px solid #d95c5c;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1;
        }

        .header .title {
            font-size: 2.5em;
            font-weight: bold;
            margin: 0;
        }

        .header .title .highlight {
            color: #d95c5c;
        }

        .header .signout {
            padding: 8px 25px;
            background-color: white;
            color: #d95c5c;
            border: none;
            border-radius: 10px;
            font-size: 1em;
            margin-right: 30px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            text-decoration: none;
        }

        .header .signout:hover {
            background-color: #d1d1d1;
            color: #1b2e3d;
        }


        .dashboard {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .icon-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .icon {
            width: 140px;
            height: 140px;
            padding: 6px;
            text-align: center;
            background-color: #2f3b4c;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border: 2px solid #ddd;
            transition: transform 0.2s ease, background-color 0.2s ease;
        }

        .icon:hover {
            transform: scale(1.05);
            border-color: #ff6f61;
            background-color: #3e4c5e;
        }

        .icon img {
            width: 70px;
            height: 70px;
            margin-bottom: 10px;
        }

        .icon p {
            color: #fff;
            font-size: 15px;
            font-weight: bold;
        }


        .background {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 150px;
        }

        .background-image {
            position: absolute;
            bottom: 0;
            opacity: 0.8;
            width: 350px;
            height: auto;
            padding-bottom: 0;
        }

        .bottom-left {
            left: 20px;
        }

        .bottom-right {
            right: 8px;
        }


        @media (max-width: 768px) {
            .background-image {
                width: 150px;
            }
        }

        @media (max-width: 480px) {
            .background-image {
                width: 120px;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->




    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-mbg navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"> <span class="color-mbg">Little</span> Sunshine</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse p-3" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
            </div>
            <a href="/logout" class="btn btn-primary py-2 px-4 ms-3">Sign Out</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <center>
                    <div class="col-md-8">
                        <div class="dashboard">
                            <div class="icon-container">
                                <a href="Tprofile.html">
                                    <div class="icon" id="profile">
                                        <img src="/img/group (1).png" alt="Teacher Profile Icon">
                                        <p>Teacher Profile</p>
                                    </div>
                                </a>

                                <a href="teacher grading page.html">
                                    <div class="icon">
                                        <img src="/img/bar-graph.png" alt="Student's Grades Icon">
                                        <p>Student's Grades</p>
                                    </div>
                                </a>

                                <a href="/teacher_saas">
                                    <div class="icon">
                                        <img src="/img/checklist.png" alt="Set Assignment Icon">
                                        <p>Set Assignment</p>
                                    </div>
                                </a>

                                <a href="/teacher_ss">
                                    <div class="icon">
                                        <img src="/img/calendar.png" alt="Set Schedule Icon">
                                        <p>Set Schedule</p>
                                    </div>
                                </a>

                                <a href="post module page.html">
                                    <div class="icon">
                                        <img src="/img/book.png" alt="Post Modules Icon">
                                        <p>Free Books</p>
                                    </div>
                                </a>

                                <a href="session record page.html">
                                    <div class="icon">
                                        <img src="/img/folder.png" alt="Session Records Icon">
                                        <p>Session Records</p>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>

    <div class="background position-relative">
        <img src="/img/playground background.png" style="left: 20px;"
            class="background-image position-absolute bottom-0" alt="Left Image">
        <img src="/img/flowerbackground.png" class="background-image position-absolute bottom-0 end-0"
            alt="Right Image">
    </div>




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="/lib/twentytwenty/jquery.event.move.js"></script>
    <script src="/lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    @if (session()->pull('errorExist'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Student Already Exist, Please Try Again New Student',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorExist') }}
    @endif


    @if (session()->pull('successLogin'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Login Successfully',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successLogin') }}
    @endif

    @if (session()->pull('errorEnroll'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Enroll Student, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorEnroll') }}
    @endif
</body>

</html>
