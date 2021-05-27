<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">
    <meta name="author" content="SMK SEKAR BUMI NUSANTARA">
    <meta name="google-site-verification" content="Gv2FQA4egoA0Lfwj91ffvhFwk6H0-psNCHDkTO_e-Ek"/>
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('adminpage/img/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="{{asset('adminpage/css/light.css')}}" rel="stylesheet">
</head>


<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
   @yield('content')

    <script src="{{asset('adminpage/js/app.js')}}"></script>

</body>

</html>