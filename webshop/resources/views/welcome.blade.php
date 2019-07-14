<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Artist Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Primary stylesheet -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}" />
    <!-- Bootstrap stylesheet -->

    <link rel="shortcut icon" type="image/png" href="#"/>
</head>
<body>
<!-- Header -->
<header class="">
    <img class="" src="./img/logo.png" width="100" height="auto">
    <a href="#home" class="color-white">Home</a>
    <a href="#experience" class="color-white">Experience</a>
    <a href="#aboutme" class="color-white">About me</a>
    <a href="#skills" class="color-white">Skills</a>
    <a href="#work" class="color-white">Latest work</a>
    <a href="#articles" class="color-white">Latest articles</a>
    <a href="#contactme" class="color-white">Contact me</a>
    <img id="nav-open" src="./img/nav-hamburger.svg" width="40" height="auto">
</header>
<!-- Home container -->
<section id="home" class="screenSize-container">
    <div class="transWhite-container text-center text-dark p-3 vertical-align">
        @yield('content')

    </div>
</section>
<!-- Experience container -->
<section id="experience" class="">
    <div class="row pb-5 transBlack-container">
        <div class="col-8 offset-2 text-center pt-5 pb-1 text-light">
            <h1 class="font-weight-light">My Experience</h1>
        </div>
        <div class="col-8 offset-2 text-center text-light row mt-5 text-center">
            <div class="col-xl-4 col-md-6 col-12 text-left mt-5 pr-4 pl-4">
                <img class="" src="./img/art.svg" width="50" height="auto">
                <h4 class="font-weight-light text-uppercase mt-2 mb-3">lorem ipsum</h4>
                <p class="font-weight-light">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Integer malesuada. Class aptent taciti sociosqu ad litora
                    torquent per conubia nostra, per inceptos hymenaeos.
                </p>
            </div>
            <div class="col-xl-4 col-md-6 col-12 text-left mt-5 pr-4 pl-4">
                <img class="" src="./img/art.svg" width="50" height="auto">
                <h4 class="font-weight-light text-uppercase mt-2 mb-3">lorem ipsum</h4>
                <p class="font-weight-light">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Integer malesuada. Class aptent taciti sociosqu ad litora
                    torquent per conubia nostra, per inceptos hymenaeos.
                </p>
            </div>
            <div class="col-xl-4 col-md-6 col-12 text-left mt-5 pr-4 pl-4">
                <img class="" src="./img/art.svg" width="50" height="auto">
                <h4 class="font-weight-light text-uppercase mt-2 mb-3">lorem ipsum</h4>
                <p class="font-weight-light">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Integer malesuada. Class aptent taciti sociosqu ad litora
                    torquent per conubia nostra, per inceptos hymenaeos.
                </p>
            </div>
            <div class="col-xl-4 col-md-6 col-12 text-left mt-5 pr-4 pl-4">
                <img class="" src="./img/art.svg" width="50" height="auto">
                <h4 class="font-weight-light text-uppercase mt-2 mb-3">lorem ipsum</h4>
                <p class="font-weight-light">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Integer malesuada. Class aptent taciti sociosqu ad litora
                    torquent per conubia nostra, per inceptos hymenaeos.
                </p>
            </div>
            <div class="col-xl-4 col-md-6 col-12 text-left mt-5 pr-4 pl-4">
                <img class="" src="./img/art.svg" width="50" height="auto">
                <h4 class="font-weight-light text-uppercase mt-2 mb-3">lorem ipsum</h4>
                <p class="font-weight-light">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Integer malesuada. Class aptent taciti sociosqu ad litora
                    torquent per conubia nostra, per inceptos hymenaeos.
                </p>
            </div>
            <div class="col-xl-4 col-md-6 col-12 text-left mt-5 pr-4 pl-4">
                <img class="" src="./img/art.svg" width="50" height="auto">
                <h4 class="font-weight-light text-uppercase mt-2 mb-3">lorem ipsum</h4>
                <p class="font-weight-light">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Integer malesuada. Class aptent taciti sociosqu ad litora
                    torquent per conubia nostra, per inceptos hymenaeos.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- About Me container -->
<section id="aboutme" class="">
    <div class="row pb-5 bg-light">
        <div class="col-8 offset-2 text-center pt-5 pb-1 text-dark">
            <h1 class="font-weight-light">About Me</h1>
        </div>
        <div class="col-md-8 offset-md-2 col-10 offset-1 text-left mt-5 row">
            <div class="col-lg-6 col-12 text-left p-4">
                <p class="mb-5">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Integer malesuada. Class aptent taciti sociosqu ad litora
                    torquent per conubia nostra, per inceptos hymenaeos.
                    Pellentesque arcu. Curabitur ligula sapien, pulvinar
                    a vestibulum quis, facilisis vel sapien.
                </p>

                <div class="col-xl-4 col-8 p-0 d-inline-block">
                    <p class="m-0"><b class="">Name:</b></p>
                </div>
                <div class="col-xl-4 col-8 p-0 d-inline-block">
                    <p class="m-0"><i class="">James Darcy</i></p>
                </div>
                <hr class="col-8 ml-0" />
                <div class="col-xl-4 col-8 p-0 d-inline-block">
                    <p class="m-0"><b class="">Gender:</b></p>
                </div>
                <div class="col-xl-4 col-8 p-0 d-inline-block">
                    <p class="m-0"><i class="">Male</i></p>
                </div>
                <hr class="col-8 ml-0" />
                <div class="col-xl-4 col-8 p-0 d-inline-block">
                    <p class="m-0"><b class="">Email:</b></p>
                </div>
                <div class="col-xl-4 col-8 p-0 d-inline-block">
                    <p class="m-0"><i class="">example@example.com</i></p>
                </div>
                <hr class="col-8 ml-0" />
                <div class="col-xl-4 col-8 p-0 d-inline-block">
                    <p class="m-0"><b class="">Phone:</b></p>
                </div>
                <div class="col-xl-4 col-8 p-0 d-inline-block">
                    <p class="m-0"><i class="">+123 456 789 123</i></p>
                </div>
                <hr class="col-8 ml-0" />
                <div class="col-xl-4 col-8 p-0 d-inline-block">
                    <p class="m-0"><b class="">Address:</b></p>
                </div>
                <div class="col-xl-4 col-8 p-0 d-inline-block">
                    <p class="m-0"><i class="">Birmingham, UK</i></p>
                </div>
            </div>
            <div class="col-lg-6 col-12 text-left p-4">
                <h4 class="font-weight-light mb-4">Lorem ipsum</h4>
                <p class="mb-5">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Integer malesuada. Class aptent taciti sociosqu ad litora
                    torquent per conubia nostra, per inceptos hymenaeos.
                    Pellentesque arcu. Curabitur ligula sapien, pulvinar
                    a vestibulum quis, facilisis vel sapien.
                </p>
                <h4 class="font-weight-light mb-4">Lorem ipsum</h4>
                <p class="mb-5">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Integer malesuada. Class aptent taciti sociosqu ad litora
                    torquent per conubia nostra, per inceptos hymenaeos.
                    Pellentesque arcu. Curabitur ligula sapien, pulvinar
                    a vestibulum quis, facilisis vel sapien.
                </p>
                <h4 class="font-weight-light mb-4">Lorem ipsum</h4>
                <p class="mb-5">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Integer malesuada. Class aptent taciti sociosqu ad litora
                    torquent per conubia nostra, per inceptos hymenaeos.
                    Pellentesque arcu. Curabitur ligula sapien, pulvinar
                    a vestibulum quis, facilisis vel sapien.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Skills container -->
<section id="skills" class="skills-bg">
    <div class="row pb-5 transBlack-container">
        <div class="col-8 offset-2 text-center pt-5 pb-1 text-white">
            <h1 class="font-weight-light">Skills</h1>
        </div>
        <div class="col-md-8 offset-md-2 col-10 offset-1 text-left mt-5 row">
            <div class="col-xl-4 col-12 text-white pr-4 pl-4">
                <h3>Education</h3>
                <div class="border-bottom border-light mb-4"></div>
                <div class="">
                    <h4 class="font-weight-light">Art school name</h4>
                    <i>2012 - 2017</i>
                    <p class="mt-3 mb-4">Art history</p>
                </div>
                <div class="">
                    <h4 class="font-weight-light">High school name</h4>
                    <i>2012 - 2017</i>
                    <p class="mt-3 mb-4">Art history</p>
                </div>
                <div class="">
                    <h4 class="font-weight-light">University name</h4>
                    <i>2012 - 2017</i>
                    <p class="mt-3 mb-4">Art history</p>
                </div>
            </div>
            <div class="col-xl-4 col-12 text-white pr-4 pl-4">
                <h3>Experience</h3>
                <div class="border-bottom border-light mb-4"></div>
                <div class="">
                    <h4 class="font-weight-light">Art painter</h4>
                    <i>2017 - 2018</i>
                    <p class="mt-3 mb-4">Gothic painting</p>
                </div>
                <div class="">
                    <h4 class="font-weight-light">Art painter</h4>
                    <i>2018 - NOW</i>
                    <p class="mt-3 mb-4">Renesance painting</p>
                </div>
            </div>
            <div class="col-xl-4 col-12 text-white pr-4 pl-4">
                <h3>Artistic period</h3>
                <div class="border-bottom border-light mb-4"></div>
                <p class="mb-1">Renesance</p>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">78%</div>
                </div>
                <p class="mb-1 mt-5">Baroque</p>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                </div>
                <p class="mb-1 mt-5">Romanticism</p>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 64%;" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100">64%</div>
                </div>
                <p class="mb-1 mt-5">Realism</p>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">92%</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest work container -->
<section id="work" class="">
    <div class="row pb-5 bg-light">
        <div class="col-8 offset-2 text-center pt-5 pb-1 text-dark">
            <h1 class="font-weight-light">Latest work</h1>
        </div>
        <div class="col-md-8 offset-md-2 col-10 offset-1 offset-md-0 text-left mt-5 row">
            <div class="col-lg-4 col-md-6 col-12 mt-3 mb-3">
                <img data-index="1" class="img-fluid galleryImage" src="./img/galleryImg.jpeg">
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-3 mb-3">
                <img data-index="2" class="img-fluid galleryImage" src="./img/galleryImg.jpeg">
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-3 mb-3">
                <img data-index="3" class="img-fluid galleryImage" src="./img/galleryImg.jpeg">
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-3 mb-3">
                <img data-index="4" class="img-fluid galleryImage" src="./img/galleryImg.jpeg">
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-3 mb-3">
                <img data-index="5" class="img-fluid galleryImage" src="./img/galleryImg.jpeg">
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-3 mb-3">
                <img data-index="6" class="img-fluid galleryImage" src="./img/galleryImg.jpeg">
            </div>
        </div>
    </div>
</section>
<!-- Latest Articles container -->
<section id="articles" class="">
    <div class="row pb-5 bg-dark">
        <div class="col-8 offset-2 text-center pt-5 pb-1 text-white">
            <h1 class="font-weight-light">Latest articles</h1>
            <h5 class="font-weight-light">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer malesuada.</h5>
        </div>
        <div class="col-md-8 offset-md-2 col-10 offset-1 offset-md-0 text-left mt-5 row">
            <div class="col-xl-4 col-md-6 col-12 mt-3 mb-3 align-top text-dark text-center">
                <div class="bg-light pb-3">
                    <img class="img-fluid mb-3 mt-3" src="./img/articleImg.png">
                    <div class="text-left pl-3">
                        <h5 class="">Lorem ipsum dolor sit amet</h5>
                        <i>1<sup>th</sup> May, 2018</i>
                        <p class="mt-3">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Integer malesuada. Class aptent taciti sociosqu ad litora
                            torquent per conubia nostra, per inceptos hymenaeos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12 mt-3 mb-3 align-top text-dark text-center">
                <div class="bg-light pb-3">
                    <img class="img-fluid mb-3 mt-3" src="./img/articleImg.png">
                    <div class="text-left pl-3">
                        <h5 class="">Lorem ipsum dolor sit amet</h5>
                        <i>1<sup>th</sup> May, 2018</i>
                        <p class="mt-3">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Integer malesuada. Class aptent taciti sociosqu ad litora
                            torquent per conubia nostra, per inceptos hymenaeos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12 mt-3 mb-3 align-top text-dark text-center">
                <div class="bg-light pb-3">
                    <img class="img-fluid mb-3 mt-3" src="./img/articleImg.png">
                    <div class="text-left pl-3">
                        <h5 class="">Lorem ipsum dolor sit amet</h5>
                        <i>1<sup>th</sup> May, 2018</i>
                        <p class="mt-3">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Integer malesuada. Class aptent taciti sociosqu ad litora
                            torquent per conubia nostra, per inceptos hymenaeos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Me container -->
<section id="contactme" class="">
    <div class="row pb-5 bg-light">
        <div class="col-8 offset-2 text-center pt-5 pb-1 text-dark">
            <h1 class="font-weight-light">Contact me</h1>
        </div>
        <div class="col-md-8 offset-md-2 col-10 offset-1 offset-md-0 text-left mt-5 row">
            <form class="col-10 offset-1 row" action="mail.php" method="POST">
                <div class="form-group col-lg-6 col-12 text-left">
                    <input type="text" class="form-control" id="" placeholder="Enter name">
                </div>
                <div class="form-group col-lg-6 col-12 text-left">
                    <input type="email" class="form-control" id="" placeholder="Enter email">
                </div>
                <div class="form-group col-12 text-left">
                    <textarea class="form-control" rows="6" placeholder="What is on Your mind?"></textarea>
                </div>
                <div class="form-group col-12 text-center">
                    <button type="submit" class="btn btn-dark">Send</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Footer -->
<footer>
    <div class="row pb-5 bg-darker">
        <div class="col-md-8 offset-md-2 col-10 offset-1 offset-md-0 text-left mt-5 row">
            <div class="col-md-4 col-12 text-white pr-4 pl-4">
                <h5 class="font-weight-light">Contact me</h5>
                <div class="border-bottom border-light mb-4"></div>
                <p><b>Phone: </b><a href="#" class="text-white">+123 456 789 123</a></p>
                <p><b>Email: </b><a href="#" class="text-white">example@example.com</a></p>
                <p><b>Fax: </b><a href="#" class="text-white">(12) 34 5678 9123</a></p>
            </div>
            <div class="col-md-4 col-12 text-white pr-4 pl-4">
                <h5 class="font-weight-light">My address</h5>
                <div class="border-bottom border-light mb-4"></div>
                <p>68  Kingsway North</p>
                <p>HOLMSTON</p>
                <p>KA7 5BN</p>
            </div>
            <div class="col-md-4 col-12 text-white pr-4 pl-4">
                <h5 class="font-weight-light">Social</h5>
                <div class="border-bottom border-light mb-4"></div>
                <a href="#"><img class="social-footer" src="./img/facebookLightIcon.svg"></a>
                <a href="#"><img class="social-footer" src="./img/twitterLightIcon.svg"></a>
            </div>
        </div>
    </div>
    <div class="row bg-white text-dark text-center p-3">
        <div class="col-8 offset-2 text-center">
            Copyrights © 2022 James Darcy
        </div>
    </div>
</footer>
<!-- Gallery modal window -->
<div class="fullSizeImage">
    <div class="arrows floatLeft absLeftOnly"><img class="moveIcon" src="./img/moveIcon.svg" width="20" height="auto"></div>
    <img class="closeBtn" src="./img/closeBtn.svg" width="20" height="auto">
    <img class="imageBox" height="auto" src="">
    <div class="arrows floatRight absRightOnly"><img class="moveIcon" src="./img/moveIcon2.svg" width="20" height="auto"></div>
</div>


<!-- Primary JavaScript -->
<script type="text/javascript" src="{{mix('/js/app.js')}}"></script>
</body>
</html>
