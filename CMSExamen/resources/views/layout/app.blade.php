<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Anekdots</title>

    <link rel="stylesheet" href="{{mix('css/app.css')}}" />

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="brand">Business Casual</div>
<div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            <a class="navbar-brand" href="index.html">Business Casual</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" {{--id="main-menu"--}}>
                <li>
                    <a class="btn btn-default" href="{{ route('main.page') }}">Home</a>
                </li>
                <li>
                    <a class="btn btn-default" href="{{ route('anekdots.index') }}">All anekdots</a>
                </li>
                <li>
                    <a class="btn btn-default dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Select cathegory
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @foreach($cathegories as $cathegory)
                        <a class="dropdown-item" href="{{ route('cathegory-anekdots', $cathegory->id) }}">{{ $cathegory->name }}</a>
                        @endforeach
                    </div>


                </li>


                <li>
                    <a class="btn btn-default" href="{{ route('anekdots.create') }}">New anekdot</a>
                </li>
                <li>
                    <a class="btn btn-default" href="{{--{{ route('auth.index') }}--}}">Log in (for admin)</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Copyright &copy; My Website 2019</p>
            </div>
        </div>
    </div>
</footer>



</body>
<script src="{{mix('js/app.js')}}"></script>
</html>
