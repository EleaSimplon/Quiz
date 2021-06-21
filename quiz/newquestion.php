<?php

require_once(__DIR__."/../process/connexionBdd.php");

include '../View/header.php';

?>

    <h1>Creer un quiz</h1>

    <div class="container logincontainer">
        <div class="row d-flex justify-content-center">
            <div id="form" class="col-lg-6 col-md-12 col-sm-12">

                <form action="/process/processnewquestion.php?id=<?= $_GET['id'];?>" method="POST">

                <h2>Créez un nouveau Quiz !</h2>
                        
                    <div class="rowTab"> 
                        <div class="labels">
                            <label for="question">* Question : </label>
                            <div class="rightTab">
                            <textarea type="textarea" class="input-field" name="question" id="question" required></textarea><br>
                            </div>
                        </div>
                    </div>
                    
                    <div class="rowTab"> 
                        <div class="labels">
                            <label for="option1">* Reponse 1 : </label>
                            <div class="rightTab">
                            <input type="text" name="option1" id="option1" class="input-field required"><br>
                            </div>
                        </div>
                    </div>
                    <div class="rowTab"> 
                        <div class="labels">
                            <label for="option2">* Reponse 2 : </label>
                            <div class="rightTab">
                            <input type="text" name="option2" id="option2" class="input-field" required><br>
                            </div>
                        </div>
                    </div>
                    <div class="rowTab"> 
                        <div class="labels">
                            <label for="option3">* Reponse 3 : </label>
                            <div class="rightTab">
                            <input type="text" name="option3" id="option3" class="input-field" required>
                            </div>
                        </div>
                    </div>
                    <div class="rowTab"> 
                        <div class="labels">
                            <label for="option4">* Reponse 4 : </label>
                            <div class="rightTab">
                            <input type="text" name="option4" id="option4" class="input-field" required><br>
                            </div>
                        </div>
                    </div>
                    <div class="rowTab"> 
                        <div class="labels">
                            <label for="bonneReponse">* Bonne Réponse : </label>
                            <div class="rightTab">
                            <input type="text" name="bonneReponse" id="bonneReponse" class="input-field" required><br>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <input class="d-flex justify-content-center" type="submit" name="createbtn" id='submit' value='CREER'>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
<?php

include '../View/footer.php';

?>