<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.adminpanel.header')

</head>

<body class="rtl">

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        <!-- Page Header Start-->

        @include('layouts.adminpanel.navbar')

        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->

            @include('layouts.adminpanel.sidebar')

            <!-- Page Sidebar Ends-->

            <!-- Right sidebar Start-->


            <!-- Right sidebar Ends-->

            <div class="page-body">
                <!-- Container-fluid starts-->

                @include('layouts.adminpanel.head-page')

                <!-- Container-fluid Ends-->

                <!-- Container-fluid starts-->


                @yield('content-adminpanel')





                <!-- Container-fluid Ends-->
            </div>

            @include('layouts.adminpanel.footer')

        </div>
    </div>

    @include('layouts.adminpanel.scripts')

</body>

</html>
