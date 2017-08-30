<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ elixir("css/app.css") }}">
    <script src="{{ elixir("js/app.js") }}"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<div class="container">

    @include('layouts.nav')

    @yield('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Folly Beach Surf Report</h1>
            <p class="lead text-muted">We have waves...somtimes</p>
            <p>
                <a href="#" class="btn btn-primary">View Today's Report</a>
            </p>
        </div>
    </section>


    <footer>
        @yield('footer')
    </footer>

</div>
</body>
</html>