<!DOCTYPE HTML>
<!--
	Royale by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <title>Royale by TEMPLATED</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel-noscript.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-desktop.css" />
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
</head>
<body class="homepage">

<!-- Header -->
<div id="header">
    <div class="container">

        <!-- Logo -->
        <div id="logo">
            <h1><a href="#">Royale</a></h1>
        </div>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li class="active"><a href="/">Homepage</a></li>
                <li><a href="twocolumn1.html">Left Sidebar</a></li>
                <li><a href="twocolumn2.html">Right Sidebar</a></li>
                <li><a href="onecolumn.html">No Sidebar</a></li>
                <li><a href="/admin">Admin</a></li>
            </ul>
        </nav>

    </div>
</div>
<!-- Header -->

<!-- Banner -->
<div id="banner">
    <div class="container">


    </div>
</div>
<!-- /Banner -->

<!-- Main -->
<div id="main">

    {{--section--}}
    @include('sections.mainSection')

    <!-- Welcome -->
    <div id="welcome" class="container">
        <div class="divider"></div>
        <div class="row">
            <section>
                <header>
                    <h2>Gravida nibh quis urna</h2>
                </header>
                <p>This is <strong>Royale</strong>, a responsive HTML5 site template freebie by <a href="http://templated.co">TEMPLATED</a>. Released for free under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so use it for whatever (personal or commercial) &ndash; just give us credit! Check out more of our stuff at <a href="http://templated.co">our site</a> or follow us on <a href="http://twitter.com/templatedco">Twitter</a>.</p>
                <p>Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget, tempus et, tellus. Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Aenean lectus lorem, imperdiet at, ultrices eget, ornare et, wisi. Pellentesque adipiscing purus ac magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque pede. Donec pulvinar ullamcorper metus. In eu odio at lectus pulvinar mollis. Vestibulum sem magna, elementum ut, vestibulum eu, facilisis quis, arcu. Mauris a dolor. Nulla facilisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed blandit. Phasellus pellentesque, ante nec iaculis dapibus, eros justo auctor lectus, a lobortis lorem mauris quis nunc. Praesent pellentesque facilisis elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
            </section>
        </div>
    </div>
    <!-- /Welcome -->

</div>
<!-- /Main -->

<!-- Footer -->
<div id="footer">
    <div class="container">
        <section>
            <header>
                <h2>Pellentesque vulputaterisus semper</h2>
                <span class="byline">In posuere eleifend semper augue maecenas ligula congue rutrum</span>
            </header>
            <div class="row">
                <section class="4u">
                    <a href="#" class="image full"><img src="images/pics03.jpg" alt=""></a>
                </section>
                <section class="4u">
                    <a href="#" class="image full"><img src="images/pics04.jpg" alt=""></a>
                </section>
                <section class="4u">
                    <a href="#" class="image full"><img src="images/pics05.jpg" alt=""></a>
                </section>
            </div>
            <a href="#" class="button">Nulla luctus eleifend</a>
        </section>
    </div>
</div>
<!-- /Footer -->

<!-- Copyright -->
<div id="copyright">
    <div class="container">
        Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
    </div>
</div>
<script>
    $(document).ready(function(){
            $('select').change( function(e){
                e.preventDefault();
                location.search = 'cat_id=' + $(this).val() ;
            });
        });
</script>
</body>
</html>