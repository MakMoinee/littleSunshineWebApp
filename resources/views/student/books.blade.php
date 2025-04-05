<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;
      charset=UTF-8">
    <!--<base href="./">-->
    <base href=".">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,
      shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin
      Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Little Sunshine</title>
    <link rel="manifest" href="https://coreui.io/demos/bootstrap/4.2/free/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link href="/img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="/assets/simplebar.css">
    <link rel="stylesheet" href="/assets/simplebar(1).css">

    <link href="/assets/style.css" rel="stylesheet">

    <link rel="stylesheet" href="/assets/prism.css">
    <link href="/assets/examples.css" rel="stylesheet">
    <script type="text/javascript" async src="/assets/js"></script>
    <script src="/assets/667090843876081" async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/4.8.69/pdf.min.mjs"></script>
    <style>
        .bg-mbg {
            background-color: #1b2e3d !important;
            color: white !important;
        }

        .bg-gred {
            background-color: #d95c5c !important;
            color: white !important;
        }

        .color-mbg {
            color: #d95c5c !important;
        }

        .sidebar {
            --cui-sidebar-bg: white !important;
        }

        /* .fc-col-header-cell-cushion */
        :root {
            --fc-border-color: black;
            --fc-daygrid-event-dot-width: 5px;
            --fc-col-header-cell-cushion: black;
        }

        .micon {
            width: 140px;
            height: 140px;
        }

        .mimage {

            width: 140px;
            height: 140px;
        }

        .fc-event {
            text-decoration: none !important;
            /* Ensures no underlines or strikethroughs */
            color: white !important;
            /* Makes event text white */
        }

        .fc-col-header-cell {
            color: rgb(0, 0, 0) !important;
        }

        .fc .fc-toolbar-title {
            color: rgb(0, 0, 0) !important;
            font-size: 15px !important;

        }

        .fc .fc-toolbar-title,
        .fc .fc-button-primary:disabled,
        .fc .fc-button:not(:disabled) {
            font-size: 15px !important;
        }

        .fc-button-group {
            margin-top: 10px !important;
        }



        #calendar {
            color: white !important;
            background-color: white !important;
            padding: 5px;
            height: 350px !important;
        }

        .fc-daygrid-day-number {
            color: rgb(0, 0, 0) !important;
            text-decoration: none !important;
            font-size: 11px !important;
        }

        .fc-col-header-cell-cushion {
            color: rgb(0, 0, 0) !important;
            text-decoration: none !important;
            font-size: 11px !important;
        }

        .fc-day-today {
            background-color: #d95c5c !important;
            /* Change this to any color you want */
            color: white !important;
            /* Ensures text remains readable */
        }

        .bg-content {
            background-color: white !important;
        }

        .background {
            position: fixed;
            bottom: 0;
            width: 80%;
            height: 550px;
        }
    </style>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <header class="header header-sticky mb-4 bg-mbg">
        <div class="container-fluid">
            <div class="sidebar-brand d-none d-md-flex bg-mbg">

                <a href="/" class="sidebar-brand-full text-decoration-none">
                    <h3 class="m-0 text-primary text-white"> <span class="color-mbg">Little</span> Sunshine</h3>
                </a>
                <a href="/" class="sidebar-brand-narrow text-decoration-none">
                    <h3 class="m-0 text-primary text-white"> <span class="color-mbg">Little</span> Sunshine</h3>
                </a>
            </div>
            <a class="header-brand d-md-none" href="#">

            </a>

            <ul class="header-nav d-none d-md-flex">
            </ul>
            <ul class="header-nav ms-auto">
            </ul>
            <ul class="header-nav ms-3">
                <li class="nav-item">
                    <a href="/student_home" class="btn"
                        style="background-color: white !important; color: rgb(0, 0, 0) !important;">
                        Back
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <div class="background position-relative" style="position: fixed !important; margin-top: 350px;">
        <div class="col-lg-12">
            <img height="150px" src="/img/playground background.png" style="left: 50px;"
                class="background-image position-absolute bottom-0" alt="Left Image">
            <img height="150px" src="/img/flowerbackground.png"
                class="background-image position-absolute bottom-0 end-0" alt="Right Image">
        </div>
    </div>
    <div class="body flex-grow-1 px-3 bg-content">
        <div class="container-md">
            <div class="row g-5 mt-3" style="margin-bottom: 500px;">
                @foreach ($books as $item)
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body mx-auto">
                                <img src="{{ $item['thumbnail'] }}" alt="" srcset=""
                                    style="height: 150px; width:150px;">
                                <br>
                                <div class="row">
                                    <div class="col-lg-5 mx-auto d-flex">
                                        <h5 class="text-dark text-center">{{ $item['title'] }}</h5>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-5 mx-auto d-flex">
                                        <button type="button" class="btn btn-success text-white btn-sm"
                                            data-coreui-toggle="modal" data-coreui-target="#viewBookModal"
                                            onclick="viewBook('{{ $item['book'] }}','{{ $item['link'] }}')">View</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
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
                            <embed style="height: 500px; width: 100%;" class="embed-responsive mt-2" id="pdfViewer"
                                src="" type="application/pdf">
                        </center>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal"
                        style="color:white !important;">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="/assets/coreui.bundle.min.js.download"></script>
<script src="/assets/simplebar.min.js.download"></script>

<script src="/assets/chart.min.js.download"></script>
<script src="/assets/coreui-utils.js.download"></script>
<script src="/assets/main.js.download"></script>
<script></script>


<script>
    let activeId;

    function viewBook(filePath) {
        let pdfViewer = document.getElementById('pdfViewer');
        pdfViewer.src = filePath;

        if (filePath) {
            pdfViewer.src = filePath;
        } else {
            pdfViewer.src = linkFilePath;
        }

    }

    function viewAss(id) {
        if (activeId && activeId != id) {
            let oldAss = document.getElementById(`ass${activeId}`);
            oldAss.style = "display:none";
        }
        let ass = document.getElementById(`ass${id}`);
        if (ass.getAttribute("style")) {
            ass.removeAttribute('style');
            activeId = id;
        } else {
            ass.style = "display:none";
            activeId = id;
        }
    }

    function previewData(event, id) {
        var files = event.currentTarget.files;
        if (files && files[0]) {
            var reader = new FileReader();
            reader.onload = function() {
                console.log("here");
                var output = document.getElementById(`pdfViewer2${id}`);
                output.removeAttribute("style");
                output.setAttribute("style", "height: 500px; width: 100%;");
                output.src = reader.result;
            };
            reader.readAsDataURL(files[0]);
        }
    }
</script>

@if (session()->pull('errorSubmit'))
    <script>
        setTimeout(() => {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Failed To Submit Answer, Please Try Again ',
                showConfirmButton: false,
                timer: 800
            });
        }, 500);
    </script>
    {{ session()->forget('errorSubmit') }}
@endif


@if (session()->pull('successSubmit'))
    <script>
        setTimeout(() => {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Successfully Submitted Answer',
                showConfirmButton: false,
                timer: 800
            });
        }, 500);
    </script>
    {{ session()->forget('successSubmit') }}
@endif

@if (session()->pull('errorAnswerExist'))
    <script>
        setTimeout(() => {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'You Have Already Answered This Assignment, Please Try Again Later',
                showConfirmButton: false,
                timer: 800
            });
        }, 500);
    </script>
    {{ session()->forget('errorAnswerExist') }}
@endif
</body>

</html>
