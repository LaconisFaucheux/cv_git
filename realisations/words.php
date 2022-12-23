<?php
declare(strict_types=1);
?>

<?php require('require/head.php'); ?>
<!--Menu-->
<?php require ('require/nav.php');?>
<!--Fin Menu-->

<div id="content" class="container-md bg-white py-5 mt-5 shadow-lg" style="--bs-bg-opacity: .8;">
    <!--Header avec titre chrono et modale infos -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 d-flex align-self-center  justify-content-center">
                <div class="timer fs-1 border border-dark border-5 rounded-circle d-flex align-items-center justify-content-center" id="timer">30</div>
            </div>
            <div class="col d-flex align-self-center  justify-content-center">
                <h3 class="mb-5 text-center">Le Mot le plus long</h3>
            </div>
            <div class="col-3 d-flex align-self-center  justify-content-center">
                <button type="button" class="btn btn-outline-primary mx-3" data-bs-toggle="modal" data-bs-target="#gameInfos">
                    Infos
                </button>
            </div>
        </div>
    </div>
    <!--Modal-->
    <div class="modal fade" id="gameInfos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="exampleModalLabel">Infos sur le jeu</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Le jeu est construit sur une base de 85 817 mots français issus du <a href="http://www.lexique.org/">Lexique 3.83</a>.</p>
                    <p>Notez que tous les caractères accentués ont été remplacés par leurs valeurs non accentuées : <strong>"é" => "e"</strong>, <strong>"à" => "a"</strong> etc.
                        De même les lettres mêlées comme "œ" sont décomposées <strong>("œ" => oe)</strong> </p>
                    <p>Les tirets (-), espaces, apostrophes et les points ont été supprimés.</p>
                    <p>Ainsi le mot "à-côtés" se notera "acotes".</p>
                    <p>Plus d'informations dans le ReadMe du projet sur mon <a href="https://github.com/LaconisFaucheux">Github</a>! N'hésitez également pas à me donner votre avis sur
                    <a href="https://www.facebook.com/profile.php?id=100084734667011">Facebook</a> ou <a href="https://fr.linkedin.com/in/nicolas-frotey-70683a4a/">LinkedIn</a>!</p>
                    <p class="my-3"><i>Des améliorations sont en cours sur le temps d'affichage des réponses. Merci de votre patience! ;) </i></p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--Fin Modal-->
<!--Fin Header -->
<!--Boutons Niveaux-->
    <div class="container-fluid">
        <div class="row">
            <div class="mx-auto d-flex justify-content-center">
                <div class="my-3 d-flex flex-row col-6 align-items-center justify-content-evenly">
                    <button class="btn btn-success m-1" id="45">Facile (45s)</button>
                    <button class="btn btn-warning m-1" id="30">Normal (30s)</button>
                    <button class="btn btn-danger m-1" id="15">Bernard Pivot (15s)</button>
                </div>
            </div>
        </div>
    </div>
<!--Fin Boutons Niveaux-->
<!--Carrés pour le tirage -->
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col">
                <div class="lettersSquares d-flex flex-wrap">
                    <?php
                        for ($i=0; $i<10; $i++) {
                            echo '<p class="square shadow-sm rounded "  id="square' . $i . '"></p>';
                                }
                    ?>
                </div>
            </div>
        </div>
    </div>
<!--Fin carré-->
<!--Boutons voyelles & consonnes-->
    <div class="container-fluid">
        <div class="row">
            <div class="mx-auto d-flex justify-content-center">
                <div class="my-3 d-flex flex-row col-6 align-items-center justify-content-evenly">
                    <button class="btn btn-primary m-1" id="vowel">Voyelle</button>
                    <button class="btn btn-primary m-1" id="reload">Relancer</button>
                    <button class="btn btn-primary m-1" id="consonant">Consonne</button>
                </div>
            </div>
        </div>
    </div>
<!--Fin Boutons voyelles & consonnes-->
<!--Input de la réponse user-->
    <div class="container-fluid">
        <div class="row">
            <div class="mx-auto d-flex justify-content-center" id="form">
                <div class="form-group my-3 d-flex flex-column col-6 align-items-center">
                    <label for="gameInput" class="form-label fs-3">A vous de jouer!</label>
                    <input type="text" class="form-control" id="gameInput" name="answer" placeholder="Votre réponse ici">
                    <p>RAPPEL: pas d'accent ou de caractère spéciaux!</p>
                </div>
            </div>
        </div>
    </div>
<!--Fin Input de la réponse user-->
<!--Champ des réponses et calcul des points-->
    <div class="container-fluid" id="answerZone" style="display: none">
        <div class="row">
            <div class="mx-auto d-flex justify-content-center">
                <div class="my-3 d-flex flex-column col-8 align-items-center">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item" id="userAnswer">Votre réponse: (réponse)</li>
                        <li class="list-group-item" id="userScore">(score)</li>
                    </ul>

                    <p class="bestAnswers my-3">Les 3 meilleures réponses possibles étaient : </p>

                    <ul class="bestAnswersList list-group list-group-flush answers">
                        <ul class="list-group list-group-horizontal">
                            <li id="answer1" class="list-group-item">réponse</li>
                            <li id="score1" class="list-group-item">(score)</li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li id="answer2" class="list-group-item">réponse</li>
                            <li id="score2" class="list-group-item">(score)</li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li id="answer3" class="list-group-item">réponse</li>
                            <li id="score3" class="list-group-item">(score)</li>
                        </ul>
                    </ul>

                </div>
                <button type="button" class="btn btn-success" id="seeAllAnswers">Voir toutes les réponses possibles...</button>
            </div>
        </div>
    </div>
<!--Fin Champ des réponses et calcul des points-->

</div>

<!--Footer-->
<?php require ('require/footer.php'); ?>
<!--Fin Footer-->

<script src="js/lodash.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="js/wordsFunctions.js"></script>

</body>
</html>