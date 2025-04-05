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


    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/prism.css">
    <link href="/assets/examples.css" rel="stylesheet">
    <script type="text/javascript" async src="/assets/js"></script>
    <script src="/assets/667090843876081" async></script>
    <style>
        body {
            font-family: "Nunito", sans-serif !important;
            background-color: #d95c5c !important;

        }

        .font-weight-bold {
            font-weight: 700 !important;
        }

        .bg-mbg {
            background-color: #ffffff !important;
            color: rgb(0, 0, 0) !important;
        }

        .color-mbg {
            color: #d95c5c !important;
        }

        .sidebar {
            --cui-sidebar-bg: #d95c5c !important;
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
            height: 450px !important;
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

        .text-primary {
            color: #d95c5c !important;
        }

        .btn-primary,
        .bg-primary {

            background-color: #d95c5c !important;
        }

        .table-light {
            --cui-table-bg: #d95c5c !important;
        }
    </style>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex bg-mbg "
            style="font-size: 30px;
        font-weight: 700 !important;">

            <a href="/" class="sidebar-brand-full text-decoration-none">
                <span class="text-primary">Little <span style="color:black !important;">Sunshine</span>
                </span>
            </a>
            <a href="/" class="sidebar-brand-narrow text-decoration-none font-weight-bold">
                <span class="text-primary">Little <span style="color:black !important;">Sunshine</span>
                </span>
            </a>
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                            aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">

                            <div class="simplebar-content" style="padding: 0px;">
                                <div class="container">
                                    <div class="row">
                                        <div style="background-color: rgb(63, 63, 63); ">
                                            <center>
                                                List Of Students
                                            </center>
                                        </div>
                                    </div>
                                    <div class="card mt-2">
                                        <div class="card-body">
                                            <div class="table-responsive bg-white">
                                                <table class="table border mb-0">
                                                    <thead class="table-light fw-semibold">
                                                        <tr class="align-middle">
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($students as $item)
                                                            <tr class="align-middle">
                                                                <td class="text-center" style="cursor: pointer"
                                                                    onclick="viewData({{ $item->id }})">
                                                                    {{ $item->name }} </td>
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
                </div>
                <div class="simplebar-placeholder" style="width: 256px; height: 841px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                    style="height: 247px; transform: translate3d(0px, 0px, 0px); display: block;">
                </div>
            </div>
        </ul>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4 bg-mbg">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector(&#39;#sidebar&#39;)).toggle()">
                    <img src="/menu.svg" alt="" srcset="" class="icon icon-lg">
                </button>
                <a class="header-brand d-md-none" href="#">

                </a>

                <ul class="header-nav d-none d-md-flex">
                </ul>
                <ul class="header-nav ms-auto">
                </ul>
                <ul class="header-nav ms-3">
                    <li class="nav-item">
                        <a href="/teacher_home" class="btn btn-primary text-white px-4">Go Back</a>
                    </li>
                </ul>
            </div>
        </header>
        <div class="background position-relative" style="position: fixed !important; margin-top: 350px;">
            <img height="150px" src="/img/playground background.png" style="left: 20px;"
                class="background-image position-absolute bottom-0" alt="Left Image">
            <img height="150px" src="/img/flowerbackground.png"
                class="background-image position-absolute bottom-0 end-0" alt="Right Image">
        </div>
        <div class="body flex-grow-1 px-3 bg-content">
            @foreach ($studentAss as $assItems)
                <div class="container" id="myData{{ $assItems[0]['studentID'] }}" style="display: none;">
                    <div class="row mt-3">
                        <div class="col-lg-12 d-flex">
                            <button class="btn btn-white "
                                onclick="showSubmittedAss({{ $assItems[0]['studentID'] }})">View Submitted
                                Assignments</button>
                            <button class="btn btn-white"
                                onclick="showSubmittedGrade({{ $assItems[0]['studentID'] }})">Submit Grade</button>
                        </div>
                    </div>

                    <div class="row mt-5" id="viewSubmittedAss{{ $assItems[0]['studentID'] }}"
                        style="display: none;">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive bg-white">
                                        <table class="table border mb-0">
                                            <thead class="table-light fw-semibold">
                                                <tr class="align-middle">
                                                    <th></th>
                                                    <th class="text-center"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($assItems as $ass)
                                                    <tr class="align-middle">
                                                        <td>
                                                            <h5>{{ $ass['title'] }}</h5>
                                                        </td>
                                                        <td class="text-center">
                                                            <button class="btn btn-primary text-white"
                                                                data-coreui-target="#previewModal"
                                                                data-coreui-toggle="modal"
                                                                onclick="previewAns({{ $ass['studentID'] }},'{{ $ass['filePath'] }}')">Preview</button>
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

                    <div class="row mt-5" id="viewGrade{{ $assItems[0]['studentID'] }}" style="display: none;">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive bg-white">
                                        <table class="table border mb-0">
                                            <thead class="table-light fw-semibold">
                                                <tr class="align-middle">
                                                    <th class="text-white">Field:</th>
                                                    <th class="text-center text-white">Grade</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($grades as $item)
                                                    <form action="/teacher_grading" method="post"
                                                        id="gradeForm{{ $item['id'] }}">
                                                        @csrf
                                                        <tr class="align-middle">
                                                            <td>
                                                                Work Behavior
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($item['workBehavior'])
                                                                    <select name="workBehavior" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($item['workBehavior'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($item['workBehavior'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($item['workBehavior'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="workBehavior" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        <option value="good">Good</option>
                                                                        <option value="poor">Poor</option>
                                                                        <option value="fair">Fair</option>
                                                                    </select>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td>
                                                                Social Skills
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($item['socialSkills'])
                                                                    <select name="socialSkills" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($item['socialSkills'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($item['socialSkills'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($item['socialSkills'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="socialSkills" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        <option value="good">Good</option>
                                                                        <option value="poor">Poor</option>
                                                                        <option value="fair">Fair</option>
                                                                    </select>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td>
                                                                Cognitive Skills
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($item['cognitiveSkills'])
                                                                    <select name="cognitiveSkills" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($item['cognitiveSkills'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($item['cognitiveSkills'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($item['cognitiveSkills'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="cognitiveSkills" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        <option value="good">Good</option>
                                                                        <option value="poor">Poor</option>
                                                                        <option value="fair">Fair</option>
                                                                    </select>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td>
                                                                FMS
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($item['fms'])
                                                                    <select name="fms" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($item['fms'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($item['fms'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($item['fms'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="fms" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        <option value="good">Good</option>
                                                                        <option value="poor">Poor</option>
                                                                        <option value="fair">Fair</option>
                                                                    </select>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td>
                                                                GMS
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($item['gms'])
                                                                    <select name="gms" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($item['gms'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($item['gms'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($item['gms'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="gms" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        <option value="good">Good</option>
                                                                        <option value="poor">Poor</option>
                                                                        <option value="fair">Fair</option>
                                                                    </select>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td>
                                                                ADLs
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($item['adls'])
                                                                    <select name="adls" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($item['adls'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($item['adls'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($item['adls'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="adls" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        <option value="good">Good</option>
                                                                        <option value="poor">Poor</option>
                                                                        <option value="fair">Fair</option>
                                                                    </select>
                                                                @endif
                                                            </td>
                                                        </tr>

                                                        <tr class="align-middle">
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <input type="hidden" name="sid"
                                                                    value="{{ $assItems[0]['studentID'] }}">
                                                                <button type="submit" style="float:right;"
                                                                    class="btn btn-primary" name="btnSave"
                                                                    value="yes">Save</button>
                                                            </td>
                                                        </tr>
                                                    </form>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="modal fade" id="previewModal" tabindex="-1" role="dialog" aria-labelledby="previewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="previewModalLabel">Student Assignment Details</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="docu">Assignment Document:<span class="text-danger"></span></label>
                            <embed style="height: 500px; width: 100%;" class="embed-responsive mt-2" id="pdfViewer2"
                                src="" type="application/pdf">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="docu">Student Answer:<span class="text-danger"></span></label>
                            <embed style="height: 500px; width: 100%;" class="embed-responsive mt-2" id="pdfViewer3"
                                src="" type="application/pdf">
                        </div>
                    </div>
                    <form action="/teacher_grading" method="post">
                        @csrf

                        <div class="row mt-3">
                            <div class="form-group">
                                <label for="rating">Rating:<span class="text-danger">*</span></label>
                                <select required name="rating" id="myRating" class="form-control mt-2">
                                    <option value="">Select Rating</option>
                                    <option value="good">Good</option>
                                    <option value="fair">Fair</option>
                                    <option value="poor">Poor</option>
                                </select>
                                <input style="display: none;" type="text" name="" id="myRating2"
                                    class="form-control">
                                <input type="hidden" name="id" id="subID">
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" name="btnRating" value="yes"
                        id="btnRating">Yes,
                        Proceed</button>
                </div>

                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Evaluation</h5>
                </div>
                <div class="modal-body">
                    <form action="/teacher_eval" method="post" id="deleteEvalForm">
                        @method('delete')
                        @csrf
                        <div class="form-group">
                            <h6>Are You Sure You Want To Delete This Evaluation</h6>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" name="btnDeleteEvaluation" value="yes">Yes,
                        Proceed</button>
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
        let submissions = @json($submissions);
        let latestOpenId = 0;

        function previewAns(id, filePath) {
            let pdfViewer2 = document.getElementById('pdfViewer2');
            pdfViewer2.src = filePath;
            let sub = submissions[id];
            if (sub) {
                console.log(sub);
                let pdfViewer3 = document.getElementById('pdfViewer3');
                pdfViewer3.src = sub['document'];

                let subID = document.getElementById('subID');
                subID.setAttribute("value", sub['id']);

                if (sub['rating']) {
                    let btnRating = document.getElementById('btnRating');
                    btnRating.setAttribute("style", "display:none");
                    let myRating = document.getElementById("myRating");
                    myRating.setAttribute("style", "display:none");
                    let myRating2 = document.getElementById("myRating2");
                    myRating2.removeAttribute("style");
                    myRating2.setAttribute("value", sub["rating"]);
                } else {

                    let btnRating = document.getElementById('btnRating');
                    btnRating.removeAttribute("style");

                    let myRating = document.getElementById("myRating");
                    myRating.removeAttribute("style");

                    let myRating2 = document.getElementById('myRating2');
                    myRating2.setAttribute("style", "display:none");
                }

            }
        }

        function showSubmittedGrade(id) {

            let grade = document.getElementById(`viewGrade${id}`);
            if (grade.getAttribute("style")) {

                grade.removeAttribute("style");
            } else {

                grade.setAttribute("style", "display:none");
            }
        }


        function showSubmittedAss(id) {

            let assignments = document.getElementById(`viewSubmittedAss${id}`);
            if (assignments.getAttribute("style")) {

                assignments.removeAttribute("style");
            } else {

                assignments.setAttribute("style", "display:none");
            }
        }

        function viewData(id) {
            if (latestOpenId == 0) {
                latestOpenId = id;
            } else {

                try {
                    let studData = document.getElementById(`myData${latestOpenId}`);
                    if (studData.getAttribute("style")) {} else {
                        latestOpenId = id;
                        studData.setAttribute("style", "display:none;");
                    }
                } catch (e) {

                }
            }

            try {
                let assignments = document.getElementById(`viewSubmittedAss${id}`);
                assignments.setAttribute("style", "display:none");
            } catch (e) {

            }

            try {
                let studData = document.getElementById(`myData${id}`);
                if (studData.getAttribute("style")) {
                    studData.removeAttribute("style");
                } else {
                    studData.setAttribute("style", "display:none;");
                }
            } catch (e) {

            }
        }

        function deleteThis(id) {
            let deleteEvalForm = document.getElementById('deleteEvalForm');
            deleteEvalForm.action = `/teacher_eval/${id}`;
        }
    </script>

    @if (session()->pull('errorAddEval'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Add Evaluation, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorAddEval') }}
    @endif


    @if (session()->pull('successDeleteEval'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Deleted Evaluation',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successDeleteEval') }}
    @endif

    @if (session()->pull('successUpdateGrade'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Updated Grade',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successUpdateGrade') }}
    @endif

    @if (session()->pull('successUpdateSubmit'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Rated Assignment',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successUpdateSubmit') }}
    @endif

    @if (session()->pull('errorUpdateSubmit'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Rate Student\'s Assignment, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorUpdateSubmit') }}
    @endif

    @if (session()->pull('errorUpdateGrade'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Update Grade, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorUpdateGrade') }}
    @endif


    @if (session()->pull('errorDeleteEval'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Delete Evaluation, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorDeleteEval') }}
    @endif
</body>

</html>
