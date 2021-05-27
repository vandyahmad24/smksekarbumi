<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Admin Page SMK Sekar Bumi Nusantara">
    <meta name="author" content="SMK SEKAR BUMI NUSANTARA">
    <meta name="google-site-verification" content="Gv2FQA4egoA0Lfwj91ffvhFwk6H0-psNCHDkTO_e-Ek"/>
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('adminpage/img/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="{{asset('adminpage/css/light.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
</head>


<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
    <div class="wrapper">
        @include('include.admin.sidebar')
        <div class="main">
            @include('include.admin.navbar')

            <main class="content">
               @yield('content')
            </main>

           @include('include.admin.footer')
        </div>
    </div>

    <script src="{{asset('adminpage/js/app.js')}}"></script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script>
       document.addEventListener("DOMContentLoaded", function() {
			$(".datatables").DataTable({
				pageLength: 6,
				lengthChange: false,
				bFilter: false,
				autoWidth: false
			});
		});
    </script>
   

</body>

</html>