@extends('layouts.app')

@section('content')
    <!-- Home Section -->
    <section id="home" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
        <div class="intro-video">
            <a id="video-volume" onclick="$('#bgndVideo').toggleVolume()"><i class="fa fa-volume-down"></i></a>
            <!-- Video Background - Here you need to replace the videoURL with your youtube video URL -->
            <a id="bgndVideo" class="player" data-property="{videoURL:'http://www.youtube.com/watch?v=Ufnf0ecwzVI',containment:'body',autoPlay:true, mute:true, startAt:115, opacity:1}">youtube</a>
            <!--/Video Background -->

            <div class="text-slider">
                <div class="intro-item">
                    <div class="intro-flexslider">
                        <ul class="slides">

                            <!-- Slide Item -->
                            <li>
                                <div class="section-title text-center">
                                    <div class="hidden-xs">
                                        <span class="line big"></span>
                                        <span>NOW</span>
                                        <span class="line big"></span>
                                    </div>
                                    <h1>Welcome to<i>Alpine studio</i></h1>
                                    <div class="hidden-xs">
                                        <span class="line"></span>
                                        <span>ABOUT THE POSSIBILITIES</span>
                                        <span class="line"></span>
                                    </div>
                                    <p class="lead">
                                        A bootstrap Responsive multi-purpose Theme for the Creatives, Web agency and more!
                                    </p>
                                </div>
                            </li>
                            <!-- Slide Item -->

                            <!-- Slide Item -->
                            <li>
                                <div class="section-title text-center">
                                    <div class="hidden-xs">
                                        <span class="line big"></span>
                                        <span>NOW</span>
                                        <span class="line big"></span>
                                    </div>
                                    <h1>Awesome<i>Creative studio</i></h1>
                                    <div class="hidden-xs">
                                        <span class="line"></span>
                                        <span>ABOUT THE POSSIBILITIES</span>
                                        <span class="line"></span>
                                    </div>
                                    <p class="lead">
                                        A bootstrap Responsive multi-purpose Theme for the Creatives, Web agency and more!
                                    </p>
                                </div>
                            </li>
                            <!-- Slide Item -->

                            <!-- Slide Item -->
                            <li>
                                <div class="section-title text-center">
                                    <div class="hidden-xs">
                                        <span class="line big"></span>
                                        <span>NOW</span>
                                        <span class="line big"></span>
                                    </div>
                                    <h1>Art & cretivity<i>our strength</i></h1>
                                    <div class="hidden-xs">
                                        <span class="line"></span>
                                        <span>ABOUT THE POSSIBILITIES</span>
                                        <span class="line"></span>
                                    </div>
                                    <p class="lead">
                                        A bootstrap Responsive multi-purpose Theme for the Creatives, Web agency and more!
                                    </p>
                                </div>
                            </li>
                            <!-- Slide Item -->

                        </ul>
                    </div>
                    <div class="mybutton ultra">
                        <a class="start-button" href="#about"> <span data-hover="Discover!">Are you ready?</span> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Home Section -->
    @include('layouts.navbar.nav')

    <!-- About Section -->
    <section id="about" class="section-content">
        <div class="container">

            <!-- Section title -->
            <div class="section-title text-center">
                <div>
                    <span class="line big"></span>
                    <span>Pure creativity</span>
                    <span class="line big"></span>
                </div>
                <h1 class="item_right">About Us</h1>
                <div>
                    <span class="line"></span>
                    <span>Qui sommes nous?</span>
                    <span class="line"></span>
                </div>

            </div>
            <!-- Section title -->

            <div class="row">
                <div class="col-md-6">
                    <div class="element-line">
                        <div class="item_left">
                            <p class="lead">

                                @if($about)
                                    {!! $about->content !!}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
                <div class="fb-video" data-href="https://www.facebook.com/HayMacProduction/videos/2228183240784442/" data-width="500" data-show-text="false">
                    <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="https://www.facebook.com/HayMacProduction/videos/2228183240784442/">
                            <a href="https://www.facebook.com/HayMacProduction/videos/2228183240784442/">How to Share With Just Friends</a>
                            <p>How to share with just friends.</p>
                            Posted by <a href="https://www.facebook.com/facebook/">Facebook</a> on Friday, December 5, 2014
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- item media -->
                <div class="col-md-4">
                    <div class="element-line">
                        <div class="item_left">
                            <div class="media">
                                <a class="pull-left rotate" href="#"> <img class="media-object img-circle" src="images/p1.jpg" height="100" width="100" alt=""> </a>
                                <div class="media-body">
                                    <h3 class="media-heading">Planning</h3>
                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item media -->
                <!-- item media -->
                <div class="col-md-4">
                    <div class="element-line">
                        <div class="item_left">
                            <div class="media">
                                <a class="pull-left rotate" href="#"> <img class="media-object img-circle" src="images/p2.jpg" height="100" width="100" alt=""> </a>
                                <div class="media-body">
                                    <h3 class="media-heading">Planning</h3>
                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item media -->
                <!-- item media -->
                <div class="col-md-4">
                    <div class="element-line">
                        <div class="item_right">
                            <div class="media">
                                <a class="pull-left rotate" href="#"> <img class="media-object img-circle" src="images/p3.jpg" height="100" width="100"  alt=""> </a>
                                <div class="media-body">
                                    <h3 class="media-heading">Consultancy</h3>
                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item media -->
            </div>
        </div>
    </section>
    <!-- About Section -->


    <!-- Parallax Container -->
    <div id="one-parallax" class="parallax" style="background-image: url('public/images/separator1.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
        <div class="parallax-overlay parallax-background-color">
            <div class="section-content">
                <div class="container text-center">

                    <!-- Parallax title -->
                    <h1>Creativity, innovation, but also knowledge and development</h1>
                    <p class="lead">
                        Our main Skills
                    </p>
                    <!-- Parallax title -->

                    <!-- Parallax content -->
                    <div class="parallax-content">
                        <div class="cart">
                            <div class="cart_container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="element-line">
                                            <div class="circular-content">
                                                <div class="circular-item hidden">
                                                    <div class="circular-pie" data-percent="100" data-color="#ffffff">
                                                        <span>100</span>
                                                    </div>
                                                    <div class="circ_counter_desc">
                                                        <p class="lead">
                                                            HTML5 and CSS3
                                                        </p>
                                                        <p>
                                                            Contrary to popular belief, Lorem Ipsum
                                                            <br>
                                                            is not simply random text.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="element-line">
                                            <div class="circular-content">
                                                <div class="circular-item hidden">
                                                    <div class="circular-pie" data-percent="89" data-color="#ffffff">
                                                        <span>89</span>
                                                    </div>
                                                    <div class="circ_counter_desc">
                                                        <p class="lead">
                                                            JQUERY
                                                        </p>
                                                        <p>
                                                            Contrary to popular belief, Lorem Ipsum
                                                            <br>
                                                            is not simply random text.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="element-line">
                                            <div class="circular-content">
                                                <div class="circular-item hidden">
                                                    <div class="circular-pie" data-percent="77" data-color="#ffffff">
                                                        <span>77</span>
                                                    </div>
                                                    <div class="circ_counter_desc">
                                                        <p class="lead">
                                                            MYSQL
                                                        </p>
                                                        <p>
                                                            Contrary to popular belief, Lorem Ipsum
                                                            <br>
                                                            is not simply random text.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Parallax content -->

                </div>
            </div>
        </div>
    </div>
    <!-- Parallax Container -->

    <!-- Service Section -->
    <section id="service" class="section-content">
        <div class="container">

            <!-- Section title -->
            <div class="section-title text-center">
                <div>
                    <span class="line big"></span>
                    <span>Not only creativity</span>
                    <span class="line big"></span>
                </div>
                <h1 class="item_left">Our services</h1>
                <div>
                    <span class="line"></span>
                    <span>Ideas that lead to new actions</span>
                    <span class="line"></span>
                </div>
            </div>
            <!-- Section title -->

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="element-line">

                        <div class="flexslider">
                            <ul class="slides">

                            @foreach($services as $service)
                                <!-- Item Slide -->
                                    <li>
                                        <div class="slide-item">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <img class="img-responsive img-center img-rounded" src="{{route('get.files',['folder'=>'Service','filename'=>$service->file])}}" alt=""/>
                                                </div>
                                                <div class="col-md-5">
                                                    <h2>{{$service->title}}</h2>
                                                    <p class="lead">
                                                        {!! $service->description !!}
                                                    </p>
                                                    <br />
                                                    <div class="mybutton medium">
                                                        <a href="http://themeforest.net/item/alpine-responsive-one-page-parallax-template/6480453?ref=creativeispiration"> <span data-hover="Buy this theme">Buy this theme</span> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                            @endforeach
                            <!-- Item Slide -->


                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-items">
                <div class="row text-center">

                    <!-- Service item -->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="element-line">
                            <div class="item_left">
                                <a href="#"> <i class="fa fa-code-fork fa-5x"></i> <h3>Web application</h3> </a>
                                <p>
                                    Contrary to popular belief, Lorem Ipsum is not simply random text.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Service item -->

                    <!-- Service item -->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="element-line">
                            <div class="item_top">
                                <a href="#"> <i class="fa fa-flag fa-5x"></i> <h3>Brand & Identity</h3> </a>
                                <p>
                                    Contrary to popular belief, Lorem Ipsum is not simply random text.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Service item -->

                    <!-- Service item -->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="element-line">
                            <div class="item_bottom">
                                <a href="#"> <i class="fa fa-bullhorn fa-5x"></i> <h3>Consultancy</h3> </a>
                                <p>
                                    Contrary to popular belief, Lorem Ipsum is not simply random text.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Service item -->

                    <!-- Service item -->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="element-line">
                            <div class="item_right">
                                <a href="#"> <i class="fa fa-youtube-play fa-5x"></i> <h3>Video Production</h3> </a>
                                <p>
                                    Contrary to popular belief, Lorem Ipsum is not simply random text.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Service item -->

                </div>
            </div>
        </div>
    </section>
    <!-- Service Section -->

    <!-- Parallax Container -->
    <div id="two-parallax" class="parallax" style="background-image: url('public/images/separator2.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
        <div class="parallax-overlay">
            <div class="section-content">
                <div class="container text-center">

                    <!-- Parallax title -->
                    <h1>Keep in touch. We take care of every aspect of our image. Is the most important thing.</h1>
                    <p class="lead">
                        Connect with us
                    </p>
                    <!-- Parallax title -->

                    <!-- Parallax content -->
                    <div class="parallax-content social-link">
                        <div class="row">

                            <!-- Link item -->
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="element-line">
                                    <div class="item_top">
                                        <div class="hi-icon-effect-1">
                                            <a href="#" class=""> <i class="hi-icon fa fa-facebook fa-4x"></i> </a>
                                        </div>
                                        <span>Facebook</span>
                                        <p class="lead hidden-xs">
                                            Let's be friends
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Link item -->

                            <!-- Link item -->
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="element-line">
                                    <div class="item_bottom">
                                        <div class="hi-icon-effect-1">
                                            <a href="#" class=""> <i class="hi-icon fa fa-twitter fa-4x"></i> </a>
                                        </div>
                                        <span>Twitter</span>
                                        <p class="lead hidden-xs">
                                            Follow our news
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Link item -->

                            <!-- Link item -->
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="element-line">
                                    <div class="item_top">
                                        <div class="hi-icon-effect-1">
                                            <a href="#" class=""> <i class="hi-icon fa fa-google-plus fa-4x"></i> </a>
                                        </div>
                                        <span>Google Plus</span>
                                        <p class="lead hidden-xs">
                                            Add to your circles
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Link item -->

                            <!-- Link item -->
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="element-line">
                                    <div class="item_bottom">
                                        <div class="hi-icon-effect-1">
                                            <a href="#" class=""> <i class="hi-icon fa fa-youtube fa-4x"></i> </a>
                                        </div>
                                        <span>You Tube</span>
                                        <p class="lead hidden-xs">
                                            Discover our Channel
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Link item -->

                        </div>
                    </div>
                    <!-- Parallax content -->

                </div>
            </div>
        </div>
    </div>
    <!-- Parallax Container -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="section-content">
        <div class="container">

            <!-- Section title -->
            <div class="section-title text-center">
                <div>
                    <span class="line big"></span>
                    <span>The way to progress</span>
                    <span class="line big"></span>
                </div>
                <h1 class="item_right">What We Do?</h1>
                <div>
                    <span class="line"></span>
                    <span>and we're proud</span>
                    <span class="line"></span>
                </div>
                <p class="lead">
                    We have put together the best of our experience, the best of our talents and this is the result. Every time we make a plan we put in discussion to arrive at an excellent design.
                </p>
            </div>
            <!-- Section title -->
        </div>

        <div class="portfolio-top"></div>

        <!-- Portfolio filters -->
        <div class="element-line">
            <div id="filters" class="mybutton small">
                <a href="#" data-filter="*"><span data-hover="Show all">Show all</span></a>

                @if($projects)
                    @foreach($categories as $category)
                        <a href="#" data-filter=".{{$category->slug}}"><span data-hover="{{$category->name}}">{{$category->name}}</span></a>
                    @endforeach
                @endif
            </div>
        </div>
        <!-- Portfolio filters -->

        <div id="portfolio-wrap">

            <!-- project item -->

            @foreach($projects as $project)

                <div class="portfolio-item {{$project->category ? $project->category->slug: '.'}}">
                    <div class="portfolio">

                        <a href="#!portfolio/{{$project->slug}}" class="zoom">

                            <img src="{{route('get.files.projects',['ste'=>$project->society->ice,'folder'=>$project->folderName,'filename'=>$project->galleries[0]->files])}}" alt="">

                            <div class="hover-items">

                                <span> 

                                    @switch($project->category->slug)
                                        @case('vedio')
                                        <i class="fa fa-youtube-play fa-4x"></i>
                                        @break

                                        @case('photo')
                                        <i class="fa fa-plus fa-4x"></i>
                                        @break

                                        @default
                                        <i class="fa fa-bars fa-4x"></i>
                                    @endswitch
                                  
                                    <em class="lead">{{$project->nom}}</em>
                                    <em>{{$project->category ? $project->category->name: ''}}</em>

                                </span>

                            </div>

                        </a>

                    </div>
                </div>

        @endforeach
        <!-- project item -->

        </div>

        <!-- Ajax Portfolio content -->
        <div id="ajax-section">
            <div class="container clearfix">
                <div id="project-navigation" class="text-center">
                    <ul>
                        <li id="prevProject">
                            <a href="#"><i class="fa fa-chevron-circle-left fa-2x"></i></a>
                        </li>
                        <li id="closeProject">
                            <a href="#loader"><i class="fa fa-times-circle fa-2x"></i></a>
                        </li>
                        <li id="nextProject">
                            <a href="#"><i class="fa fa-chevron-circle-right fa-2x"></i></a>
                        </li>
                    </ul>
                </div>

                <!-- Ajax loader -->
                <div id="loader"></div>
                <!-- Ajax loader -->

                <div id="ajax-content-outer">
                    <div id="ajax-content-inner"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <!-- Ajax content -->

    </section>
    <!-- Portfolio Section -->

    <!-- Parallax Container -->
    <div id="three-parallax" class="parallax" style="background-image: url('public/images/separator3.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
        <div class="parallax-overlay">
            <div class="section-content">
                <div class="container text-center">

                    <!-- Parallax title -->
                    <div class="item_left">
                        <h1>Creativity is allowing yourself to make mistakes Art is knowing which ones to keep</h1>
                        <p class="lead no-margin">
                            Richard Johnson
                        </p>
                    </div>
                    <!-- Parallax title -->

                    <!-- Parallax content -->
                    <div class="parallax-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="element-line">
                                    <div class="item_right">
                                        <div class="mybutton ultra">
                                            <a href="http://themeforest.net/item/alpine-responsive-one-page-parallax-template/6480453?ref=creativeispiration"> <span data-hover="Buy this theme">Buy this theme</span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Parallax content -->

                </div>
            </div>
        </div>
    </div>
    <!-- Parallax Container -->

    <!-- Team Section -->
    <section id="team" class="section-content">
        <div class="container">

            <!-- Section title -->
            <div class="section-title text-center">
                <div>
                    <span class="line big"></span>
                    <span>Who are we anyway?</span>
                    <span class="line big"></span>
                </div>
                <h1 class="item_left">Our Team</h1>
                <div>
                    <span class="line"></span>
                    <span>Fast & Curious</span>
                    <span class="line"></span>
                </div>
                <p class="lead">
                    We could say to be young and dynamic, that you may be surprised with special effects, we prefer to achieve the result and let the numbers speak for us.
                </p>
            </div>
            <!-- Section title -->

            <div class="row">

                <!-- Team item -->
                <div class="col-md-3 col-sm-3 col-md-3 col-xs-12">
                    <div class="element-line">
                        <div class="item_top">
                            <div class="img-rounded team-element zoom">
                                <div class="team-inner">
                                    <div class="team-detail">
                                        <div class="team-content">
                                            <h3><strong>Marc Crow</strong></h3>
                                            <p>
                                                CEO Founder
                                            </p>
                                            <ul>
                                                <li>
                                                    <a href=""><i class="fa fa-facebook fa-2x"></i></a>
                                                </li>
                                                <li>
                                                    <a href=""><i class="fa fa-twitter fa-2x"></i></a>
                                                </li>
                                                <li>
                                                    <a href=""><i class="fa fa-google-plus fa-2x"></i></a>
                                                </li>
                                                <li>
                                                    <a href=""><i class="fa fa-youtube fa-2x"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <img src="public/images/team1.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Team item -->

                <!-- Team item -->
                <div class="col-md-3 col-sm-3 col-md-3 col-xs-12">
                    <div class="element-line">
                        <div class="item_bottom">
                            <div class="img-rounded team-element zoom">
                                <div class="team-inner">
                                    <div class="team-detail">
                                        <div class="team-content">
                                            <h3><strong>Scott Sanchezh</strong></h3>
                                            <p>
                                                Public Relation
                                            </p>
                                            <ul>
                                                <li>
                                                    <a href=""><i class="fa fa-facebook fa-2x"></i></a>
                                                </li>
                                                <li>
                                                    <a href=""><i class="fa fa-twitter fa-2x"></i></a>
                                                </li>
                                                <li>
                                                    <a href=""><i class="fa fa-google-plus fa-2x"></i></a>
                                                </li>
                                                <li>
                                                    <a href=""><i class="fa fa-youtube fa-2x"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <img src="public/images/team4.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Team item -->

                <!-- Team item -->
                <div class="col-md-3 col-sm-3 col-md-3 col-xs-12">
                    <div class="element-line">
                        <div class="item_top">
                            <div class="img-rounded team-element zoom">
                                <div class="team-inner">
                                    <div class="team-detail">
                                        <div class="team-content">
                                            <h3><strong>Henry kolms</strong></h3>
                                            <p>
                                                Creative Director
                                            </p>
                                            <ul>
                                                <li>
                                                    <a href=""><i class="fa fa-facebook fa-2x"></i></a>
                                                </li>
                                                <li>
                                                    <a href=""><i class="fa fa-twitter fa-2x"></i></a>
                                                </li>
                                                <li>
                                                    <a href=""><i class="fa fa-google-plus fa-2x"></i></a>
                                                </li>
                                                <li>
                                                    <a href=""><i class="fa fa-youtube fa-2x"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <img src="public/images/team2.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Team item -->

                <!-- Team item -->
                <div class="col-md-3 col-sm-3 col-md-3 col-xs-12">
                    <div class="element-line">
                        <div class="item_bottom">
                            <div class="img-rounded team-element zoom">
                                <div class="team-inner">
                                    <div class="team-detail">
                                        <div class="team-content">
                                            <h3><strong>Michelle White</strong></h3>
                                            <p>
                                                Web Developer
                                            </p>
                                            <ul>
                                                <li>
                                                    <a href=""><i class="fa fa-facebook fa-2x"></i></a>
                                                </li>
                                                <li>
                                                    <a href=""><i class="fa fa-twitter fa-2x"></i></a>
                                                </li>
                                                <li>
                                                    <a href=""><i class="fa fa-google-plus fa-2x"></i></a>
                                                </li>
                                                <li>
                                                    <a href=""><i class="fa fa-youtube fa-2x"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <img src="public/images/team3.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Team item -->

            </div>
        </div>
    </section>
    <!-- Team Section -->


    <!-- Parallax Container -->
    <div id="four-parallax" class="parallax" style="background-image: url('public/images/separator4.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
        <div class="parallax-overlay">
            <div class="section-content">
                <div class="container text-center">
                    <!-- Parallax title -->
                    <h1>Our company attaches great importance to the numbers. is our way to success</h1>
                    <p class="lead">
                        Here are some examples
                    </p>
                    <!-- Parallax title -->

                    <!-- Parallax content -->
                    <div class="parallax-content">
                        <div class="row text-center number-counters">
                            <div class="col-md-3 col-sm-6">
                                <div class="counters-item element-line">
                                    <i class="fa fa-thumbs-o-up fa-4x"></i>
                                    <strong data-to="3500">0</strong>
                                    <p class="lead">
                                        Happy Clients
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="counters-item element-line">
                                    <i class="fa fa-flag fa-4x"></i>
                                    <strong data-to="25">0</strong>
                                    <p class="lead">
                                        Years in Business
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="counters-item element-line">
                                    <i class="fa fa-coffee fa-4x"></i>
                                    <strong data-to="15200">0</strong>
                                    <p class="lead">
                                        Cups of Coffee
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="counters-item element-line">
                                    <i class="fa fa-rocket fa-4x"></i>
                                    <strong data-to="378">0</strong>
                                    <p class="lead">
                                        High Score
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Parallax content -->

                </div>
            </div>
        </div>
    </div>
    <!-- Parallax Container -->


    <!-- Client Section -->
    <section id="client" class="section-content">
        <div class="container">

            <!-- Section title -->
            <div class="section-title text-center">
                <div>
                    <span class="line big"></span>
                    <span>The most important thing</span>
                    <span class="line big"></span>
                </div>
                <h1 class="item_right">Your Feedback</h1>
                <img src="http://www.ten28.com/fref.jpg">
                <div>
                    <span class="line"></span>
                    <span>We like making people smile</span>
                    <span class="line"></span>
                </div>
                <p class="lead">
                    We could talk for hours about how good we are and efficient but your opinion will always be the truest and most important. We are the creative agency with 99.9% of satisfied customers.
                </p>
            </div>
            <!-- Section title -->

            <div class="row">
                <div class="element-line">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="flexslider">
                            <ul class="slides text-center">

                                <!-- Client slide -->
                                <li>
                                    <img src="public/images/feedback2.jpg" class="img-circle img-center img-responsive" alt=""/>
                                    <h2>Stephan Kendall</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non metus. pulvinar. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                    </p>
                                    <p class="lead">
                                        Audio Jungle
                                    </p>
                                </li>
                                <!-- Client slide -->

                                <!-- Client slide -->
                                <li>
                                    <img src="public/images/feedback1.jpg" class="img-circle img-center img-responsive" alt=""/>
                                    <h2>Jonathan Ray</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non metus. pulvinar. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                    </p>
                                    <p class="lead">
                                        Codecanyon
                                    </p>
                                </li>
                                <!-- Client slide -->

                                <!-- Client slide -->
                                <li>
                                    <img src="public/images/feedback3.jpg" class="img-circle img-center img-responsive" alt=""/>
                                    <h2>Katrina carianoff</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non metus. pulvinar. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                    </p>
                                    <p class="lead">
                                        Activeden
                                    </p>
                                </li>
                                <!-- Client slide -->

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Section -->


    <!-- Parallax Container -->
    <div id="five-parallax" class="parallax" style="background-image: url('public/images/separator5.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
        <div class="parallax-overlay parallax-background-color">
            <div class="section-content">
                <div class="container text-center">

                    <!-- Parallax title -->
                    <h1>From mobile platforms with the most innovative marketing strategies, our goal is always concrete and tangible:</h1>
                    <p class="lead">
                        Please the customer
                    </p>
                    <!-- Parallax title -->

                    <!-- Parallax content -->
                    <div class="parallax-content">
                        <div class="row text-center client-list">

                            <!-- Client item -->
                            <div class="col-md-2 col-sm-4 col-md-2 col-xs-6">
                                <div class="element-line">
                                    <div class="item_right">
                                        <a href="#" class="zoom"> <img class="img-responsive" src="public/images/client1.png" alt=""> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Client item -->

                            <!-- Client item -->
                            <div class="col-md-2 col-sm-4 col-md-2 col-xs-6">
                                <div class="element-line">
                                    <div class="item_right">
                                        <a href="#" class="zoom"> <img class="img-responsive" src="public/images/client2.png" alt=""> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Client item -->

                            <!-- Client item -->
                            <div class="col-md-2 col-sm-4 col-md-2 col-xs-6">
                                <div class="element-line">
                                    <div class="item_right">
                                        <a href="#" class="zoom"> <img class="img-responsive" src="public/images/client3.png" alt=""> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Client item -->

                            <!-- Client item -->
                            <div class="col-md-2 col-sm-4 col-md-2 col-xs-6">
                                <div class="element-line">
                                    <div class="item_right">
                                        <a href="#" class="zoom"> <img class="img-responsive" src="public/images/client4.png" alt=""> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Client item -->

                            <!-- Client item -->
                            <div class="col-md-2 col-sm-4 col-md-2 col-xs-6">
                                <div class="element-line">
                                    <div class="item_right">
                                        <a href="#" class="zoom"> <img class="img-responsive" src="public/images/client5.png" alt=""> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Client item -->

                            <!-- Client item -->
                            <div class="col-md-2 col-sm-4 col-md-2 col-xs-6">
                                <div class="element-line">
                                    <div class="item_right">
                                        <a href="#" class="zoom"> <img class="img-responsive" src="public/images/client6.png" alt=""> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Client item -->

                        </div>
                    </div>
                    <!-- Parallax content -->

                </div>
            </div>
        </div>
    </div>
    <!-- Parallax Container -->


    <!-- Pricing Section -->
    <section id="pricing" class="section-content">
        <div class="container">

            <!-- Section title -->
            <div class="section-title text-center">
                <div>
                    <span class="line big"></span>
                    <span>What we can offer</span>
                    <span class="line big"></span>
                </div>
                <h1 class="item_left">Our Pricing</h1>
                <div>
                    <span class="line"></span>
                    <span>Solutions to everyone</span>
                    <span class="line"></span>
                </div>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                </p>
            </div>
            <!-- Section title -->

            <div class="pricing-5-col">

                <!-- Price col item -->
                <div class="item_bottom">
                    <div class="pricing-box">
                        <div class="element-line">
                            <ul>
                                <li class="title-row">
                                    <h4>Free</h4>
                                </li>
                                <li class="price-row">
                                    <h1>$0</h1><span>/month</span>
                                </li>
                                <li>
                                    4 Core Processor
                                </li>
                                <li>
                                    Hardisk 10GB
                                </li>
                                <li>
                                    Ram 8GB
                                </li>
                                <li>
                                    24/7 Free Support
                                </li>
                                <li class="btn-row">
                                    <div class="mybutton small">
                                        <a href="http://themeforest.net/item/alpine-responsive-one-page-parallax-template/6480453?ref=creativeispiration"><span data-hover="Now">Get Started</span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Price col item -->

                <!-- Price col item -->
                <div class="item_top">
                    <div class="pricing-box">
                        <div class="element-line">
                            <ul>
                                <li class="title-row">
                                    <h4>Basic</h4>
                                </li>
                                <li class="price-row">
                                    <h1>$29</h1><span>/month</span>
                                </li>
                                <li>
                                    4 Core Processor
                                </li>
                                <li>
                                    Hardisk 10GB
                                </li>
                                <li>
                                    Ram 8GB
                                </li>
                                <li>
                                    24/7 Free Support
                                </li>
                                <li class="btn-row">
                                    <div class="mybutton small">
                                        <a href="http://themeforest.net/item/alpine-responsive-one-page-parallax-template/6480453?ref=creativeispiration"><span data-hover="Now">Get Started</span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Price col item -->

                <!-- Price col item -->
                <div class="item_bottom">
                    <div class="pricing-box">
                        <div class="element-line">
                            <div class="pricing-featured">
                                <ul>
                                    <li class="title-row">
                                        <h4>Silver</h4>
                                    </li>
                                    <li class="price-row">
                                        <h1>$59</h1><span>/month</span>
                                    </li>
                                    <li>
                                        4 Core Processor
                                    </li>
                                    <li>
                                        Hardisk 10GB
                                    </li>
                                    <li>
                                        Ram 8GB
                                    </li>
                                    <li>
                                        24/7 Free Support
                                    </li>
                                    <li class="btn-row">
                                        <div class="mybutton small">
                                            <a href="http://themeforest.net/item/alpine-responsive-one-page-parallax-template/6480453?ref=creativeispiration"><span data-hover="Now">Get Started</span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Price col item -->

                <!-- Price col item -->
                <div class="item_top">
                    <div class="pricing-box">
                        <div class="element-line">
                            <ul>
                                <li class="title-row">
                                    <h4>Gold</h4>
                                </li>
                                <li class="price-row">
                                    <h1>$99</h1><span>/month</span>
                                </li>
                                <li>
                                    4 Core Processor
                                </li>
                                <li>
                                    Hardisk 10GB
                                </li>
                                <li>
                                    Ram 8GB
                                </li>
                                <li>
                                    24/7 Free Support
                                </li>
                                <li class="btn-row">
                                    <div class="mybutton small">
                                        <a href="http://themeforest.net/item/alpine-responsive-one-page-parallax-template/6480453?ref=creativeispiration"><span data-hover="Now">Get Started</span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Price col item -->

                <!-- Price col item -->
                <div class="item_bottom">
                    <div class="pricing-box last">
                        <div class="element-line">
                            <ul>
                                <li class="title-row">
                                    <h4>Platinum</h4>
                                </li>
                                <li class="price-row">
                                    <h1>$199</h1><span>/month</span>
                                </li>
                                <li>
                                    4 Core Processor
                                </li>
                                <li>
                                    Hardisk 10GB
                                </li>
                                <li>
                                    Ram 8GB
                                </li>
                                <li>
                                    24/7 Free Support
                                </li>
                                <li class="btn-row">
                                    <div class="mybutton small">
                                        <a href="http://themeforest.net/item/alpine-responsive-one-page-parallax-template/6480453?ref=creativeispiration"><span data-hover="Now">Get Started</span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Price col item -->

                <div class="clearfix"></div>

            </div>

        </div>
    </section>
    <!-- Pricing Section -->


    <!-- Parallax Container -->
    <div id="six-parallax" class="parallax" style="background-image: url('public/images/separator6.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
        <div class="parallax-overlay">
            <div class="section-content">
                <div class="container text-center">

                    <!-- Parallax title -->
                    <h1>From mobile platforms with the most innovative marketing strategies, our goal is always concrete and tangible:</h1>
                    <p class="lead">
                        Please the customer
                    </p>
                    <!-- Parallax title -->

                    <!-- Parallax content -->
                    <div class="parallax-content">
                        <div class="row">

                            <!-- Item box -->
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="element-line">
                                    <div class="item_left">
                                        <div class="parallax-box">
                                            <a href="#"> <i class="fa fa-html5 fa-4x"></i> <h4>HTML5 Validated</h4>
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                </p> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item box -->

                            <!-- Item box -->
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="element-line">
                                    <div class="item_left">
                                        <div class="parallax-box">
                                            <a href="#"> <i class="fa fa-magic fa-4x"></i> <h4>Parallax Effects</h4>
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                </p> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item box -->

                            <!-- Item box -->
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="element-line">
                                    <div class="item_right">
                                        <div class="parallax-box">
                                            <a href="#"> <i class="fa fa-css3 fa-4x"></i> <h4>CSS3 Animations</h4>
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                </p> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item box -->

                            <!-- Item box -->
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="element-line">
                                    <div class="item_right">
                                        <div class="parallax-box">
                                            <a href="#"> <i class="fa fa-leaf fa-4x"></i> <h4>Retina Ready</h4>
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                </p> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item box -->

                        </div>
                    </div>
                    <!-- Parallax content -->

                </div>
            </div>
        </div>
    </div>
    <!-- Parallax Container -->

    <!-- Blog Section -->
    <section id="blog" class="section-content timeline-content bgdark">
        <div class="container">

            <!-- Section title -->
            <div class="section-title text-center">
                <div>
                    <span class="line big"></span>
                    <span>Latest from our blog</span>
                    <span class="line big"></span>
                </div>
                <h1 class="item_right">Our Blog</h1>
                <div>
                    <span class="line"></span>
                    <span>Timeline post news</span>
                    <span class="line"></span>
                </div>
                <p class="lead">
                    We're a close team of creatives, designers &amp; developers who work together to create beautiful, engaging digital experiences. We take pride in delivering only the best.
                </p>
            </div>
            <!-- Section title -->

            <div class="element-line">
                <ol id="timeline">

                    <!-- Timeline item -->
                    @foreach($articles as $article)
                        <li class="timeline-item">
                            <div class="item_left">
                                <div class="well post">
                                    <div class="post-info bgdark text-center">
                                        <h5 class="info-date">April 9, 2013<small>10:45</small></h5>
                                        <a href="{{route('post.single',$article->slug)}}" class="box-inner rotate">
                                            @if(Storage::disk('local')->has('articles',$article->file))
                                                <img width="300" height="300" class="img-circle img-responsive" src="{{route('admin.user.file',['filename'=>$article->author->avatar])}}" alt=""> </a>
                                        @endif
                                        <h5>{{$article->author->prenom}}</h5>
                                    </div>
                                    <div class="post-body clearfix">
                                        <div class="blog-title">
                                            <h1><a href="{{route('post.single',$article->slug)}}">{{$article->title}}</a></h1>
                                        </div>
                                        <a href="{{route('post.single',$article->slug)}}" class="zoom">
                                            @if(Storage::disk('local')->has('articles',$article->file))
                                                <img class="img-responsive" src="{{route('articles.file',['filename'=>$article->file])}}" alt=""> </a>
                                        @endif

                                        </a>
                                        <div class="post-text">
                                            <p class="lead">

                                                {!!$article->content !!}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="post-arrow"></div>
                                </div>
                            </div>
                        </li>
                    @endforeach

                </ol>
            </div>

        </div>
    </section>
    <!-- Blog Section -->


    <!-- Parallax Container -->
    <div id="seven-parallax" class="parallax" style="background-image: url('public/images/separator7.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
        <div class="parallax-overlay parallax-background-color">
            <div class="section-content">
                <div class="container text-center">
                    <div class="item_right">

                        <!-- Parallax title -->
                        <h1><i class="fa fa-mobile fa-5x"></i></h1>
                        <span class="call-number">123-456-789</span>
                        <p class="lead">
                            Call from Monday to Friday from 09:00 to 12:00 and from 15:00 to 18:00
                        </p>
                        <!-- Parallax title -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Parallax Container -->

    <!-- Contact Section -->
    <section id="contact" class="section-content">
        <div class="container">

            <!-- Section title -->
            <div class="section-title text-center">
                <div>
                    <span class="line big"></span>
                    <span>And now</span>
                    <span class="line big"></span>
                </div>
                <h1 class="item_left">Contact us</h1>
                <div>
                    <span class="line"></span>
                    <span>Is time to do it</span>
                    <span class="line"></span>
                </div>
                <p class="lead">
                    Alpine Studios, Level 13, 2 Elizabeth St, Melbourne, Victoria 3000, Australia
                    <br>
                    <a target="_blank" href="https://maps.google.it/maps?q=Level+13,+2+Elizabeth+St,+Melbourne,+Victoria+3000,+Australia+&hl=it&ll=-37.819446,144.971595&spn=0.03407,0.066047&geocode=+&hnear=13%2F2+Elizabeth+St,+Melbourne+Victoria+3000,+Australia&t=m&z=15&iwloc=A">View on Google Map</a>
                </p>
            </div>
            <!-- Section title -->

        </div>

        <!-- Google maps print -->
        <div id="map_canvas" class="element-line"></div>
        <!-- Google maps print -->

        <div class="container">
            <div class="element-line">
                <p class="lead text-center">
                    Do you have any idea in mind? Contact us, we will give you the answer you expect.
                </p>
                <p class="lead text-center error">

                </p>
                <!-- form contact -->
                <form action="{{route('contact')}}" method="post" name="contactform" id="contactform" class="element-line " role="form">
                    <div class="form-respond text-center"></div>
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-md-6 col-xs-12">
                            <div class="item_top">

                                <!-- Form group -->
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input type="text" name="nom" id="nom" class="form-control input-lg " placeholder="">
                                </div>
                                <!-- Form group -->
                                <!-- Form group -->
                                <div class="form-group">
                                    <label for="name">Prenom</label>
                                    <input type="text" name="prenom" id="prenom" class="form-control input-lg " placeholder="">
                                </div>
                                <!-- Form group -->

                                <!-- Form group -->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control input-lg  email" >
                                </div>
                                <!-- Form group -->

                                <!-- Form group -->
                                <div class="form-group">
                                    <label for="phone">Tele</label>
                                    <input type="text" name="tele" id="tele" class="form-control input-lg " >
                                </div>
                                <!-- Form group -->

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-md-6 col-xs-12">
                            <div class="item_bottom">

                                <!-- Form group -->
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" class="form-control input-lg " rows="15" placeholder="Enter Message"></textarea>
                                </div>
                                <!-- Form group -->

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="action form-button medium">

                                <div class="mybutton medium">
                                    <button id="submit" type="submit">
                                        <span data-hover="Send message">envoyer</span>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
                <!-- form contact -->
            </div>
        </div>
    </section>
    <!-- Contact Section -->
@endsection

@section('specified_script')

@endsection
