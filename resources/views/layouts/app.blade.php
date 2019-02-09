<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Russ Etheridge :: @section('title') @show</title>
    @section('meta_keywords')
        <meta name="keywords" content="animation, animator, director, creator, designer"/>
    @show @section('meta_author')
        <meta name="author" content="Brian Etheridge"/>
    @show @section('meta_description')
        <meta name="description" content="Russ Etheridge is a free lance animator."/>
    @show
        <meta property="og:title" content="Russ Etheridge">
        <meta property="og:image" content="http://www.russelletheridge.com/public/img/thumbs/bathroomBoarder_hv.jpg">
        <meta property="og:description" content="Russ Etheridge is an Animator, Director and Designer. Please get in touch for more info and availability!">

		<link href="{{ asset('css/site.css') }}" rel="stylesheet">
        <script src="{{ asset('js/site.js?v3') }}"></script>

    @yield('styles')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>
<body>


<div class="wrapper">

    @if (!Auth::guest())
        @include('partials.nav')
    @endif

    @include('partials.header')

    <div class="container-fluid">

        @yield('content')

    </div>

    <div class="row footer-row-container">
        <div style="text-align: center;padding-top:80px;">&copy; {{ (new DateTime)->format('Y') }} Russ Etheridge</div>
    </div>

</div>

@yield('global-scripts')
@yield('page-scripts')

</body>
</html>