<?php

require_once(__DIR__."/../process/connexionBdd.php");

include '../View/header.php';

?>

     <!--SECTION 1 HEADER-->
     <h1>LEADER BOARD</h1>

    <div class="container" id="leader">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-12 col-sm-12 col-md-offset-4 best1">
                <h2>N1 PLAYER</h2>
                <img src="/img/crown.png" width="100vw">

                <?php
                    $result = $pdo->prepare('SELECT users.pseudo,
                        score.score
                        FROM users 
                        JOIN score
                        ON score.id_pseudo = users.id
                        ORDER BY score DESC
                        LIMIT 1');

                        $result->execute();
                        $list = $result->fetchAll(PDO::FETCH_ASSOC);
                                                        

                        foreach($list as $player){
                            echo "<br><br>".$player['pseudo']."<br>"." Score : ".$player['score']."<br>";
                        }
                                
                    ?>
                
            </div>
        </div>   
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-12 col-sm-12 col-md-offset-4 lists">
                
                <div type="text" class="players-list">
                    <h2>10 MEILLEURS SCORES !</h2>
                                
                                <?php
                                    $result = $pdo->prepare('SELECT users.pseudo,
                                        score.score
                                        FROM users 
                                        JOIN score
                                        ON score.id_pseudo = users.id
                                        ORDER BY score DESC
                                        LIMIT 10');

                                    $result->execute();
                                    $list = $result->fetchAll(PDO::FETCH_ASSOC); ?>
                                          
                                    <table class='table'>
                                        <thead>
                                            <tr>
                                                <th>Pseudo</th>
                                                <th>Score</th>
                                            </tr>
                                        </thead>

                                        <?php    foreach($list as $player){ ?>
                                                    <tbody>
                                                        <td><?=$player['pseudo']?></td>
                                                        <td><?=$player['score']?></td>
                                                    </tbody>
                                                
                                        <?php   }    ?>
                                    </table>

                </div>
            </div>
        </div>
    </div>



    <!----- ***** BOOTSTRAP SCRIPTS ******------>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <!----- ***** JS SCRIPTS ******------>
    <script src="/JS/main.js"></script>
    <script src="/JS/timer.js"></script>
    <script src="/JS/neon.js"></script>
</body>
</html>