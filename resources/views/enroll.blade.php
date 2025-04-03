<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Little Sunshine</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="/new/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

    <!-- Flaticon Font -->
    <link href="/new/lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="/new/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="/new/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/new/css/style.css" rel="stylesheet" />
    <style>
        .text-primary {
            color: #d95c5c !important;
        }

        .btn-primary,
        .bg-primary,
        body {
            background-color: #d95c5c !important;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
                <span class="text-primary">Little <span style="color: #000000 !important">Sunshine</span></span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                </div>
                <a href="/" class="btn btn-secondary px-4">Go Back</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <center>
                <div class="col-lg-8 mx-auto">
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

                                    <input class="form-control" type="text" placeholder="Name of Student" required
                                        name="studentName">
                                    <input class="form-control" type="text" placeholder="Name of Guardian" required
                                        name="guardianName">
                                    <input class="form-control" type="text" placeholder="Contact No." required
                                        name="contactNumber">
                                    <input name="guardianEmail" class="form-control" type="email"
                                        placeholder="Email Address of the Guardian" required>
                                    <input name="address" class="form-control" type="text" placeholder="Home Address"
                                        required>

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



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/new/lib/easing/easing.min.js"></script>
    <script src="/new/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/new/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/new/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="/new/mail/jqBootstrapValidation.min.js"></script>
    <script src="/new/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="/new/js/main.js"></script>
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
