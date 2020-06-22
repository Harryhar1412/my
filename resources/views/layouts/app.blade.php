<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harryhar Bidari</title>
    <link rel="icon" type="image/png" href="img/e1.png">
    <meta name="description" content="Circular Navigation Styles - Building a Circular Navigation with CSS Transforms | Codrops " />
    <meta name="keywords" content="css transforms, circular navigation, round navigation, circular menu, tutorial" />
    <meta name="author" content="Sara Soueidan for Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component2.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <script src="js/modernizr-2.6.2.min.js"></script>

</head>
<body>
<div class="container">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-double-up"></i></button>
    <div class="row">
        <div class="col-md-12">
            <div nav class="navbar-navbar-expand-md navbar-light bg-info">
                <center>&#128231;harryhar1412@gmail.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &#127970;Kalimati, Kathmandu, Nepal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#128241;0977-9843220252</center>
            </div>
            <div class="component">
                <div class="jumbotron" style="">
                    <div class="head">
                        <h1>Harryhar Bidari</h1>
                    </div>
                    <div class="head1">
                        <h1>हरीहर&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; बिडारी</h1>
                    </div>
                </div>
                <button class="cn-button" id="cn-button">About</button>
                <div class="cn-wrapper" id="cn-wrapper">
                    <ul>
                        <li><a href="{{url('index')}}"><span>About</span></a></li>
                        <li><a href="{{url('tutorials')}}"><span>Tutorials</span></a></li>
                        <li><a href="{{url('articles')}}"><span>Articles</span></a></li>
                        <li><a href="{{url('today')}}"><span>Today's Hot</span></a></li>
                        <li><a href="{{url('gallery')}}"><span>Gallery</span></a></li>
                        <li><a href="{{url('contact')}}"><span>Contact</span></a></li>
                        <li><a href="{{url('follow')}}"><span>Follow</span></a></li>						
                    </ul>
                </div>
            </div>
        </div>
    @yield('content')
        <div class="col-md-12 bg-danger">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="text-white"><center>Copy Right &copy; 2019 Harryhar</center></div>
        </div>

    </div>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <script src="js/polyfills.js"></script>
    <script src="js/demo2.js"></script>
    <script src="js/jssor.slider-27.1.0.min.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</div>
</body>
</html>