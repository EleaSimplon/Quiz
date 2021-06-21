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


<?php

include '../View/footer.php';

?>