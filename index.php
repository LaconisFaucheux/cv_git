<?php
declare(strict_types=1);
session_start();
$_SESSION['answer'] = rand(0, 1000);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Nicolas FROTEY - Développeur Web</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link id="css" href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Nicolas FROTEY</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Mon Projet</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Expérience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Formation</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Compétences</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Soft Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#loisirs">Loisirs</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="dl/CV.pdf" download="CV.pdf">Télécharger en PDF</a></li>
                    <li class="nav-item">
                        <div class="colorSquares">                
                            <button type="button" id="styles" class="colorSquare border border-dark border-2 rounded-circle classic active"></button>
                            <button type="button" id="green" class="colorSquare border border-dark border-2 rounded-circle green"></button>
                            <button type="button" id="blue" class="colorSquare border border-dark border-2 rounded-circle blue"></button>
                            <button type="button" id="yellow" class="colorSquare border border-dark border-2 rounded-circle yellow"></button>
                            <button type="button" id="darkMode" class="colorSquare border border-dark border-2 rounded-circle darkMode"></button>
                        </div>
                    </li>
                </ul>
            </div>
            
        </nav>
       
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Nicolas
                        <span class="text-primary">Frotey</span>
                    </h1>
                    <h2>Développeur Web (stage)</h2>
                    <div class="subheading mb-5">
                        17770 ECOYEUX · 06.09.01.37.10 ·
                        <a href="mailto:name@email.com">nicolas.frotey@gmail.com</a>
                    </div>
                    <p class="lead mb-5">En reconversion, je souhaite effectuer un stage (non rémunéré 
                        dont les modalités flexibles sont à définir avec l'entreprise d'accueil)  pour 
                        mettre en application mes connaissances théoriques, apprendre sur le terrain et 
                        gagner  en expérience. Mes compétences, pour l'heure encore restreintes, évolueront 
                        au fil de mes cours, et me permettront de devenir un réel atout, éventuellement 
                        sur un plus long terme qu'un simple stage. D'autres réalisations seront visibles sur mon Github ou sur
                        <a href="realisations/jeu.php">cette page</a>. <br>
                        
                        J’ai également pour projet de suivre une formation en alternance sur un an (en Java, PHP ou C# par exemple) 
                        suite à l’obtention de mon Graduate Développeur web full stack et mobile chez Studi.</p>
                    
                    <p class="lead mb-5"> Ce site a été conçu à partir d'un template Bootstrap 5 
                        consultable <a href="https://startbootstrap.com/theme/resume" title="Adresse du template">ici</a>, 
                        modifié pour convenir à mes besoins. 
                        D'autres améliorations seront ajoutées au fil de mon apprentissage. </p>
                    <p class="noteDeVersion"><strong>Note de version (29/08/2022):</strong> <br>Correction de fautes de frappe, ajout du choix de couleur 
                        (multiplication de fichier CSS et écouteur d'évènements javascript).<br>
                        Correction d'un bug qui affichait le texte du menu en noir pour tous les modes après le passage par le mode jaune.</p>
                        </p>
                        
                    <div class="social-icons">
                        <a class="social-icon" title="Mon Compte LinkedIn" href="https://fr.linkedin.com/in/nicolas-frotey-70683a4a/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" title="Ma page GitHub" href="https://github.com/LaconisFaucheux"><i class="fab fa-github"></i></a>
                        <a class="social-icon" title="Ma Page Facebook" href="https://www.facebook.com/profile.php?id=100084734667011"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Expérience</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Concepteur vendeur de cuisines et aménagements</h3>
                            <div class="subheading mb-3">Cuisinella Royan</div>
                            <p>Analyse des besoins clients, force de vente, conception, dessin et suivi 
                                de commande sont les principales missions du concepteur vendeur. Il est impératif
                                de savoir travailler avec des contraintes importantes (l'espace entre 
                                deux murs a tendance à rester fixe), et de les mettre en adéquation avec 
                                les envies et les besoins du client, parfois au prix de quelques sacrifices 
                                qu'il convient d'expliquer et d'argumenter...</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Mai 2021 - Janvier 2022</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Responsable Jeux Vidéos & livres</h3>
                            <div class="subheading mb-3">Easy Cash Saintes</div>
                            <p>Le commerce d'occasion est un domaine très particuiler qui suit ses propres 
                                règles. De l'achat au particulier à la vente de nombreuses étapes sont nécessaires : 
                                l'expertise du produit, la remise en état éventuelle, la détermination du prix et 
                                la mise en rayon, le conseil et parfois même, la démonstration ! toutes 
                                ces missions incombent au responsable de rayon chez Easy Cash.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Juillet 2020 - Mai 2021</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Concepteur vendeur de cuisines et aménagements</h3>
                            <div class="subheading mb-3">Schmidt Saintes</div>
                            <p>Schmidt et Cuisinella sont deux enseignes de Schmidt Group, et le métier, 
                                d'une enseigne à une autre, est sensiblement le même. La clientèle cible 
                                étant différente, la force de vente prend un ton plus solennel chez Schmidt. .</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Août 2019 - Juillet 2020</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Responsable Jeux vidéos & électroménager</h3>
                            <div class="subheading mb-3">Easy Cash Saintes</div>
                            <p>Quel que soit le rayon géré, les missions restent particulièrement similaires, 
                                et des enseignes comme Easy Cash mettent fortement l'accent sur la polyvalence de leurs collaborateurs.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Mars 2017 - Août 2019</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Responsable de Rayon EMRTV & Cuisines</h3>
                            <div class="subheading mb-3">Conforama Rochefort</div>
                            <p>Avec une équipe de 4 vendeurs ayant chacun leurs spécialités, ma mission 
                                était d'assurer la rentabilité du rayon EMRTV (ElectroMénager, Radio, TV, 
                                mais aussi informatique et téléphonie) & Cuisines, en appliquant les directives 
                                du siège, en motivant et coordinant les vendeurs.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Septembre 2015 - Janvier 2017</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Responsable de Rayon EMRTV & Cuisines (stagiaire)</h3>
                            <div class="subheading mb-3">Conforama Rochefort</div>
                            <p>Lors de mon alternance en licence pro Commerce option Management de rayon, 
                                j'ai pu être chef de rayon EMRTV & Cuisines stagiaire au Conforama de Dijon. 
                                Si les missions sont les mêmes qu'un titulaire, j'étais malgré tout beaucoup 
                                plus présent sur la surface de vente.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Septembre 2014 - Septembre 2015</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Formation</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">
                                <span class="text-primary">(En cours) </span>
                                Studi (plateforme de formation à distance)</h3>
                            <div class="subheading mb-3">Graduate Développeur Web Full stack et Mobile (Kotlin)</div>
                            <h5>Compétences développées:</h5>
                                <ul class="fa-ul mb-0">
                                    <li class="mb-2">
                                        <span class="fa-li"><i class="fas fa-check"></i></span>
                                        <strong>Front End</strong> HTML5, CSS3, Javascript, React.js, Wordpress.
                                    </li>
                                    <li class="mb-2">
                                        <span class="fa-li"><i class="fas fa-check"></i></span>
                                        <strong>Back End</strong> PHP, Symfony, SQL, React Native
                                    </li>
                                    <li>
                                        <span class="fa-li"><i class="fas fa-check"></i></span>
                                        <strong>Développement Mobile</strong> Kotlin
                                    </li>
                                </ul>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Juin 2022 - Juin 2023</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Schmidt Academy</h3>
                            <div class="subheading mb-3">CQP concepteur vendeur cuisine & aménagement</div>
                            <h5>Compétences développées:</h5>
                                <ul class="fa-ul mb-0">
                                    <li class="mb-2">
                                        <span class="fa-li"><i class="fas fa-check"></i></span>
                                        <strong>Analyse des besoins client</strong>
                                    </li>
                                    <li class="mb-2">
                                        <span class="fa-li"><i class="fas fa-check"></i></span>
                                        <strong>Respect des normes de sécurite</strong> Electricité, plomberie, portée et résistance des matériaux
                                    </li>
                                    <li>
                                        <span class="fa-li"><i class="fas fa-check"></i></span>
                                        <strong>Conception et vente de l'aménagement</strong> 
                                    </li>
                                </ul>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Septembre 2019 - Février 2020</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Distrisup Dijon</h3>
                            <div class="subheading mb-3">Licence Pro Commerce option Management de rayon</div>
                            <h5>Compétences développées:</h5>
                                <ul class="fa-ul mb-0">
                                    <li class="mb-2">
                                        <span class="fa-li"><i class="fas fa-check"></i></span>
                                        <strong>Management</strong>
                                    </li>
                                    <li class="mb-2">
                                        <span class="fa-li"><i class="fas fa-check"></i></span>
                                        <strong>Marketing & Merchandising</strong>
                                    </li>
                                    <li>
                                        <span class="fa-li"><i class="fas fa-check"></i></span>
                                        <strong>Force de vente</strong>
                                    </li>
                                </ul>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Septembre 2014 - Septembre 2015</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">IUT Dijon</h3>
                            <div class="subheading mb-3">DUT <span title="Services et Réseaux De Communication">SRC (Services et Réseaux De Communication)</span></div>
                            <h5>Compétences développées:</h5>
                                <ul class="fa-ul mb-0">
                                    <li class="mb-2">
                                        <span class="fa-li"><i class="fas fa-check"></i></span>
                                        <strong>Théorie du Signal et Réseaux</strong>
                                    </li>
                                    <li class="mb-2">
                                        <span class="fa-li"><i class="fas fa-check"></i></span>
                                        <strong>Conception de médias numériques</strong> Vidéos, sites, DVD...
                                    </li>
                                    <li>
                                        <span class="fa-li"><i class="fas fa-check"></i></span>
                                        <strong>Communication numérique</strong>
                                    </li>
                                </ul>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Septembre 2012 - Juillet 2014</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Compétences</h2>
                    <div class="subheading mb-3">Langues et langages</div>
                    <!-- Barres de chargement-->
                    <!---ligne 1-->
                    <div class="mb-5">
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <div class="progress-wrap">
                                    <h3>HTML5 <i class="fa-brands fa-html5"></i></h3>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60"
                                        aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                        <span>60%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="progress-wrap">
                                    <h3>CSS3 <i class="fa-brands fa-css3-alt"></i></h3>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="40"
                                        aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                        <span>40%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="progress-wrap">
                                    <h3>Javascript ES6+ <i class="fa-brands fa-js"></i></h3>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width:20%">
                                        <span>20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--ligne 2-->
                        <div class="row mb-3">
                            <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>Python <i class="fa-brands fa-python"></i></h3>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="10"
                                        aria-valuemin="0" aria-valuemax="100" style="width:10%">
                                        <span>10%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>Bootstrap <i class="fa-brands fa-bootstrap"></i></h3>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                        <span>50%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>Anglais<i class="fa-solid fa-flag-usa"></i></h3>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90"
                                        aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                        <span>90%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin barres de chargement-->
                    <div class="subheading mb-3">Outils utilisés</div>
                        <ul class="fa-ul mb-0">
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                Suite Microsoft Office
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                Visual Studio Code
                            </li>
                        </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Soft Skills-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Soft Skills</h2>
                        <ul class="fa-ul mb-0">
                            <li class="mb-3">
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                <strong>Curiosité éclectique:</strong> j'aime savoir comment les choses marchent, découvrir 
                                et apprendre de nouvelles choses quel que soit le domaine.
                            </li>
                            <li class="mb-3">
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                <strong>Grande adaptabilité:</strong> ayant eu une jeunesse quasi itinérante, je suis aujourd'hui 
                                capable de m'adapter avec aisance à de nombreuses situations, configurations, modes de travail. 
                                Avec deux enfants en bas-âge, ces capacités ne sont que renforcées !
                            </li>
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                <strong>Habitude du travail en groupe:</strong> La totalité de mes expériences professionnelles, de Mc Donald's à Cuisinella, impliquent un important travail de groupe.
                            </li>
                        </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Hobbies-->
            <section class="resume-section" id="loisirs">
                <div class="resume-section-content">
                    <h2 class="mb-5">Loisirs</h2>
                    <dl class="fa-ul mb-0">
                        <dt>
                            <i class="fas fa-guitar"></i>
                            Musique Maestro! 
                            <dd>Grand amateur de musique metal, d'Ozzy Osbourne à Cradle of Filth en 
                                passant par Rammstein ou Sòlstafir, j'aime écouter, partager, découvrir 
                                de nouveaux groupes, styles, sons... Dernière découverte, Alcest! 
                            </dd>
                        </dt>
                        <dt>
                            <i class="fa-solid fa-book-open"></i>
                            Littérature 
                            <dd>La SF et la fantasy sont mes styles de littératures favoris, avec des 
                                idoles aux noms légendaires comme Isaac Asimov, Frank Herbert ou JRR Tolkien. 
                                Quelle évasion ! J'apprécie également les romans historiques comme ceux de 
                                Max Gallo, ou plus particulièrement ceux de Christian Jacq, traitant d'une de 
                                mes périodes favorites de l'histoire, l'Antiquité Egyptienne.
                            </dd>
                        </dt>
                        <dt>
                            <i class="fa-solid fa-gamepad"></i>
                            Jeux Vidéo
                            <dd>Média incontournable aujourd'hui, parfois désigné comme "le Huitième Art", 
                                le jeu vidéo est une distraction efficace. J'ai personnellement une préférence 
                                pour les RPG, les jeux avec une histoire riche et émouvante. Par exemple, 
                                The Legend of Zelda, Metal Gear Solid, The Witcher, Assassin's Creed ou encore Mass Effect...
                            </dd>
                        </dt>
                        <dt>
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                            Bricolage
                            <dd>Chanceux acquéreur d'une maison de 1850 il y a deux ans, je m'emploie 
                                avec ma compagne à rénover celle-ci; placo, peintures, isolation, électricité, revêtement de sol... 
                                Les surprises sont fréquentes, et toujours l'occasion d'apprendre !
                            </dd>
                        </dt>
                        <dt>
                            <i class="fa-solid fa-leaf"></i>
                            Jardinage
                            <dd>Plutôt citadin à l'origine, j'ai pu découvrir les joies du potager avec 
                                mon premier jardin... Tomates, framboises, fraises, concombres, aubergines... 
                                Autant de fruits et légumes du jardin qu'il est agréable à la fois de ramasser en 
                                famille et de déguster aux repas ! 
                            </dd>
                        </dt>
                        
                    </dl>
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!--script changement de couleurs-->
        <script src="js/colorMods.js"></script>
    </body>
</html>