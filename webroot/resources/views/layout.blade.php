<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ elixir("css/app.css") }}">
    <script src="{{ elixir("js/app.js") }}"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

@include('layouts.nav')

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">Folly Beach Surf Report</h1>
        <p class="lead blog-description">We have waves...sometimes</p>
    </div>


        <div class="row">

            <div class="col-sm-8 blog-main">

                @yield('content')

                @include('layouts.pager')

            </div><!-- /.blog-main -->
            @include('layouts.sidebar')

        </div><!-- /.row -->

    </div><!-- /.container -->

    <footer>
        @yield('footer')
    </footer>

</body>
</html>