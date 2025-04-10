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
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4 bg-mbg">
            <div class="container-fluid">
                <a class="header-brand d-md-none" href="#">
                    <a href="/" class="sidebar-brand-full text-decoration-none">
                        <h3 class="m-0 text-primary text-white"> <span class="color-mbg">Little</span> Sunshine</h3>
                    </a>
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
            <img height="150px" src="/img/playground background.png" style="left: 20px;"
                class="background-image position-absolute bottom-0" alt="Left Image">
            <img height="150px" src="/img/flowerbackground.png"
                class="background-image position-absolute bottom-0 end-0" alt="Right Image">
        </div>
        <div class="body flex-grow-1 px-3 bg-content">
            <div class="container-lg">
                <div class="row mt-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive bg-white">
                                <table class="table border mb-0">
                                    <thead class="table-light fw-semibold ">
                                        <tr>
                                            <th class="text-center">Session Created Date</th>
                                            <th class="text-center">Session Number</th>
                                            <th class="text-center">Evaluation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($evaluations as $item)
                                            <tr class="align-middle" id="evals{{ $item['id'] }}">
                                                <td class="text-center">
                                                    {{ (new DateTime($item['created_at']))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y-m-d') }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $item['sessionID'] }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $item['evaluation'] }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
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

        function viewData(id) {
            let cont = document.getElementById(`cont${id}`);
            if (cont.getAttribute("style")) {
                cont.removeAttribute('style');
            } else {
                cont.setAttribute('style', "display:none;");
            }
            let evalsss = document.getElementById(`evals${id}`);
            evalsss.removeAttribute("style");
        }
    </script>

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


    @if (session()->pull('successLogin'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Login Successfully',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successLogin') }}
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
