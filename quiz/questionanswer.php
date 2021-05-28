<?php

require_once(__DIR__."/../process/connexionBdd.php");

$userStatement = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$userStatement->execute([
    $_GET['id']
]);
$user = $userStatement->fetch(PDO::FETCH_ASSOC);


$array = explode('/', $user['id_questions']);
$reponseCountQuestionStatement = $pdo->prepare(
    'SELECT count(*) AS totalQuestion
    FROM questions');
$reponseCountQuestionStatement->execute();
$totalQuestion = $reponseCountQuestionStatement->fetch();


$idQuestion = rand ( 1, $totalQuestion['totalQuestion']);

while (in_array($idQuestion, $array) ) {
    $idQuestion = rand (1 ,  $totalQuestion['totalQuestion'] );
}

    $reponseStatement = $pdo->prepare(

        'SELECT questions.*
        FROM questions WHERE id = ? ');
        $reponseStatement->execute([
            $idQuestion
        ]);

    $donnees = $reponseStatement->fetch();
?>

    <section class="container" id="questionreponse">
        <div class="row d-flex justify-content-center">

            <div class="question col-lg-12 col-md-12 col-sm-12"> 

                <h3><?=$donnees['question']?></h3>

            </div>
        </div>

        <div class="container" id="reponses">
            <div class="row row-cols-2 d-flex justify-content-center">

                <div class="col-lg-6 col-md-6 col-sm-12">

                    <button id="rep" value="<?=$donnees['option1']?>" class="col1"><?=$donnees['option1']?></button>
                    
                    <button id="rep" value="<?=$donnees['option2']?>" class="col2"><?=$donnees['option2']?></button>
                </div>
            </div>

            <div class="row row-cols-2 d-flex justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12">

                    <button id="rep" value="<?=$donnees['option3']?>" class="col3"><?=$donnees['option3']?></button>

                    <button id="rep" value="<?=$donnees['option4']?>" class="col4"><?=$donnees['option4']?></button>
                </div>   
            </div>
                <input type="hidden"  value="<?=$donnees['bonneReponse']?>" id="bonneReponse">
                <input type="hidden"  value="<?=$donnees['id']?>" id="questionId">

        </div>

    </section>

    <button class="next glowButton" id="next" value="next">Suivant</button>