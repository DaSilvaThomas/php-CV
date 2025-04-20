<?php
    require 'db.php'; // Liens vers le fichier php pour la connexion à la base de données et les requêtes
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="feuilleA4">

        <header>
            <div class="cercleRouge">
                <img class="portrait" src="img/portrait.png" alt="auto portrait">
            </div>
            <div class="headerCol">
                <h1 class="nomPrenom">
                    <div id="NOM" class="element_modifiable"><?php echo $nom; ?></div>
                </h1>
                <h4 id="AGE" class="element_modifiable sexeAge"><?php echo $age; ?></h4>
            </div>
        </header>

        <content>
            <div class="col-1">
                <div class="objectifs">
                    <h3>OBJECTIFS</h3>
                    <div class="bandeRouge"></div>
                    <p>
                        <div id="OBJ" class="element_modifiable"><?php echo $objectifs; ?></div>
                    </p>
                </div>
                <div class="competences">
                    <h3>COMPETENCES</h3>
                    <div class="bandeRouge"></div>
                    <p class="titreRouge">INFORMATIQUE</p>
                    <p>Python</p>
                    <div class="containerCarreRouge">
                        <div class="carreRouge full"></div>
                        <div class="carreRouge full"></div>
                        <div class="carreRouge"></div>
                        <div class="carreRouge"></div>
                    </div>
                    <p>Java</p>
                    <div class="containerCarreRouge">
                        <div class="carreRouge full"></div>
                        <div class="carreRouge full"></div>
                        <div class="carreRouge"></div>
                        <div class="carreRouge"></div>
                    </div>
                    <p>HTML/CSS</p>
                    <div class="containerCarreRouge">
                        <div class="carreRouge full"></div>
                        <div class="carreRouge full"></div>
                        <div class="carreRouge full"></div>
                        <div class="carreRouge"></div>
                    </div>
                    <p>JavaScript</p>
                    <div class="containerCarreRouge">
                        <div class="carreRouge full"></div>
                        <div class="carreRouge full"></div>
                        <div class="carreRouge full"></div>
                        <div class="carreRouge"></div>
                    </div>
                    <p>PHP</p>
                    <div class="containerCarreRouge">
                        <div class="carreRouge full"></div>
                        <div class="carreRouge full"></div>
                        <div class="carreRouge"></div>
                        <div class="carreRouge"></div>
                    </div>
                    <p>Bash</p>
                    <div class="containerCarreRouge">
                        <div class="carreRouge full"></div>
                        <div class="carreRouge full"></div>
                        <div class="carreRouge full"></div>
                        <div class="carreRouge"></div>
                    </div>
                    <p>SQL</p>
                    <div class="containerCarreRouge">
                        <div class="carreRouge full"></div>
                        <div class="carreRouge full"></div>
                        <div class="carreRouge"></div>
                        <div class="carreRouge"></div>
                    </div>
                    <p class="titreRouge langues">LANGUES</p>
                    <ul class="listes">
                        <li id="LA1" class="element_modifiable"><?php echo $langue1; ?></li>
                        <li id="LA2" class="element_modifiable"><?php echo $langue2; ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-2">
                <div class="experience">
                    <h3>EXPERIENCES</h3>
                    <div class="bandeRouge"></div>
                    <p id="EB1" class="element_modifiable bold"><?php echo $EXP_bold1; ?></p>
                    <ul class="listes">
                        <li id="EL1" class="element_modifiable"><?php echo $EXP_liste1; ?></li>
                    </ul>
                    <p id="EB2" class="element_modifiable bold"><?php echo $EXP_bold2; ?></p>
                    <ul class="listes">
                        <li id="EL2" class="element_modifiable"><?php echo $EXP_liste2; ?></li>
                    </ul>
                    <p id="EB3" class="element_modifiable bold"><?php echo $EXP_bold3; ?></p>
                    <ul class="listes">
                        <li id="EL3" class="element_modifiable"><?php echo $EXP_liste3; ?></li>
                    </ul>
                </div>
                <div class="formations">
                    <h3>FORMATIONS</h3>
                    <div class="bandeRouge"></div>
                    <p id="FB1" class="element_modifiable bold"><?php echo $FOR_bold1; ?></p>
                    <ul class="listes">
                        <li id="FL1" class="element_modifiable"><?php echo $FOR_liste1; ?></li>
                    </ul>
                    <p id="FB2" class="element_modifiable bold"><?php echo $FOR_bold2; ?></p>
                    <ul class="listes">
                        <li id="FL2" class="element_modifiable"><?php echo $FOR_liste2; ?></li>
                    </ul>
                    <p id="FB3" class="element_modifiable bold"><?php echo $FOR_bold3; ?></p>
                    <ul class="listes">
                        <li id="FL3" class="element_modifiable"><?php echo $FOR_liste3; ?></li>
                    </ul>
                </div>
            </div>
        </content>

        <footer>
            <div class="footerCol">
                <img src="img/email.png" alt="logo d'email">
                <p id="EMA" class="element_modifiable"><?php echo $email; ?></p>
            </div>
            <div class="footerCol">
                <img src="img/tel.png" alt="logo de téléphone">
                <p id="TEL" class="element_modifiable"><?php echo $telephone; ?></p>
            </div>
            <div class="footerCol">
                <img src="img/maison.png" alt="logo de maison">
                <p id="ADR" class="element_modifiable"><?php echo $adresse; ?></p>
            </div>
        </footer>

    </div>
    <div id="fenetre_modification" class="fenetre_modif">
        <h2>Modifier le texte :</h2>
        <textarea id="textarea" placeholder="Tapez votre texte ici." maxlength="305"></textarea>
        <div class="btn_container">
            <button id="btn_sauvegarde" class="btn btn_sauvegarde">Sauvegarder</button>
            <button id="btn_annuler" class="btn btn_annuler">Annuler</button>
        </div>
    </div>
    <!-- Liens vers le fichier js -->
    <script src="script.js"></script>
</body>
</html>