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
            <div class="row g-5" style="margin-bottom: 150px;">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header bg-white text-dark">
                            <form action="/teacher_records" method="post">
                                @csrf
                                <div class="form-group d-flex">
                                    <input class="form-control me-2" type="text" id="sessionNumber"
                                        placeholder="Session #" required name="sessionNumber">
                                    <input class="form-control me-2" type="text" id="details"
                                        placeholder="Details (Schedule)" required name="details">
                                    <select class="form-control me-2 bg-white" id="name" name="student">
                                        <option value="">Select Student</option>
                                        @foreach ($students as $item)
                                            <option value="{{ $item['id'] }}"> {{ $item['name'] }} </option>
                                        @endforeach
                                    </select>
                                    <select class="form-control me-2 bg-white" id="status" name="status">
                                        <option value="Active">Active</option>
                                        <option value="Done">Done</option>
                                        <option value="Absent">Absent</option>
                                    </select>
                                    <button name="btnAddSession" value="yes" type="submit"
                                        class="btn btn-primary btn-sm" class="add-button"
                                        style="margin-left: 10px;">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-body bg-mbg">
                            <div class="table-responsive bg-white">
                                <table class="table border mb-0">
                                    <thead class="table-light fw-semibold">
                                        <tr class="align-middle">
                                            <th>Session #</th>
                                            <th class="text-center">Details</th>
                                            <th>Student</th>
                                            <th class="text-center">Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sessions as $item)
                                            <tr class="align-middle">
                                                <td>
                                                    {{ $item->sessionID }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $item->details }}
                                                </td>
                                                <td>
                                                    @foreach ($students as $s)
                                                        @if ($s['id'] == $item->studentID)
                                                            {{ $s['name'] }}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td class="text-center">
                                                    {{ $item->status }}
                                                </td>
                                                <td>
                                                    <button onclick="deleteSess({{ $item->id }})"
                                                        class="btn btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#deleteSessionModal">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pagination">
                                        <ul class="pagination">
                                            @for ($i = 1; $i <= $sessions->lastPage(); $i++)
                                                <li class="page-item ">
                                                    <a class="page-link {{ $sessions->currentPage() == $i ? 'active' : '' }}"
                                                        href="{{ $sessions->url($i) }}">{{ $i }}</a>
                                                </li>
                                            @endfor
                                        </ul>

                                    </div>
                                </div>
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

    <div class="modal fade " id="deleteSessionModal" tabindex="-1" role="dialog"
        aria-labelledby="deleteSessionModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="recordForm" action="/teacher_records" method="post">
                    @method('delete')
                    @csrf
                    <div class="modal-body">
                        <h5>Are You Sure You Want To Delete This Session?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                            style="color:white !important;">Close</button>
                        <button type="submit" class="btn btn-danger" name="btnDeleteSession" value="yes"
                            style="color:white !important;">Proceed Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function deleteSess(id) {
            let recordForm = document.getElementById('recordForm');
            recordForm.action = `/teacher_records/${id}`;
        }
    </script>
    @if (session()->pull('errorAddSession'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Add Session, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorAddSession') }}
    @endif

    @if (session()->pull('errorDelete'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Delete Session, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorDelete') }}
    @endif



    @if (session()->pull('successDelete'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Deleted Session',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successDelete') }}
    @endif
    @if (session()->pull('successAddSession'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Added Session',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successAddSession') }}
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
