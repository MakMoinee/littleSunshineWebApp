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
                                <form action="/teacher_profile" method="post" id="teacherNameForm"
                                    onsubmit="return false;">
                                    @csrf
                                    <div class="container mt-3">
                                        <div class="row">
                                            <div class="col-lg-6 mx-auto">
                                                <img style="height: 100px;" src="/account.svg" alt=""
                                                    srcset="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 mx-auto">
                                                @if ($teacher && $teacher['name'])
                                                    <center>
                                                        <h5 id="noUsername">{{ $teacher['name'] }}</h5>
                                                    </center>
                                                @else
                                                    <center>
                                                        <h5 id="noUsername">No Name</h5>
                                                    </center>
                                                @endif

                                                <input required id="teacherName" style="display: none;" required
                                                    type="text" name="name" id="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-lg-4 mx-auto d-flex">
                                                <button type="submit" class="invisible" style="display: none;"
                                                    name="btnEditTeacherName" id="btnEditTeacherName"
                                                    value="yes">Sample</button>
                                                <button type="button" class="btn btn-primary"
                                                    onclick="editName()">Edit</button>
                                                <button type="reset" class="btn btn-danger text-white" id="btnClear"
                                                    style="display: none;" onclick="clearMe()">Clear</button>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <hr style="height: 0px;border: none; border-top: 10px solid white;">
                                        </div>
                                    </div>
                                </form>
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
                        <a href="/teacher_home" class="btn"
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

                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-header" style="background-color: #d95c5c">
                                <div class="container-md">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="text-white">Teacher's Information</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="/teacher_profile" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="row d-flex">
                                        <div class="col-md-4 form-group">
                                            <label for="address" class="text-dark"><b>Address:</b><span
                                                    class="text-danger">*</span> </label>
                                            @if ($teacher && $teacher['address'])
                                                <textarea required name="address" id="" cols="30" rows="5" class="form-control">{{ $teacher['address'] }}</textarea>
                                            @else
                                                <textarea required name="address" id="" cols="30" rows="5" class="form-control"></textarea>
                                            @endif

                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="contactNumber" class="text-dark"><b>Contact Number:</b><span
                                                    class="text-danger">*</span> </label>
                                            @if ($teacher && $teacher['contactNumber'])
                                                <input required type="number" name="contactNumber" id=""
                                                    class="form-control" value="{{ $teacher['contactNumber'] }}">
                                            @else
                                                <input required type="number" name="contactNumber" id=""
                                                    class="form-control">
                                            @endif
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="email" class="text-dark"><b>Email:</b><span
                                                    class="text-danger">*</span> </label>

                                            @if ($teacher && $teacher['emailAddress'])
                                                <input required type="email" name="email" id=""
                                                    class="form-control" value="{{ $teacher['emailAddress'] }}">
                                            @else
                                                <input required type="email" name="email" id=""
                                                    class="form-control">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="container-md">
                                        <div class="row">
                                            <div class="col-lg-4 ">
                                                <button class="btn btn-primary text-white" name="btnSaveProfile"
                                                    value="yes">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
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
    <script></script>

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

    @if (session()->pull('successUpdateTeacher'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Updated Teacher Details',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successUpdateTeacher') }}
    @endif

    @if (session()->pull('errorUpdateTeacher'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Update Teacher Details, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorUpdateTeacher') }}
    @endif

    @if (session()->pull('successUpdateTeacherName'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Updated Teacher Name',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successUpdateTeacherName') }}
    @endif

    @if (session()->pull('errorUpdateTeacherName'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Update Teacher Name, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorUpdateTeacherName') }}
    @endif

    <script>
        let toggleEdit = false;

        function editName() {
            let noUsername = document.getElementById('noUsername');
            let teacherName = document.getElementById('teacherName');
            let btnClear = document.getElementById('btnClear');
            if (!toggleEdit) {

                noUsername.setAttribute("style", "display:none;");
                teacherName.removeAttribute("style");
                toggleEdit = true;
                btnClear.removeAttribute("style");
            } else {
                let teacherNameForm = document.getElementById('teacherNameForm');
                teacherNameForm.removeAttribute("onsubmit");
                let btnEditTeacherName = document.getElementById('btnEditTeacherName');
                btnEditTeacherName.click();

            }
        }

        function clearMe() {
            let teacherNameForm = document.getElementById('teacherNameForm');
            teacherNameForm.setAttribute("onsubmit", "return false;");
            let noUsername = document.getElementById('noUsername');
            let teacherName = document.getElementById('teacherName');
            let btnClear = document.getElementById('btnClear');
            teacherName.setAttribute("style", "display:none;");
            btnClear.setAttribute("style", "display:none;");
            noUsername.removeAttribute("style");
            toggleEdit = false;
        }
    </script>
</body>

</html>
