<!DOCTYPE html>
<html lang="en">

<head>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="themepaa">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="software engineer, full stack developer, php developer, uzbek dasturchi, uzbek programmer, new york developer">
    <meta name="description" content="Fariza is a dedicated full stack developer who develop and maintain data-driven dynamic web applications">
    <meta name="author" content="Fariza Khamrakulova">
    <!-- title -->
    <title>A full stack developer/software engineer in New York</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- plugin CSS -->
    <link href="/nairo/static/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/nairo/static/plugin/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="/nairo/static/plugin/et-line/style.css" rel="stylesheet">
    <link href="/nairo/static/plugin/themify-icons/themify-icons.css" rel="stylesheet">
    <link href="/nairo/static/plugin/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
    <link href="/nairo/static/plugin/magnific/magnific-popup.css" rel="stylesheet">
    <link href="/nairo/static/plugin/scroll/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <!-- theme css -->
    <link href="/nairo/static/css/style.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
</head>
<!-- Body Start  -->

<body data-spy="scroll" data-target="#navbar-collapse-toggle" data-offset="70">
    @php
    if (isset($words['data']->results)){
    $results = $words['data']->results;
	$count = 0;
	}else{
		$results = [];
	}
    @endphp


<!-- page loading -->
<div id="loading">
    <div class="load-circle"><span class="one"></span></div>
</div>
<header class="header-left" id="navbar-collapse-toggle">
    <div class="scroll-bar">
        <div class="hl-top">
            <div class="hl-logo">
                <a href="#">
                    F
                </a>
            </div>
        </div>
        <ul class="nav nav-menu">
            <li>
                <a class="nav-link active" href="#home" data-toggle="tooltip" title="HOME">
                    <i class="fas fa-house-damage"></i>
                </a>
            </li>
            <li>
                <a class="nav-link" href="#about" data-toggle="tooltip" title="ABOUT">
                    <i class="far fa-address-card"></i>
                </a>
            </li>
            <li>
                <a class="nav-link" href="#resume" data-toggle="tooltip" title="RESUME">
                    <i class="far fa-file"></i>
                </a>
            </li>
            <li>
                <a class="nav-link" href="#work" data-toggle="tooltip" title="WORK">
                    <i class="fas fa-briefcase"></i>
                </a>
            </li>
            <li>
                <a class="nav-link" href="#blog" data-toggle="tooltip" title="BLOG">
                    <i class="fas fa-blog"></i>
                </a>
            </li>
            <li>
                <a class="nav-link" href="#contactus" data-toggle="tooltip" title="CONTACT">
                    <i class="fas fa-id-card-alt"></i>
                </a>
            </li>
            <li>
                <a id="a_change_color" class="nav-link" href="#" data-toggle="tooltip" title="Color">
                    <i class="fas fa-keyboard"></i>
                </a>
                <ul id="user_panel">
                    <li>
                        <div data-color="white" class="change_color"></div>
                        <div data-color="black" class="change_color"></div>
                    </li>

                </ul>
            </li>
            <li>
                <a class="nav-link" href="#youtube" data-toggle="tooltip" title="YOUTUBE">
                    <i class="fas fa-youtube"></i>
                </a>
            </li>
        </ul>
    </div>
</header>
<!-- End nav bar -->
<!-- Main Start -->
<main class="main-left">
    <section id="about" class="section dark-bg">
        <div class="container">
            <p class="lead">Fariza's Custom Dictionary</p>
            <div class="separated"></div>
            <form action="/projects/dictionary" method="get">
                <p>
                    <label for="keyword">Search: </label>
                    <input value="{{$keyword}}" type="text" id="keyword" name="keyword" placeholder="Your keyword">
                    <button class="btn btn-success">GO</button>
                </p>
            </form>
            <hr>

            <div class="dictionary_results">
                <h6>You are searching the word: <span>{{strtolower($keyword)}}</span></h6>
                <table class="table table-bordered">
                    @foreach($results as $result)
                        @php
                            $count++;
                            $synonyms = isset($result->synonyms)??'';
							$examples = isset($result->examples)??'';
                        @endphp
                    <tr>
                        <td>{{$keyword}}({{$count}}):</td>
                        <td>
                            <table class="table table-bordered">
                                <tr>
                                    <td>Definition:</td>
                                    <td>{{$result->definition}}:</td>
                                </tr>
                                <tr>
                                    <td>Synonyms:</td>
                                    <td>{{$synonyms}}</td>
                                </tr>

                                <tr>
                                    <td>Examples:</td>
                                    <td>{{$examples}}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    @endforeach

                </table>
            </div>

        </div>
    </section>
</main>
<footer class="footer white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 m-10px-tb">
                <div class="nav justify-content-center justify-content-md-start">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
            <div class="col-md-6 m-10px-tb text-center text-md-right">
                <p>© {{date('Y')}} Copyrights all rights reserved</p>
            </div>
        </div>
    </div>
</footer>
<script src="/nairo/static/js/jquery-3.2.1.min.js"></script>
<script src="/nairo/static/js/jquery-migrate-3.0.0.min.js"></script>
<script src="/nairo/static/plugin/appear/jquery.appear.js"></script>
<script src="/nairo/static/plugin/bootstrap/js/popper.min.js"></script>
<script src="/nairo/static/plugin/bootstrap/js/bootstrap.js"></script>
<script src="/nairo/static/js/custom.js"></script>
<script src="/nairo/static/js/mail_send.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
