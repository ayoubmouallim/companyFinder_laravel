<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Narrow Jumbotron Template for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="public/css/style.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <br>
        @include('companyFinder.includes.header')

        <br><br>

        @yield('content')

        @include('companyFinder.includes.footer')

    </div> <!-- /container -->


    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>