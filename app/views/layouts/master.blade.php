<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Poll | @yield('title')</title>
    {{ HTML::style('bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('plugins/jquery-ui/jquery-ui-1.10.2.custom.css') }}

	<!--[if lt IE 9]>
    {{ HTML::style('plugins/jquery-ui/jquery.ui.1.10.2.ie.css') }}
	<![endif]-->

	<!-- Theme -->
    {{ HTML::style('assets/css/main.css') }}
    {{ HTML::style('assets/css/plugins.css') }}
    {{ HTML::style('assets/css/responsive.css') }}
    {{ HTML::style('assets/css/icons.css') }}
    {{ HTML::style('assets/css/fontawesome/font-awesome.min.css') }}
    {{ HTML::style('assets/font-awesome-4.1.0/css/font-awesome.min.css') }}

	<!--[if IE 8]>
    {{ HTML::style('assets/css/ie8.css') }}
	<![endif]-->

	@yield('header')

</head>
<body>
   @include('layouts/partials/header')


        <div id="container">

                    @include('layouts/partials/sidebar')

                    <div id="content">
                        <div class="container">
                            <!-- Breadcrumbs line -->
                            <div class="crumbs">
                                <ul id="breadcrumbs" class="breadcrumb">
                                @section('breadcrumbs')

                                    <li>
                                        <i class="icon-home current"></i>
                                        {{--{{ link_to(route('dashboard.login'), 'Home') }}--}}
                                    </li>

                                @show
                                </ul>
                            </div>
                            <!-- /Breadcrumbs line -->

                            <!--=== Page Header ===-->
                            <div class="page-header">
                                <div class="page-title">
                                    <h3>@yield('title')</h3>
                                    {{--<span>Welcome, {{ Sentry::getUser()->first_name }}</span>--}}
                                </div>
                            </div>
                            <!-- /Page Header -->

                            <!--=== Page Content ===-->

                            @yield('content')

                            <!-- /Page Content -->
                        </div>
                        <!-- /.container -->

                    </div>

                 </div>


    @include('layouts/partials/footer')

    @yield('footer')
</body>
</html>