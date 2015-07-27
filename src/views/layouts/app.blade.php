<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    @include('AdminTheme::layouts.head')

</head>


<body class="nav-md">

    <div class="container body">

        <div class="main_container">

            @include('AdminTheme::layouts.left_col')
            @include('AdminTheme::layouts.top_nav')

            <!-- page content -->
            <div class="right_col" role="main">
                @yield('content')
                @include('AdminTheme::layouts.footer_content')
            </div>
            <!-- /page content -->

        </div><!--end .main_container-->

    </div><!--end .container-->

    @include('AdminTheme::layouts.footer')
</body>

</html>
