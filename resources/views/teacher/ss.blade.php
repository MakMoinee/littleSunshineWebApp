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
            height: 550px !important;
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
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
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
            <div class="row ">
                <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-12 mx-auto">
                                <center>
                                    <img src="/sched.gif" alt="" srcset="">
                                </center>
                            </div>
                        </div>
                        <div class="row g-2 mt-3" style="margin-bottom: 100px;">
                            <div class="col-md-6 mx-auto ">
                                <div class="card">
                                    <div class="container mt-3 mb-3" style=" height: 550px !important;">
                                        <div id="calendar"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mx-auto mt-5">
                                <div class="card">
                                    <div class="card-body " style="background-color: #00394f !important;">
                                        <h2 class="text-white">
                                            <center>Set Schedule</center>
                                        </h2>
                                        <form action="/teacher_ss" method="post" autocomplete="off">
                                            @csrf
                                            <div class="form-group">
                                                <select required class="form-control input-field" name="studentID">
                                                    <option value="">Student Name...</option>
                                                    @foreach ($students as $item)
                                                        <option value="{{ $item['id'] }}"> {{ $item['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <input required type="text" class="form-control input-field mt-2"
                                                    name="sessionNumber" placeholder="Session #">

                                                <div class="form-group mt-2 text-white mt-2">
                                                    <label class="d-flex">Class Type</label>
                                                    <div class="form-check form-check-inline d-flex ml-2">
                                                        <input class="form-check-input" type="radio" name="classType"
                                                            value="online" id="normal" required>
                                                        <label class="form-check-label" for="normal">Online
                                                            Class</label>
                                                    </div>
                                                    <div class="form-check form-check-inline d-flex ml-2">
                                                        <input class="form-check-input" type="radio" name="classType"
                                                            value="f2f" id="classType">
                                                        <label class="form-check-label" for="special_needs">Face to Face
                                                            Class</label>
                                                    </div>
                                                </div>

                                                <input required type="date" class="form-control input-field mt-2"
                                                    name="date">
                                                <input required type="time" class="form-control input-field mt-2"
                                                    name="time">

                                                <input type="text" class="form-control input-field mt-2"
                                                    name="meetingCode" placeholder="Meeting Code (If Online Class)">

                                                <button name="btnSetSchedule" value="yes" type="submit"
                                                    class="btn btn-primary set-button mt-2">SET</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="modal fade " id="showDetailsModal" tabindex="-1" role="dialog"
        aria-labelledby="showDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 style="margin: 0; color: #333;">Your Schedule</h3>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="table-responsive bg-white">
                            <table class="table border mb-0">
                                <thead class="table-light fw-semibold">
                                    <tr class="align-middle">
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mSched as $item)
                                        <tr class="align-middle" id="t{{ $item['id'] }}" style="display: none">
                                            <td class="text-dark">Session {{ $item['no'] }} Schedule -
                                                {{ (new DateTime($item['scheduleTime']))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y-m-d h:i A') }}
                                            </td>
                                            <td class="text-dark">
                                                {{ $item['classType'] }}
                                            </td>
                                            <td>
                                                @if ($item['meeting'] != '')
                                                    <a href="{{ $item['meeting'] }}"
                                                        class="text-decoration-none">Meeting Link Here</a>
                                                @else
                                                    {{ $item['meeting'] }}
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        style="color:white !important;">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <button class="btn" id="showModal" style="display: none" data-target="#showDetailsModal"
        data-toggle="modal"></button>
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


    @if (session()->pull('successSetSched'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Set Schedule',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successSetSched') }}
    @endif

    @if (session()->pull('errorSetSched'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Set Schedule, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorSetSched') }}
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var mData = @json($events);

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth', // Show month view by default
                selectable: true, // Allow date selection
                editable: true, // Enable drag & drop
                events: mData,
                dateClick: function(info) {
                    window.location = `/teacher_home?sched=${info.dateStr}`;
                },
                eventClick: function(info) {
                    let showModal = document.getElementById('showModal');
                    showModal.click();

                    let id = info.event.id;
                    let t = document.getElementById(`t${id}`);
                    t.removeAttribute("style");
                }
            });

            calendar.render();
        });
    </script>
</body>

</html>
