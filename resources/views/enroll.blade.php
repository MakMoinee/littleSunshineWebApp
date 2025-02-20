<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Little Sunshine</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
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
            <a href="/" class="btn btn-primary py-2 px-4 ms-3">Back</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <center>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h2>Enroll</h2>
                                <form action="/enroll" method="post" autocomplete="off" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <select class="form-control" name="course" required>
                                            <option value="">What Course...</option>
                                            <option value="course1">Special Education</option>
                                            <option value="course2">Tele Therapy (Normal Students the needs
                                                developments)</option>
                                        </select>

                                        <input class="form-control" type="text" placeholder="Name of Student"
                                            required name="studentName">
                                        <input class="form-control" type="text" placeholder="Name of Guardian"
                                            required name="guardianName">
                                        <input class="form-control" type="text" placeholder="Contact No." required
                                            name="contactNumber">
                                        <input name="guardianEmail" class="form-control" type="email"
                                            placeholder="Email Address of the Guardian" required>
                                        <input name="address" class="form-control" type="text"
                                            placeholder="Home Address" required>

                                        <div class="form-group mt-2 d-flex">
                                            <label class="me-2">Doctor's Evaluation:</label>
                                            <button type="button" class="btn btn-primary btn-sm me-2"
                                                onclick="uploadFile()" id="btnUpload">Upload File</button>
                                            <button id="btnClear" type="button" class="btn btn-danger btn-sm"
                                                style="display: none" onclick="clearUpload()">Clear</button>
                                            <input required type="file" name="evaluation" id="evaluationFile"
                                                class="invisible" onchange="updateBtn()">
                                        </div>

                                        {{-- <div class="form-group mt-2">
                                            <input required placeholder="Username" type="text" name="username"
                                                id="" class="form-control">
                                            <input placeholder="Password" required type="password" name="password"
                                                id="" class="form-control">
                                        </div> --}}

                                        <button name="btnEnroll" value="yes" type="submit"
                                            class="btn btn-primary mt-3 submit-btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        function uploadFile() {
            let evaluationFile = document.getElementById('evaluationFile');
            evaluationFile.click();
        }

        function updateBtn() {
            let evaluationFile = document.getElementById('evaluationFile').value;
            let btnUpload = document.getElementById('btnUpload');
            btnUpload.innerHTML = evaluationFile;

            let btnClear = document.getElementById('btnClear');
            btnClear.removeAttribute("style");

        }

        function clearUpload() {
            let evaluationFile = document.getElementById('evaluationFile');
            evaluationFile.value = "";
            let btnClear = document.getElementById('btnClear');
            btnClear.setAttribute("style", "display:none;");
            let btnUpload = document.getElementById('btnUpload');
            btnUpload.innerHTML = "Upload File";
        }
    </script>

    @if (session()->pull('errorUserCreate'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Create User, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorUserCreate') }}
    @endif
    @if (session()->pull('errorUserExist'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Username Already Exist, Please Try Again New Username',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorUserExist') }}
    @endif
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


    @if (session()->pull('successEnroll'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Enrolled Student',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successEnroll') }}
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
