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
            <div class="row g-5">
                <div class="col-lg-12">
                    <button class="btn btn-secondary" data-toggle="modal" data-target="#addBookModal">
                        Add
                    </button>
                </div>
            </div>
            <div class="row g-5 mt-3" style="margin-bottom: 500px;">
                @foreach ($books as $item)
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body mx-auto">
                                <img src="{{ $item['thumbnail'] }}" alt="" srcset=""
                                    style="height: 150px; width:150px;">
                                <br>
                                <div class="row">
                                    <div class="col-lg-12 d-flex">
                                        <form action="/teacher_books/{{ $item['id'] }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <input type="hidden" name="book" value="{{ $item['book'] }}">
                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                                data-target="#viewBookModal"
                                                onclick="viewBook('{{ $item['book'] }}','{{ $item['link'] }}')">View</button>
                                            <button type="submit" class="btn btn-primary btn-sm"
                                                style="margin-left: 10px;" name="btnDeleteBook"
                                                value="yes">Delete</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
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
    <div class="modal fade " id="addBookModal" tabindex="-1" role="dialog" aria-labelledby="addBookModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 style="margin: 0; color: #333;">Add New Book</h3>
                </div>
                <form id="assForm" action="/teacher_books" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" id="bookTitle"
                                placeholder="Book Title">
                            <label class="text-dark mt-2" for="thumbnail">Thumbnail</label>
                            <input type="file" name="thumbnail" class="form-control mt-2" id="bookImage"
                                accept=".jpg,.jpeg,.png">
                            <label class="text-dark mt-2" for="book">Book File</label>
                            <input type="file" name="book" class="form-control mt-2" id="bookFile"
                                accept=".pdf">
                            <input type="text" name="bookLink" class="form-control mt-2" id="bookLink"
                                placeholder="Link URL">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            style="color:white !important;">Close</button>
                        <button type="submit" class="btn btn-danger" name="btnAddBook" value="yes"
                            style="color:white !important;">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade " id="viewBookModal" tabindex="-1" role="dialog" aria-labelledby="viewBookModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 style="margin: 0; color: #333;">View Book</h3>
                </div>
                <form id="assForm" action="/teacher_books" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <center>
                                <embed style="height: 800px; width: 100%;" class="embed-responsive mt-2"
                                    id="pdfViewer" src="" type="application/pdf">

                                <iframe style="height: 500px; width: 100%; display:none;" id="linkViewer"
                                    width="560" height="315" src="" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>

                                <a id="myLink" target="_blank" href="" class="text-decoration-none">If File Or Link is
                                    broken, please click this</a>
                            </center>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            style="color:white !important;">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function viewBook(filePath, linkFilePath) {
            let pdfViewer = document.getElementById('pdfViewer');
            let linkViewer = document.getElementById('linkViewer');
            let myLink = document.getElementById('myLink');
            pdfViewer.src = filePath;
            if (filePath) {
                linkViewer.setAttribute("style", "display:none");
                pdfViewer.setAttribute("style", "height: 800px; width: 100%;");
                pdfViewer.src = filePath;
                myLink.href = filePath;
            }
            if (linkFilePath) {
                pdfViewer.setAttribute("style", "display:none");
                linkViewer.setAttribute("style", "height: 500px; width: 100%;");
                linkViewer.src = linkFilePath;
                myLink.href = linkFilePath;
            }



        }

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

    @if (session()->pull('errorDeleteBook'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Delete Book, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorDeleteBook') }}
    @endif


    @if (session()->pull('successDeleteBook'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Deleted Book',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successDeleteBook') }}
    @endif

    @if (session()->pull('successAddBook'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Added Book',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successAddBook') }}
    @endif

    @if (session()->pull('errorAddBook'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Add Book, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorAddBook') }}
    @endif
</body>

</html>
