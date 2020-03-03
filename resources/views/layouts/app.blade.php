<title>Atata57</title>

<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
<!-- <link type="text/css" rel="stylesheet" href="css/bootstrap-4.1/bootstrap.min.css" /> -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Slick -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Bootstrap -->
<link href="{{ asset('../vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{ asset('../vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<!-- NProgress -->
<link href="{{ asset('../vendors/nprogress/nprogress.css') }}" rel="stylesheet">
<!-- bootstrap-wysiwyg -->
<link href="{{ asset('../vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
<link href="{{ asset('../vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}"
    rel="stylesheet">
<link href="{{ asset('../vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
<!-- Custom styling plus plugins -->
<link href="{{ asset('../build/css/custom.css') }}" rel="stylesheet">
<link href="{{ asset('css/richtext.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/jquery.sweet-modal.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/custom.scss') }}" rel="stylesheet">
{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" defer> --}}
{{-- <script src="../vendors/jquery/dist/jquery.min.js"></script> --}}
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script>
    addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
</script>
<!--//tags -->
<link href="css/main.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<!--pop-up-box-->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!--//pop-up-box-->
<!-- price range -->
<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

<style>
    body {
        color: black;
    }
</style>

</head>

<body>
    <div id="vueapp">
        @yield('content')
    </div>
</body>

</html>