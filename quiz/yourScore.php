<?php

require_once(__DIR__."/../process/connexionBdd.php");

include '../View/header.php';

?>
    <!-- VOTRE SCORE NEON -->
    <div class="container1">
        <div class="votre1">Votre</div>
        <div class="score1">Score</div><br><br>
        <!-- SCORE PLAYER -->
        <?php

            $reponse = $pdo->query(

            'SELECT *
            FROM score
            ORDER BY id DESC
            LIMIT 1');

            $score = $reponse->fetch();

        ?>
        <div class="resultat1"><?= $score['score']; ?></div>
    </div>
        

    <!-- SCORE GRAPHIQUE -->
    <div style="width: 50%">
        <canvas id="myChart"></canvas>
    </div>

        <?php
   
    $stmt = $pdo->prepare("SELECT * FROM score WHERE id_pseudo = ?");
    $stmt->execute([$_GET['id']]);

    $scores = [];
    $idPartie = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $scores[] = (int)$score;
        $idPartie[] = (int)$id;
    }

    ?>

    <script>

        let ctx = document.getElementById('myChart').getContext('2d');

        let chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: <?php echo json_encode($idPartie);?>,
                datasets: [{
                    label: 'My Score',
                    backgroundColor: 'rgb(173, 193, 223)',
                    borderColor: 'rgb(7, 46, 105)',
    
                    data: <?php echo json_encode($scores);?>
                }]
            },

            // Configuration options go here
            options: {

                horizontalAlign: "center",
                
                animation: {
                onProgress(animation) {
                    console.log(animation.animationObject.currentStep / animation.animationObject.numSteps);
                }
                },
                scales: {
                yAxes: [{
                    ticks: {
                    beginAtZero: true
                    }
                }]
                }
            }
            });

    </script>
      
    
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