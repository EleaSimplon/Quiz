<?php

require_once(__DIR__."/../process/connexionBdd.php");

include '../View/header.php';

?>
    <!----- ***** SECTION 1 TIMER ******------>
        <div id="app"></div>


    <!----- ***** SECTION 3 & 4 QUESTIONS & REPONSES ******------>

    <?php include 'questionanswer.php'?>

    <!----- ***** SECTION 2 SCORE ******------>
    <form action="/../process/traitementscore.php?id=<?=$_GET['id'];?>" method="post">
          

        <button class="glowButton scorebtn" id="scorebtn" type="submit" value="Envoyer">Score</button>
        
        <input readonly type="number" name="score" class="score" value="0">

    </form>
   

    <input type="hidden" class="user_id" value="<?= $_GET['id'];?>">

    <!----- ***** AUDIO ******------>
    <audio id="muzik" src="/img/music.mp3"></audio>
    
<?php

include '../View/footer.php';

?>