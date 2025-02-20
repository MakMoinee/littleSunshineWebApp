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
    <style>
        .bg-mbg {
            background-color: #1b2e3d !important;
            color: white !important;
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

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex bg-mbg">

            <a href="/" class="sidebar-brand-full text-decoration-none">
                <h3 class="m-0 text-primary text-white"> <span class="color-mbg">Little</span> Sunshine</h3>
            </a>
            <a href="/" class="sidebar-brand-narrow text-decoration-none">
                <h3 class="m-0 text-primary text-white"> <span class="color-mbg">Little</span> Sunshine</h3>
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
                        <a href="/" class="btn"
                            style="background-color: white !important; color: rgb(0, 0, 0) !important;">
                            Back
                        </a>
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
            @foreach ($students as $item)
                <div class="container-lg" id="stud{{ $item->id }}" style="display: none">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>
                                Student: {{ $item->name }}
                            </h3>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive bg-white">
                                    <table class="table border mb-0">
                                        <thead class="table-light fw-semibold ">
                                            <tr class="align-middle">
                                                <th>Session #</th>
                                                <th>Evaluation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (json_decode(DB::table('vweval')->where('studentID', '=', $item->id)->get(), true) as $ss)
                                                <tr class="align-middle">
                                                    <td>
                                                        {{ $ss['sessionID'] }}
                                                    </td>
                                                    <td>
                                                        {{ $ss['evaluation'] }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <button class="btn bg-mbg btn-sm" style="float: right" data-coreui-toggle="modal"
                                    data-coreui-target="#addEvalModal">Add Evaluation</button>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="modal fade" id="addEvalModal" tabindex="-1" role="dialog" aria-labelledby="addEvalModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEvalModalLabel">Add Evaluation</h5>
                </div>
                <div class="modal-body">
                    <form action="/teacher_eval" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="text-dark" for="sessionNum">Session:<span class="text-danger">*</span>
                            </label>
                            <br>
                            @foreach ($students as $item)
                                <select required name="sessionNum" id="sess{{ $item->id }}"
                                    class="form-control mt-1" style="display: none;">
                                    <option value="">Select Session</option>
                                    @foreach ($mSessions as $s)
                                        @if ($item->id == $s['studentID'])
                                            <option value="{{ $s['id'] }}">{{ $s['details'] }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            @endforeach

                        </div>
                        <div class="form-group mt-2">
                            <label for="evaluation">Evaluation:<span class="text-danger">*</span> </label>
                            <br>
                            <textarea required name="evaluation" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="btnAddEvaluation"
                        value="yes">Save</button>
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
        function viewData(id) {
            let sess = document.getElementById(`sess${id}`);
            sess.removeAttribute("style");

            let studData = document.getElementById(`stud${id}`);
            if (studData.getAttribute("style")) {
                studData.removeAttribute("style");
            } else {
                studData.setAttribute("style", "display:none;");
            }
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


    @if (session()->pull('successAddEval'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Added Evaluation',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successAddEval') }}
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
