<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Site</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./index.php"><p class="text-primary" style="font-weight: bold;">News Site</p></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="./index.php?type=apple">Apple News <span class="sr-only">(current)</span></a></li>
                    <li><a href="./index.php?type=tesla">Tesla News</a></li>
                    <li><a href="./index.php?type=wall">Wall Street News</a></li>
                    <li><a href="./index.php?type=tech">Tech News</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Country News <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="./index.php?country=ar">Argentina</a></li>
                            <li><a href="./index.php?country=at">Austria</a></li>
                            <li><a href="./index.php?country=fr">France</a></li>
                            <li><a href="./index.php?country=in">India</a></li>
                            <li><a href="./index.php?country=il">Israel</a></li>
                            <li><a href="./index.php?country=rs">Serbia</a></li>
                            <li><a href="./index.php?country=ae">United Arab Emirates</a></li>
                            <li><a href="./index.php?country=us">USA</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>