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
                                                                <h4>Work Behavior</h4>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td>
                                                                Attention
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($workBehavior[$item['studentID']]['attention'])
                                                                    <select name="attention" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($workBehavior[$item['studentID']]['attention'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($workBehavior[$item['studentID']]['attention'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($workBehavior[$item['studentID']]['attention'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="attention" id=""
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
                                                                Concentration
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($workBehavior[$item['studentID']]['attention'])
                                                                    <select name="concentration" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($workBehavior[$item['studentID']]['attention'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($workBehavior[$item['studentID']]['attention'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($workBehavior[$item['studentID']]['attention'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="concentration" id=""
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
                                                                Frustration Tolerance
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($workBehavior[$item['studentID']]['tolerance'])
                                                                    <select name="tolerance" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($workBehavior[$item['studentID']]['tolerance'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($workBehavior[$item['studentID']]['tolerance'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($workBehavior[$item['studentID']]['tolerance'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="tolerance" id=""
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
                                                                Impulse Control
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($workBehavior[$item['studentID']]['impulse'])
                                                                    <select name="impulse" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($workBehavior[$item['studentID']]['impulse'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($workBehavior[$item['studentID']]['impulse'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($workBehavior[$item['studentID']]['impulse'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="impulse" id=""
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
                                                                Sitting Quality
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($workBehavior[$item['studentID']]['sitting'])
                                                                    <select name="sitting" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($workBehavior[$item['studentID']]['sitting'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($workBehavior[$item['studentID']]['sitting'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($workBehavior[$item['studentID']]['sitting'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="sitting" id=""
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
                                                                <h4>Social Skills</h4>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td>
                                                                Name Calling
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($socialSkills[$item['studentID']]['name'])
                                                                    <select name="name" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($socialSkills[$item['studentID']]['name'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($socialSkills[$item['studentID']]['name'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($socialSkills[$item['studentID']]['name'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="name" id=""
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
                                                                Eye Contact
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($socialSkills[$item['studentID']]['eye'])
                                                                    <select name="eye" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($socialSkills[$item['studentID']]['eye'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($socialSkills[$item['studentID']]['eye'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($socialSkills[$item['studentID']]['eye'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="eye" id=""
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
                                                                Joint Attention
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($socialSkills[$item['studentID']]['joint'])
                                                                    <select name="joint" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($socialSkills[$item['studentID']]['joint'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($socialSkills[$item['studentID']]['joint'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($socialSkills[$item['studentID']]['joint'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="joint" id=""
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
                                                                Verbal Communication
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($socialSkills[$item['studentID']]['verbal'])
                                                                    <select name="verbal" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($socialSkills[$item['studentID']]['verbal'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($socialSkills[$item['studentID']]['verbal'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($socialSkills[$item['studentID']]['verbal'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="verbal" id=""
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
                                                                Cooperation
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($socialSkills[$item['studentID']]['cooperation'])
                                                                    <select name="cooperation" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($socialSkills[$item['studentID']]['cooperation'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($socialSkills[$item['studentID']]['cooperation'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($socialSkills[$item['studentID']]['cooperation'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="cooperation" id=""
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
                                                                Active Listening
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($socialSkills[$item['studentID']]['activeListening'])
                                                                    <select name="activeListening" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($socialSkills[$item['studentID']]['activeListening'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($socialSkills[$item['studentID']]['activeListening'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($socialSkills[$item['studentID']]['activeListening'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="activeListening" id=""
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
                                                                Flexibility
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($socialSkills[$item['studentID']]['flexibility'])
                                                                    <select name="flexibility" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($socialSkills[$item['studentID']]['flexibility'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($socialSkills[$item['studentID']]['flexibility'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($socialSkills[$item['studentID']]['flexibility'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="flexibility" id=""
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
                                                                Following Decision
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($socialSkills[$item['studentID']]['decision'])
                                                                    <select name="decision" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($socialSkills[$item['studentID']]['decision'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($socialSkills[$item['studentID']]['decision'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($socialSkills[$item['studentID']]['decision'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="decision" id=""
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
                                                                Manners
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($socialSkills[$item['studentID']]['manners'])
                                                                    <select name="manners" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($socialSkills[$item['studentID']]['manners'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($socialSkills[$item['studentID']]['manners'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($socialSkills[$item['studentID']]['manners'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="manners" id=""
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
                                                                <h4>Cognitive Skills</h4>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td>
                                                                Match
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($cognitiveSkills[$item['studentID']]['match'])
                                                                    <select name="match" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($cognitiveSkills[$item['studentID']]['match'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($cognitiveSkills[$item['studentID']]['match'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($cognitiveSkills[$item['studentID']]['match'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="match" id=""
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
                                                                Sort
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($cognitiveSkills[$item['studentID']]['sort'])
                                                                    <select name="sort" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($cognitiveSkills[$item['studentID']]['sort'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($cognitiveSkills[$item['studentID']]['sort'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($cognitiveSkills[$item['studentID']]['sort'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="sort" id=""
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
                                                                Recognize
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($cognitiveSkills[$item['studentID']]['recognize'])
                                                                    <select name="recognize" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($cognitiveSkills[$item['studentID']]['recognize'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($cognitiveSkills[$item['studentID']]['recognize'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($cognitiveSkills[$item['studentID']]['recognize'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="recognize" id=""
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
                                                                Identify
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($cognitiveSkills[$item['studentID']]['identify'])
                                                                    <select name="identify" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($cognitiveSkills[$item['studentID']]['identify'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($cognitiveSkills[$item['studentID']]['identify'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($cognitiveSkills[$item['studentID']]['identify'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="identify" id=""
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
                                                                Following Instruction
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($cognitiveSkills[$item['studentID']]['instruction'])
                                                                    <select name="instruction" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($cognitiveSkills[$item['studentID']]['instruction'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($cognitiveSkills[$item['studentID']]['instruction'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($cognitiveSkills[$item['studentID']]['instruction'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="instruction" id=""
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
                                                                <h4>FMS</h4>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td>
                                                                In-hand Manipulation
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($fms[$item['studentID']]['manipulation'])
                                                                    <select name="manipulation" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($fms[$item['studentID']]['manipulation'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['manipulation'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['manipulation'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="manipulation" id=""
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
                                                                Eye-hand Coordination
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($fms[$item['studentID']]['coordination'])
                                                                    <select name="coordination" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($fms[$item['studentID']]['coordination'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['coordination'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['coordination'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="coordination" id=""
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
                                                                Tracing
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($fms[$item['studentID']]['tracing'])
                                                                    <select name="tracing" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($fms[$item['studentID']]['tracing'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['tracing'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['tracing'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="tracing" id=""
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
                                                                Imitating
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($fms[$item['studentID']]['imatating'])
                                                                    <select name="imatating" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($fms[$item['studentID']]['imatating'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['imatating'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['imatating'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="imatating" id=""
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
                                                                Copying
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($fms[$item['studentID']]['copying'])
                                                                    <select name="copying" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($fms[$item['studentID']]['copying'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['copying'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['copying'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="copying" id=""
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
                                                                Writing
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($fms[$item['studentID']]['writing'])
                                                                    <select name="writing" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($fms[$item['studentID']]['writing'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['writing'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['writing'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="writing" id=""
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
                                                                Coloring
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($fms[$item['studentID']]['coloring'])
                                                                    <select name="coloring" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($fms[$item['studentID']]['coloring'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['coloring'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['coloring'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="coloring" id=""
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
                                                                Painting
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($fms[$item['studentID']]['painting'])
                                                                    <select name="painting" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($fms[$item['studentID']]['painting'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['painting'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['painting'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="painting" id=""
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
                                                                Cutting
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($fms[$item['studentID']]['cutting'])
                                                                    <select name="cutting" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($fms[$item['studentID']]['cutting'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['cutting'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['cutting'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="cutting" id=""
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
                                                                Folding
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($fms[$item['studentID']]['folding'])
                                                                    <select name="folding" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($fms[$item['studentID']]['folding'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['folding'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['folding'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="folding" id=""
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
                                                                Strength
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($fms[$item['studentID']]['strength'])
                                                                    <select name="strength" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($fms[$item['studentID']]['strength'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['strength'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($fms[$item['studentID']]['strength'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="strength" id=""
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
                                                                <h4>GMS</h4>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td>
                                                                Motor Planning
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($gms[$item['studentID']]['planning'])
                                                                    <select name="planning" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($gms[$item['studentID']]['planning'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($gms[$item['studentID']]['planning'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($gms[$item['studentID']]['planning'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="planning" id=""
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
                                                                Balance And Coordination
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($gms[$item['studentID']]['balance'])
                                                                    <select name="balance" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($gms[$item['studentID']]['balance'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($gms[$item['studentID']]['balance'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($gms[$item['studentID']]['balance'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="balance" id=""
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
                                                                Body Awareness
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($gms[$item['studentID']]['body'])
                                                                    <select name="body" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($gms[$item['studentID']]['body'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($gms[$item['studentID']]['body'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($gms[$item['studentID']]['body'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="body" id=""
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
                                                                Physical Strength
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($gms[$item['studentID']]['strength'])
                                                                    <select name="strength" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($gms[$item['studentID']]['strength'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($gms[$item['studentID']]['strength'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($gms[$item['studentID']]['strength'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="strength" id=""
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
                                                                Reaction Time
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($gms[$item['studentID']]['reaction'])
                                                                    <select name="reaction" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($gms[$item['studentID']]['reaction'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($gms[$item['studentID']]['reaction'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($gms[$item['studentID']]['reaction'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="reaction" id=""
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
                                                                <h4>ADLs</h4>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="align-middle">
                                                            <td>
                                                                Feeding
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($adls[$item['studentID']]['feeding'])
                                                                    <select name="feeding" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($adls[$item['studentID']]['feeding'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($adls[$item['studentID']]['feeding'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($adls[$item['studentID']]['feeding'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="feeding" id=""
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
                                                                Dressing
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($adls[$item['studentID']]['dressing'])
                                                                    <select name="dressing" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($adls[$item['studentID']]['dressing'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($adls[$item['studentID']]['dressing'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($adls[$item['studentID']]['dressing'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="dressing" id=""
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
                                                                Grooming
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($adls[$item['studentID']]['grooming'])
                                                                    <select name="grooming" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($adls[$item['studentID']]['grooming'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($adls[$item['studentID']]['grooming'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($adls[$item['studentID']]['grooming'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="grooming" id=""
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
                                                                Bathing
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($adls[$item['studentID']]['bathing'])
                                                                    <select name="bathing" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($adls[$item['studentID']]['bathing'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($adls[$item['studentID']]['bathing'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($adls[$item['studentID']]['bathing'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="bathing" id=""
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
                                                                Meal Preparation
                                                            </td>
                                                            <td class="text-center">
                                                                @if ($adls[$item['studentID']]['meal'])
                                                                    <select name="meal" id=""
                                                                        class="form-control text-center">
                                                                        <option value="">Select Grade</option>
                                                                        @if ($adls[$item['studentID']]['meal'] == 'good')
                                                                            <option value="good" selected>Good
                                                                            </option>
                                                                        @else
                                                                            <option value="good">Good</option>
                                                                        @endif

                                                                        @if ($adls[$item['studentID']]['meal'] == 'poor')
                                                                            <option value="poor" selected>Poor
                                                                            </option>
                                                                        @else
                                                                            <option value="poor">Poor</option>
                                                                        @endif

                                                                        @if ($adls[$item['studentID']]['meal'] == 'fair')
                                                                            <option value="fair" selected>Fair
                                                                            </option>
                                                                        @else
                                                                            <option value="fair">Fair</option>
                                                                        @endif
                                                                    </select>
                                                                @else
                                                                    <select name="meal" id=""
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
                            <embed style="height: 450px; width: 100%;" class="embed-responsive mt-2" id="pdfViewer2"
                                src="" type="application/pdf">

                            <iframe style="height: 500px; width: 100%; display:none;" id="linkViewer" width="560"
                                height="315" src="" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>

                            <audio controls style="height: 500px; width: 100%; display:none;" id="audioPlayer">
                                <source src="" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>


                            <a id="myLink" target="_blank" href="" class="text-decoration-none">If
                                File Or Link is
                                broken, please click this</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="docu">Student Answer:<span class="text-danger"></span></label>
                            <embed style="height: 450px; width: 100%;" class="embed-responsive mt-2" id="pdfViewer3"
                                src="" type="application/pdf">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                </div>
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
            let linkViewer = document.getElementById('linkViewer');
            let audioPlayer = document.getElementById('audioPlayer');
            if (getFileType(filePath) == "video") {

                pdfViewer2.setAttribute("style", "display:none");
                audioPlayer.setAttribute("style", "display:none");
                linkViewer.setAttribute("style", "height: 500px; width: 100%; ");
                linkViewer.src = getEmbedUrl(filePath);
            } else if (getFileType(filePath) == "audio") {
                pdfViewer2.setAttribute("style", "display:none");
                linkViewer.setAttribute("style", "display:none");
                audioPlayer.setAttribute("style", "height: 500px; width: 100%; ");
                audioPlayer.src = getEmbedUrl(filePath);
            } else {

                pdfViewer2.setAttribute("style", "height: 500px; width: 100%; ");
                linkViewer.setAttribute("style", "display:none");
                audioPlayer.setAttribute("style", "display:none");
                pdfViewer2.src = filePath;
            }

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

        function getFileType(url) {
            const audioExtensions = ['.mp3', '.wav', '.ogg', '.flac', '.aac', '.m4a'];
            const videoExtensions = ['.mp4', '.avi', '.mkv', '.webm', '.mov', '.flv'];
            const imageExtensions = ['.jpg', '.jpeg', '.png', '.gif', '.bmp', '.svg', '.webp'];

            const ext = url.split('.').pop().toLowerCase();

            if (audioExtensions.includes('.' + ext)) {
                return 'audio';
            } else if (videoExtensions.includes('.' + ext)) {
                return 'video';
            } else if (imageExtensions.includes('.' + ext)) {
                return 'image';
            } else {
                return 'unknown';
            }
        }

        // Test the function
        const url = 'https://example.com/video.mp4'; // Replace with your URL
        console.log(getFileType(url)); // Outputs: 'video'


        function getEmbedUrl(url) {
            // YouTube
            if (url.includes("youtube.com/watch") || url.includes("youtu.be")) {
                let videoId = '';
                if (url.includes("youtube.com")) {
                    const urlParams = new URLSearchParams(new URL(url).search);
                    videoId = urlParams.get("v");
                } else if (url.includes("youtu.be")) {
                    videoId = url.split("youtu.be/")[1];
                }
                return `https://www.youtube.com/embed/${videoId}`;
            }

            // Vimeo
            if (url.includes("vimeo.com")) {
                const match = url.match(/vimeo\.com\/(\d+)/);
                if (match) {
                    return `https://player.vimeo.com/video/${match[1]}`;
                }
            }

            // Facebook (requires Facebook SDK, so just return null here)
            if (url.includes("facebook.com")) {
                return null; // Facebook embedding is complex and requires SDK
            }

            // Self-hosted (e.g., .mp4 files)
            if (url.endsWith(".mp4")) {
                return url; // You can use <video> tag for this
            }

            return url; // Unknown or unsupported format
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
