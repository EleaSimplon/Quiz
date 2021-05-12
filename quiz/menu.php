<?php

require_once(__DIR__."/../process/connexionBdd.php");

include '../View/header.php';

?>

    
    <!--SECTION 1 HEADER-->
    <h1>QUIZ TIME</h1>

    <!--SECTION 2 PLAY -->
    <div class="container" id="play">
        <div class="row">
            <div class="col"></div>
            <div class="col-md-6 align-self-center">

            <a href="quiz.php?id=<?=$_GET['id'];?>" class="glowButton" role="button">Play !</a>

            </div>
            <div class="col"></div>
            </div>
    </div>

    <!--SECTION 3 LEADERBOARD -->
    <div class="container" id="leaderBoard">
        <div class="row">
            <div class="col"></div>
            <div class="col-md-6 align-self-center">
                <a href="score.php?id=<?=$_GET['id'];?>" class="glowButton" role="button">leaderBoard !</a>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <!--SECTION 3 NEW Q -->
    <div class="container" id="newQuiz">
        <div class="row">
            <div class="col"></div>
            <div class="col-md-6 align-self-center">
                <a href="newquestion.php?id=<?=$_GET['id'];?>" class="glowButton" role="button">New Quiz!</a>
            </div>
            <div class="col"></div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!----- ***** BOOTSTRAP SCRIPTS ******------>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <!----- ***** JS SCRIPTS ******------>
    <script src="/JS/timer.js"></script>
    <script src="/JS/main.js"></script>
    <script src="/JS/navbar.js"></script>
    <script src="/JS/neon.js"></script>
</body>
</html>