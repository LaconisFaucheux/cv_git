<?php
declare(strict_types=1);
session_start();
if (! isset($_POST['chiffre'])){
    $_SESSION['answer'] = rand(0, 1000);
    $_SESSION['counter'] = 0;
}
$message = null;
$answerArray = [];
$playAgain = null;
$thxmsg = null;
//traitement de la réponse & proposition de rejouer
if (isset($_POST['chiffre'])) {
    if ($_POST['chiffre'] > $_SESSION['answer']) {
        $message = "<div class=\"alert alert-danger my-3\">Trop grand!</div>";
        $_SESSION['counter'] += 1;

    } elseif ($_POST['chiffre'] < $_SESSION['answer']) {
        $message = "<div class=\"alert alert-danger my-3\">Trop petit!</div>";
        $_SESSION['counter'] += 1;

    } else {
        $_SESSION['counter'] += 1;
        $message = "<div class=\"alert alert-success my-3\">Bravo, vous avez deviné le nombre " . $_SESSION['answer'] . " en " . $_SESSION['counter'] . " coups!</div>";
        $playAgain = "<form class=\"pt-5 text-center\" action=\"/realisations/jeu.php\" method=\"POST\">
            <div class=\"form-group my-3\"> 
                <label for=\"game-input\" class=\"form-label\">Souhaitez-vous rejouer?</label></br>               
                <input type=\"radio\" id=\"yes\" name=\"playAgain\" value=\"yes\"> Oui!</input></br>
                <input type=\"radio\" id=\"no\" name=\"playAgain\" value=\"no\"> Non :'(</input></br>                 
            </div>
                <button class=\"btn btn-success\" type=\"submit\">Valider</button>                
    </form>";
    }
}
//traitement du playAgain
if (isset($_POST['playAgain'])){
    if ($_POST['playAgain'] === 'yes'){
        $_SESSION['answer'] = rand(0, 1000);
        $_SESSION['counter'] = 0;
        $message = "<div class=\"alert alert-success my-3\">C'est reparti!</div>";
    } else {
        $_SESSION['answer'] = rand(0, 1000);
        $_SESSION['counter'] = 0;
        $message = "<div class=\"alert alert-success my-3\">Merci d'avoir joué! :)</div>";
    }
}
?>

<?php require('require/head.php'); ?>
<!--Menu-->
<?php require ('require/nav.php');?>
<!--Fin Menu-->
<div id="content" class="container-md bg-white py-5 shadow-lg" style="--bs-bg-opacity: .8;">
    <h3 class="mt-5 text-center">Devinez le nombre! (PHP)</h3>
    <form class="mt-5" action="/realisations/jeu.php" method="POST">
        <div class="form-group my-3">
            <label for="game-input" class="form-label">Devinez le nombre entre 0 et 1000.</label>
            <input type="number" class="form-control" id="game-input" name="chiffre" placeholder="Entre 0 et 1000" value="<?php if (isset($_POST['chiffre'])){echo (int)$_POST['chiffre'];} ?>">
            <?= $message ?>
        </div>
        <button class="btn btn-success" type="submit">Devinez!</button>

    </form>
    <?= $playAgain; ?>


</div>

<!--Footer-->
<?php require ('require/footer.php'); ?>
<!--Fin Footer-->

</body>
</html>