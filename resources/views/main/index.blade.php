<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>Descalzo Dashboard</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="{{ asset('template/favicon.ico') }}" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('template/css/theme-default.css') }}" />
    <!-- EOF CSS INCLUDE -->
</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        <div class="page-sidebar">
            <!-- START X-NAVIGATION -->
            <ul class="x-navigation">
                <li class="xn-logo">
                    <a href="">Descalzo</a>
                    <a href="#" class="x-navigation-control"></a>
                </li>

                <li class="xn-title">Navigation</li>
                <li class="active">
                    <a href="{{ url('dashboard') }}"><span class="fa fa-desktop"></span> <span
                            class="xn-text">Dashboard</span></a>
                </li>
                {{-- <li class="xn-openable">
                    <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Personal</span></a>
                    <ul> --}}

                <li class="xn-openable">
                    <a href="#"><span class="fa fa-envelope"></span> Mailbox</a>
                    <ul>
                        <li><a href="{{ route('inbox') }}"><span class="fa fa-inbox"></span> Inbox</a></li>
                        <li><a href="{{ route('message') }}"><span class="fa fa-file-text"></span>
                                Message</a></li>
                        <li><a href="{{ route('compose') }}"><span class="fa fa-pencil"></span> Compose</a>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ route('Message') }}"><span class="fa fa-comments"></span> Messages</a></li>
                <li><a href="{{ route('calender') }}"><span class="fa fa-calendar"></span> Calendar</a></li>



                {{-- </ul>
                </li> --}}

                <li class="xn-title">All Users</li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Employees</span></a>
                    <ul>
                        <li><a href="{{ url('employee') }}"><span class="fa fa-user"></span>User</a></li>
                        <li><a href="{{ url('employee_categories') }}"><span class="fa fa-users"></span>Group</a></li>

                    </ul>
                </li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Tourist</span></a>
                    <ul>

                        <li><a href="{{ url('tourist') }}"><span class="fa fa-user"></span>User</a></li>
                        <li><a href="{{ url('review') }}"><span class="fa "></span>Review</a></li>
                        <li><a href="{{ url('packeges') }}"><span class="fa "></span>Packge</a></li>

                    </ul>
                </li>

                <li class="xn-openable">
                    <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Transactions</span></a>
                    <ul>
                        <li><a href="{{ route('transaction') }}"><span
                                    class="fa  fa-bar-chart-o">Transaction</span></a>
                        </li>

                    </ul>
                </li>

                <li class="xn-openable">
                    <a href="#"><span class="fa fa-credit-card"></span> <span class="xn-text">Payments</span></a>
                    <ul>
                        <li><a href="{{ route('payment') }}"><span class="fa fa-money xn-text">Salary</span></a>
                        </li>
                        <li><a href="{{ route('salary_historys') }}"><span
                                    class="fa fa-history xn-text">History</span></a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="{{ route('complain') }}"><span class="fa fa-flag-checkered"></span> <span
                            class="xn-text">Complains</span></a>

                </li>
                <li class="">
                    <a href="{{ url('report') }}"><span class="fa fa-flag"></span> <span
                            class="xn-text">Reports</span></a>

                </li>
                {{-- <li class="">
                    <a href="#"><span class="fa fa-flag-o"></span> <span class="xn-text">Reports</span></a>
                </li> --}}


            </ul>
            <!-- END X-NAVIGATION -->
        </div>
        <!-- END PAGE SIDEBAR -->

        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                <!-- TOGGLE NAVIGATION -->
                <li class="xn-icon-button">
                    <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                </li>
                <!-- END TOGGLE NAVIGATION -->
                <!-- SEARCH -->
                <li class="xn-search">
                    <form role="form">
                        <input type="text" name="search" placeholder="Search..." />
                    </form>
                </li>
                <!-- END SEARCH -->
                <!-- SIGN OUT -->
                <li class="xn-icon-button pull-right">
                    <a href="#" class="mb-control" data-box="#mb-signout"><span
                            class="fa fa-sign-out">{{ Auth::user()->username }}</span></a>
                </li>
                <!-- END SIGN OUT -->
                <!-- MESSAGES -->
                <li class="xn-icon-button pull-right">
                    <a href="#"><span class="fa fa-comments"></span></a>
                    <div class="informer informer-danger">4</div>
                    <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>
                            <div class="pull-right">
                                <span class="label label-danger">4 new</span>
                            </div>
                        </div>
                        <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-online"></div>
                                <img src="{{ asset('template/assets/images/users/user2.jpg') }}" class="pull-left"
                                    alt="John Doe" />
                                <span class="contacts-title">John Doe</span>
                                <p>Praesent placerat tellus id augue condimentum</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-away"></div>
                                <img src="{{ asset('template/assets/images/users/user.jpg') }}" class="pull-left"
                                    alt="Dmitry Ivaniuk" />
                                <span class="contacts-title">Dmitry Ivaniuk</span>
                                <p>Donec risus sapien, sagittis et magna quis</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-away"></div>
                                <img src="{{ asset('template/assets/images/users/user3.jpg') }}" class="pull-left"
                                    alt="Nadia Ali" />
                                <span class="contacts-title">Nadia Ali</span>
                                <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-offline"></div>
                                <img src="{{ asset('template/assets/images/users/user6.jpg') }}" class="pull-left"
                                    alt="Darth Vader" />
                                <span class="contacts-title">Darth Vader</span>
                                <p>I want my money back!</p>
                            </a>
                        </div>
                        <div class="panel-footer text-center">
                            <a href="pages-messages.html">Show all messages</a>
                        </div>
                    </div>
                </li>
                <!-- END MESSAGES -->
                <!-- TASKS -->
                <li class="xn-icon-button pull-right">

                    <div class="informer informer-info"> </div>

                </li>
                <!-- END TASKS -->
            </ul>
            <!-- END X-NAVIGATION VERTICAL -->

            <!-- START BREADCRUMB -->

            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            @if (session('message'))
                <div class="alert alert-primary" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            @yield('content')

            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->

    <!-- MESSAGE BOX-->
    <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
        <div class="mb-container">
            <div class="mb-middle">
                <div class="mb-title">{{ Auth::user()->name }}<span class="fa fa-sign-out"></span> Log
                    <strong>Out</strong> ?
                </div>
                <div class="mb-content">
                    <p>Are you sure you want to log out?</p>
                    <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                </div>
                <div class="mb-footer">
                    <div class="pull-right">
                        <a href="{{ route('logout') }}" class="btn btn-success btn-lg">Yes</a>
                        <button class="btn btn-default btn-lg mb-control-close">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MESSAGE BOX-->

    <!-- START PRELOADS -->
    <audio id="audio-alert" src="{{ asset('template/audio/alert.mp3') }}" preload="auto"></audio>
    <audio id="audio-fail" src="{{ asset('template/audio/fail.mp3') }}" preload="auto"></audio>
    <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
    <!-- START PLUGINS -->
    <script type="text/javascript" src="{{ asset('template/js/plugins/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->
    <script type='text/javascript' src="{{ asset('template/js/plugins/icheck/icheck.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('template/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/scrolltotop/scrolltopcontrol.js') }}"></script>

    <script type="text/javascript" src="{{ asset('template/js/plugins/morris/raphael-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/morris/morris.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/rickshaw/d3.v3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/rickshaw/rickshaw.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('template/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}">
    </script>
    <script type='text/javascript'
        src="{{ asset('template/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script type='text/javascript' src="{{ asset('template/js/plugins/bootstrap/bootstrap-datepicker.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/owl/owl.carousel.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('template/js/plugins/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/daterangepicker/daterangepicker.js') }}">
        < script type = "text/javascript"
        src = "js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js" >
    </script>

    <script type="text/javascript" src="{{ asset('template/js/plugins/summernote/summernote.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/tagsinput/jquery.tagsinput.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/bootstrap/bootstrap-select.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/bootstrap/bootstrap-file-input.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/fullcalendar/fullcalendar.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/datatables/jquery.dataTables.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/tableexport/tableExport.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/tableexport/jquery.base64.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/tableexport/html2canvas.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/tableexport/jspdf/libs/sprintf.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/tableexport/jspdf/jspdf.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/plugins/tableexport/jspdf/libs/base64.js') }}">
    </script>
    <!-- END THIS PAGE PLUGINS-->

    <!-- START TEMPLATE -->
    <script type="text/javascript" src="{{ asset('template/js/settings.js') }}"></script>

    <script type="text/javascript" src="{{ asset('template/js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/actions.js') }}"></script>

    <script type="text/javascript" src="{{ asset('template/js/demo_dashboard.js') }}"></script>
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
</body>

</html>
