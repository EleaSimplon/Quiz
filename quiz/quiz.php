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

    <!----- ***** BOOTSTRAP SCRIPTS ******------>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <!----- ***** JS SCRIPTS ******------>
    <script src="/JS/music.js"></script>
    <script src="/JS/animBtn.js"></script>
    <script src="/JS/timer.js"></script>
    <script src="/JS/main.js"></script>
</body>
</html>