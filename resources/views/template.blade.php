<!DOCTYPE html>
<html>
<head>
    <title>Website Bootstrap dengan Laravel</title>
    <link href="{{ url("bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{ url("bootstrap/js/jquery-3.2.1.min.js") }}"></script>
    <script type="text/javascript" src="{{ url("bootstrap/js/bootstrap.min.js") }}"></script>
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url("") }}">Pencari Kerja</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url("") }}">Home</a></li>
                <li><a href="{{ url("daftar") }}">Daftar Kerja</a></li>
                <li><a href="{{ url("pendaftarkerja") }}">Pendaftar Kerja</a></li>
                <li><a href="{{ url("tentang") }}">Tentang</a></li>
                <li><a href="{{ url("contact") }}">Contact</a></li>
            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->
<br>
<br>
@section('contentWebsite')
@show
<footer>
    <div class="container">
        <hr>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; Copyright 2017 <a href="http://naistudio.com" target="_blank">Naistudio</a>.
    </div>
</footer>

</body>
</html>