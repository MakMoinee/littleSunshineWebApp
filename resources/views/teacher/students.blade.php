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
            <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 30px">
                <span class="text-primary">Little <span style="color: #252222 !important">Sunshine</span></span>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-white">
                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#addUserModal">
                                        Add User
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive bg-white">
                                <table class="table border mb-0">
                                    <thead class="table-light fw-semibold">
                                        <tr class="align-middle">
                                            <th class="text-center">Student Name</th>
                                            <th>Username</th>
                                            <th class="text-center">Status</th>
                                            <th>Created Date</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mUsers as $item)
                                            <tr class="align-middle">
                                                <td class="text-center">
                                                    @if (count($students) > 0 && array_key_exists($item->userID, $students))
                                                        {{ $students[$item->userID]['name'] }}
                                                    @else
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ $item->username }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $item->status }}
                                                </td>
                                                <td>
                                                    {{ (new DateTime($item->created_at))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y-m-d') }}
                                                </td>
                                                <td class="text-center">
                                                    <form action="/teacher_students/{{ $item->userID }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary"
                                                            name="btnDeleteUser" value="yes">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

    <div class="modal fade " id="deleteAssModal" tabindex="-1" role="dialog" aria-labelledby="deleteAssModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="assForm" action="/teacher_saas" method="post">
                    @method('delete')
                    @csrf
                    <div class="modal-body">
                        <h5>Are You Sure You Want To Delete This Assignment?</h5>
                        <input type="hidden" name="filePath" id="deleteFilePath" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                            style="color:white !important;">Close</button>
                        <button type="submit" class="btn btn-danger" name="btnDeleteAss" value="yes"
                            style="color:white !important;">Proceed Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="modal fade " id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="assForm" action="/teacher_students" method="post">
                    @csrf
                    <div class="modal-header">
                        <h5>Create User</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group text-dark">
                                    <label for="username">Student:</label>
                                    <br>
                                    <select required name="student" id="" class="form-control">
                                        @foreach ($allStudents as $item)
                                            @if (count($students) > 0 && array_key_exists($item['userID'], $students))
                                            @else
                                                <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group text-dark">
                                    <label for="username">Username:</label>
                                    <br>
                                    <input required type="text" name="username" id=""
                                        class="form-control">
                                </div>
                                <div class="form-group text-dark">
                                    <label for="password">Password:</label>
                                    <br>
                                    <input required type="password" name="password" id=""
                                        class="form-control">
                                </div>
                                <div class="form-group text-dark">
                                    <label for="confirmPass">Confirm Password:</label>
                                    <br>
                                    <input required type="password" name="confirmPass" id=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            style="color:white !important;">Close</button>
                        <button type="submit" class="btn btn-danger" name="btnAddUser" value="yes"
                            style="color:white !important;">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function openFile() {
            document.getElementById('mFile').click();
        }

        function updateBtn() {
            let txt = document.getElementById('mFile').value;
            if (txt) {

                let btnOpen = document.getElementById('btnOpen');
                btnOpen.innerHTML = txt;

                let btnClear = document.getElementById('btnClear');
                btnClear.removeAttribute("style");
            }
        }

        function clearFile() {

            document.getElementById('mFile').value = null;
            let btnOpen = document.getElementById('btnOpen');
            btnOpen.innerHTML = "Choose Interactive File";

            let btnClear = document.getElementById('btnClear');
            btnClear.setAttribute("style", "display:none;");
        }

        function deleteAss(id, filePath) {

            let assForm = document.getElementById('assForm');
            assForm.action = `/teacher_saas/${id}`;

            let deleteFilePath = document.getElementById('deleteFilePath');
            if (filePath) {
                deleteFilePath.value = filePath;
            } else {

                deleteFilePath.value = "";
            }
        }
    </script>

    @if (session()->pull('errorSaveAss'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Set Assignment, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorSaveAss') }}
    @endif

    @if (session()->pull('errorSaveUser'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Add User, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorSaveUser') }}
    @endif


    @if (session()->pull('successSaveUser'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Added User',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successSaveUser') }}
    @endif

    @if (session()->pull('successDeleteUser'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Deleted User',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successDeleteUser') }}
    @endif
    @if (session()->pull('successSaveAss'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Set Assignment',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successSaveAss') }}
    @endif
    @if (session()->pull('errorDeleteUser'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Delete  User, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorDeleteUser') }}
    @endif
    @if (session()->pull('errorUserExist'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Username Already Exist, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorUserExist') }}
    @endif
    @if (session()->pull('errorPassNotMatch'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Password Does Not Match, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorPassNotMatch') }}
    @endif
</body>

</html>
