<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <title>Sébastien Pereda | Développeur web</title>

    <meta name="description" content="Sébastien Pereda, développeur web || Site personnel">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="/assets/vendor/flaticons/flaticon.css">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body id="samuel" class="boxed">

@include('layouts.header')

@yield('content')

@include('layouts.footer')

<!-- Back to Top -->
<div id="back-top"></div>
<!-- /Back to Top -->

<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3.0/dist/isotope.pkgd.min.js"></script>
<script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>

<script src="/assets/vendor/mfp/js/jquery.magnific-popup.min.js?v=1.1.0" type="text/javascript"></script>
<script src="/assets/vendor/progressbar/progressbar.min.js?v=1.0.1" type="text/javascript"></script>

<script src="/assets/vendor/anicounter/jquery.counterup.min.js?v=1.0" type="text/javascript"></script>
<script src="/assets/vendor/pjax/jquery.pjax.min.js?v=1.9.6" type="text/javascript"></script>
<script src="/assets/vendor/headlines/headlines.min.js?v=1.0" type="text/javascript"></script>

<!-- Custom scripts -->
<script src="/js/animation.js" type="text/javascript"></script>
<script src="/js/custom.js" type="text/javascript"></script>
</body>
</html>