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

            <div class="row g-5" style="margin-bottom: 100px;">
                {{-- <div class="col-md-6 invisible">
                    <div class="card">
                        <div class="card-body bg-mbg">
                            <h2 class="text-white">
                                <center>Set Assignment</center>
                            </h2>
                            <form action="/teacher_saas" method="post" autocomplete="off">
                                @csrf
                                <div class="form-group">
                                    <select class="form-control input-field mt-2" name="studentName">
                                        <option value="">Student Name...</option>
                                        @foreach ($students as $item)
                                            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                        @endforeach
                                    </select>
                                    <input type="number" class="form-control input-field mt-2" name="sessionNumber"
                                        placeholder="Session #">
                                    <input type="text" class="form-control input-field mt-2" name="title"
                                        placeholder="Assignment Title">
                                    <input type="date" class="form-control input-field mt-2" name="date">
                                    <div class="time-range mt-2">
                                        <input type="time" class="form-control -field" name="startTime">
                                        <span class="text-white">To</span>
                                        <input type="time" class="form-control input-field" name="endTime">
                                    </div>
                                    <select required class="form-control input-field mt-2" name="submissionType">
                                        <option value="" selected>Submission Type</option>
                                        <option value="f2f">F2F</option>
                                        <option value="online">Online</option>
                                    </select>
                                    <button name="btnSetAss" value="yes" type="submit"
                                        class="btn btn-primary set-button mt-2">SET</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-6 mx-auto">
                    <div class="card bg-mbg">
                        <div class="card-header" style="background-color: #00394f !important;">
                            <center>
                                <h3 class="text-white">Set Assignment</h3>
                            </center>
                        </div>
                        <div class="card-body">
                            <form action="/teacher_saas" method="post" autocomplete="off"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <select class="form-control" name="studentName">
                                        <option value="">Student Name...</option>
                                        @foreach ($students as $item)
                                            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                        @endforeach
                                    </select>
                                    <input type="number" class="form-control mt-2" name="sessionNumber"
                                        placeholder="Session #">

                                    <input type="text" class="form-control input-field mt-2" name="title"
                                        placeholder="Assignment Title">


                                    <div class="row mt-2">
                                        <div class="col-md-12 d-flex">
                                            <button class="btn btn-success text-white me-2" id="btnOpen"
                                                type="button" onclick="openFile()">Upload A
                                                File</button>

                                            <input required type="file" style="display: none" name="file"
                                                id="mFile" placeholder="Choose File For Interactive"
                                                onchange="updateBtn()">

                                            <button type="button" id="btnClear" class="btn btn-danger text-white"
                                                style="display: none" onclick="clearFile()">Clear</button>
                                        </div>
                                    </div>
                                    <br>
                                    <h4 class="text-white">Deadline:</h4>

                                    <input type="date" class="form-control input-field mt-2" name="date">
                                    <div class="time-range mt-2">
                                        <input type="time" class="form-control -field" name="startTime">
                                        <span class="text-white">To</span>
                                        <input type="time" class="form-control input-field" name="endTime">
                                    </div>

                                    <button name="btnSetAssWithFile" value="yes" type="submit"
                                        class="btn btn-primary set-button mt-2"
                                        style="background-color:#00394f !important;"> SET</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-5" style="margin-bottom: 500px;">
                <div class="col-lg-12">

                    <div class="card mt-3 bg-mbg">
                        <div class="card-body">
                            <div class="table-responsive bg-white">
                                <table class="table border mb-0">
                                    <thead class="table-light fw-semibold">
                                        <tr class="align-middle">
                                            <th>Title</th>
                                            <th class="text-center">Student Name</th>
                                            <th>Session #</th>
                                            <th class="text-center">Due Date From</th>
                                            <th>Due Date To</th>
                                            <th class="text-center">
                                                File
                                            </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($assignments as $item)
                                            <tr class="align-middle">
                                                <td>
                                                    {{ $item->title }}
                                                </td>
                                                <td class="text-center">
                                                    @foreach ($students as $s)
                                                        @if ($s['id'] == $item->studentID)
                                                            {{ $s['name'] }}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                    {{ $item->sessionID }}
                                                </td>
                                                <td class="text-center">
                                                    {{ (new DateTime($item->dueFrom))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y-m-d h:i A') }}
                                                </td>
                                                <td>
                                                    {{ (new DateTime($item->dueTo))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y-m-d h:i A') }}
                                                </td>
                                                <td class="text-center">
                                                    @if ($item->filePath)
                                                        <a href="{{ $item->filePath }}">View File</a>
                                                    @else
                                                        None
                                                    @endif
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger text-white" data-bs-toggle="modal"
                                                        data-bs-target="#deleteAssModal"
                                                        onclick="deleteAss({{ $item->assignmentID }},'{{ $item->filePath }}')">
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
                                            @for ($i = 1; $i <= $assignments->lastPage(); $i++)
                                                <li class="page-item ">
                                                    <a class="page-link {{ $assignments->currentPage() == $i ? 'active' : '' }}"
                                                        href="{{ $assignments->url($i) }}">{{ $i }}</a>
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

    
    <div class="modal fade " id="deleteAssModal" tabindex="-1" role="dialog"
        aria-labelledby="deleteAssModalLabel" aria-hidden="true">
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

    @if (session()->pull('errorDeleteAss'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Delete Assignment, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorDeleteAss') }}
    @endif


    @if (session()->pull('successDeleteAss'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Deleted Assignment',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successDeleteAss') }}
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
