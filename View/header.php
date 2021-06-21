<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----- ***** CHART.JS SCRIPT ******------>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!----- ***** BOOTSTRAP LINKS ******------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- ********* FONT AWESOME LINK ********* -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!----- ***** CSS LINK ******------>
    <link rel="stylesheet" href="/CSS/main.css">
    <!----- ***** QUERY LINK ******------>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <title>Votre Score</title>
    <!----- ***** URL ICON LINK ******------>
    <link rel="icon" href="/img/logo2.png" />

    <!-- NAV BAR -->
    <div class="navbar sticky-top">
        <img src="/img/logo2.png" width="50vw">
        <div class="navbar__menu">
            <a class="navbar__item" href="menu.php?id=<?=$_GET['id'];?>">Home ❓<span class="navbar__item__hovered"></span><span class="navbar__item__content" data-content="Home ❓"></span></a>
            <a class="navbar__item" href="/index.php">Login 👀<span class="navbar__item__hovered"></span><span class="navbar__item__content" data-content="Login 👀"></span></a>
            <a class="navbar__item" href="quiz.php?id=<?=$_GET['id'];?>">Play 🪅<span class="navbar__item__hovered"></span><span class="navbar__item__content" data-content="Play 🪅"></span></a>
            <a class="navbar__item" href="score.php?id=<?=$_GET['id'];?>">LeaderBoard 🏆<span class="navbar__item__hovered"></span><span class="navbar__item__content" data-content="LeaderBoard 🏆"></span></a>
            <a class="navbar__item navbar__item__icon" href="javascript:void(0);" onclick="navResponsive()"><i class="fa fa-bars"></i></a>
        </div>
    </div>
</head>


<body>