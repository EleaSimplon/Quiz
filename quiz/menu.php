<?php

require_once(__DIR__."/../process/connexionBdd.php");

include '../View/header.php';

?>

    
    <!--SECTION 1 HEADER-->
    <h1>QUIZ TIME</h1>

    <!--SECTION 2 PLAY -->
    <div class="container" id="play">
        <div class="row d-flex justify-content-center">
            
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center">

                <a href="quiz.php?id=<?=$_GET['id'];?>" class="glowButton" role="button">Play !</a>

            </div>
        </div>
    </div>

    <!--SECTION 3 LEADERBOARD -->
    <div class="container" id="leaderBoard">
        <div class="row d-flex justify-content-center">

            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center">
                <a href="score.php?id=<?=$_GET['id'];?>" class="glowButton" role="button">leaderBoard !</a>
            </div>
           
           
        </div>
    </div>

    <!--SECTION 3 NEW Q -->
    <div class="container" id="newQuiz">
        <div class="row d-flex justify-content-center">
            
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center">
                <a href="newquestion.php?id=<?=$_GET['id'];?>" class="glowButton" role="button">New Quiz!</a>
            </div>
            
        </div>
    </div>


    <!-- ***************************** BACK TO TOP BTN *********************************** -->
    <a id="back-to-top" href="#" class="btn btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!----- ***** BOOTSTRAP SCRIPTS ******------>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <!----- ***** JS SCRIPTS ******------>
    <script src="/JS/timer.js"></script>
    <script src="/JS/main.js"></script>
    <script src="/JS/navbar.js"></script>
    <script src="/JS/neon.js"></script>
    <script src="/JS/btnBackToTop.js"></script>

</body>
</html>