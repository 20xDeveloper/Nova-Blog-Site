<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive product landing page.">
    <title>Nova</title>

    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">


    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">


    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">


    <link rel="stylesheet" href="resources/assets/css/layouts/marketing.css">
    <link rel="stylesheet" href="resources/assets/css/styles.css">
    <link rel="stylesheet" href="@yield("css")">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="resources/assets/js/home.js"></script>

</head>
<body onload="myFunction()">
<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="home">Nova</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item @yield('homeNavSelected')"><a href="index" class="pure-menu-link navBar">Home</a></li>
            <li class="pure-menu-item @yield('articleNavSelected')"><a href="article" class="pure-menu-link navBar">Articles</a></li>
            <li class="pure-menu-item @yield('contactNavSelected')"><a href="contact" class="pure-menu-link navBar">Contact</a></li>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        @yield("splashHeader")
    </div>
</div>

<div class="content-wrapper">

       @yield("content")

    <div class="myFooter l-box is-center">
        Designed By: Lami Kabir<br>
        Contact Information: AsaadulLamiKabir@gmail.com <br>
        Social Media <Br>
        <a href="#"><i class="fa fa-twitter-square fa-5x" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-youtube-square fa-5x" aria-hidden="true"></i></a>
    </div>
</div>


</body>
</html>