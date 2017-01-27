<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- JQuery --> 

<script src="../third-party/datepicker/js/bootstrap-datepicker.js"> </script>
<!-- <script src="../third-party/datepicker/css/datepicker.css"> </script> -->
<script src="./js/script.js"></script>

</head>

<body>
<header>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Pozycz Auto</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li > <a href="index1.php"> Home </a> </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Klienci <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li> <a href="work-order.php"> Nowy klient </a> </li>
                            <li> <a href="work-order-show.php"> Podgląd klientów</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Zamówienia<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li> <a href="production-report.php"> Nowe zamówienie </a> </li>
                            <li> <a href="production-report-show.php"> Podgląd zamówień</a> </li>
                        </ul>
                    </li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Samochody<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li> <a href="samochod.php"> Nowy samochód </a> </li>
                            <li> <a href="samochod-show.php"> Podgląd samochodów</a> </li>
                        </ul>
                    </li>
                        </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>