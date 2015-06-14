<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Call For Paper')</title>

    <!-- <link rel="stylesheet" type="text/css" media="screen" href="/components/bootstrap/dist/css/bootstrap.min.css"/> -->
    
    @yield('stylesheets')

    <!-- open sans font -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' /> -->

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        @yield('body')

        <script src="/components/jquery/dist/jquery.min.js"></script>
        <script src="/components/bootstrap/dist/js/bootstrap.min.js"></script>

        @yield('scripts')

       <!-- <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-60971205-1', 'auto');
          ga('send', 'pageview');
        </script> -->

  </body>
  </html>