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
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div style="width: 50%">
                <canvas id="myChart"></canvas>
            </div>
        </div>
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
  
<?php

include '../View/footer.php';

?>