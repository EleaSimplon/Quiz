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

<?php

include '../View/footer.php';

?>