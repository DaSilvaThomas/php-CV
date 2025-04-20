<?php
    // Informations pour la connexion - À modifier selon votre configuration locale
    $host = 'localhost';
    $dbname = 'phpdb';
    $user = 'postgres';
    $password = 'votre_mot_de_passe';  // Remplacer par votre mot de passe PostgreSQL

    // Connexion à la base de données
    $conn_string = "host=$host dbname=$dbname user=$user password=$password";
    $conn = pg_connect($conn_string);

    if (!($conn)) {
        echo "Erreur de connexion";
    };

    // ############################################################################################
    
    // HEADER requêtes
    $query = "SELECT nom FROM header WHERE identifiant = 1";
    $result = pg_query($conn, $query);
    $nom = pg_fetch_result($result, 0, 'nom');

    $query = "SELECT age FROM header WHERE identifiant = 1";
    $result = pg_query($conn, $query);
    $age = pg_fetch_result($result, 0, 'age');

    // OBJECTIFS requête
    $query = "SELECT objectifs FROM objectifs WHERE identifiant = 1";
    $result = pg_query($conn, $query);
    $objectifs = pg_fetch_result($result, 0, 'objectifs');

    // EXPERIENCES requêtes
    $query = "SELECT bold1 FROM experiences WHERE identifiant = 1";
    $result = pg_query($conn, $query);
    $EXP_bold1 = pg_fetch_result($result, 0, 'bold1');

    $query = "SELECT liste1 FROM experiences WHERE identifiant = 1";
    $result = pg_query($conn, $query);
    $EXP_liste1 = pg_fetch_result($result, 0, 'liste1');

    $query = "SELECT bold2 FROM experiences WHERE identifiant = 1";
    $result = pg_query($conn, $query);
    $EXP_bold2 = pg_fetch_result($result, 0, 'bold2');

    $query = "SELECT liste2 FROM experiences WHERE identifiant = 1";
    $result = pg_query($conn, $query);
    $EXP_liste2 = pg_fetch_result($result, 0, 'liste2');

    $query = "SELECT bold3 FROM experiences WHERE identifiant = 1";
    $result = pg_query($conn, $query);
    $EXP_bold3 = pg_fetch_result($result, 0, 'bold3');

    $query = "SELECT liste3 FROM experiences WHERE identifiant = 1";
    $result = pg_query($conn, $query);
    $EXP_liste3 = pg_fetch_result($result, 0, 'liste3');

    // FORMATIONS requêtes
    $query = "SELECT bold1 FROM formations WHERE identifiant = 1";
    $result = pg_query($conn, $query);
    $FOR_bold1 = pg_fetch_result($result, 0, 'bold1');

    $query = "SELECT liste1 FROM formations WHERE identifiant = 1";
    $result = pg_query($conn, $query);
    $FOR_liste1 = pg_fetch_result($result, 0, 'liste1');

    $query = "SELECT bold2 FROM formations WHERE identifiant = 1";
    $result = pg_query($conn, $query);
    $FOR_bold2 = pg_fetch_result($result, 0, 'bold2');

    $query = "SELECT liste2 FROM formations WHERE identifiant = 1";
    $result = pg_query($conn, $query);
    $FOR_liste2 = pg_fetch_result($result, 0, 'liste2');

    $query = "SELECT bold3 FROM formations WHERE identifiant = 1";
    $result = pg_query($conn, $query);
    $FOR_bold3 = pg_fetch_result($result, 0, 'bold3');

    $query = "SELECT liste3 FROM formations WHERE identifiant = 1";
    $result = pg_query($conn, $query);
    $FOR_liste3 = pg_fetch_result($result, 0, 'liste3');

    // LANGUES requêtes
    $query = "SELECT langue1 FROM langues WHERE identifiant = 1";
    $result = pg_query($conn, $query);
    $langue1 = pg_fetch_result($result, 0, 'langue1');

    $query = "SELECT langue2 FROM langues WHERE identifiant = 1";
    $result = pg_query($conn, $query);
    $langue2 = pg_fetch_result($result, 0, 'langue2');

    // CONTACTS requêtes
    $query = "SELECT email FROM contacts WHERE identifiant = 1";
    $result = pg_query($conn, $query);
    $email = pg_fetch_result($result, 0, 'email');

    $query = "SELECT telephone FROM contacts WHERE identifiant = 1";
    $result = pg_query($conn, $query);
    $telephone = pg_fetch_result($result, 0, 'telephone');

    $query = "SELECT adresse FROM contacts WHERE identifiant = 1";
    $result = pg_query($conn, $query);
    $adresse = pg_fetch_result($result, 0, 'adresse');

    // ############################################################################################

    // OBJECTIFS modification
    // On vérifie si le fichier db.php à reçu une requête AJAX avec isset() 
    if (isset($_POST['OBJ'])) {  // $_POST['OBJ'] = pointe vers la valeur (le texte modifié) qui à pour clé "OBJ"
        $contenu_modifier = $_POST['OBJ'];  // Si isset() détecte la clé, on la met la valeur associé dans la variable "$contenu_modifier"
        $query = "UPDATE objectifs SET objectifs = $1 WHERE identifiant = 1";  // On met à jour la table objectifs avec le nouveau texte modifié
        pg_query_params($conn, $query, array($contenu_modifier));  // $1 = array($contenu_modifier)
    }

    // NOM modification
    if (isset($_POST['NOM'])) {
        $contenu_modifier = $_POST['NOM'];
        $query = "UPDATE header SET nom = $1 WHERE identifiant = 1";
        pg_query_params($conn, $query, array($contenu_modifier));
    }

    // AGE modification
    if (isset($_POST['AGE'])) {
        $contenu_modifier = $_POST['AGE'];
        $query = "UPDATE header SET age = $1 WHERE identifiant = 1";
        pg_query_params($conn, $query, array($contenu_modifier));
    }

    // LANGUE 1 modification
    if (isset($_POST['LA1'])) {
        $contenu_modifier = $_POST['LA1'];
        $query = "UPDATE langues SET langue1 = $1 WHERE identifiant = 1";
        pg_query_params($conn, $query, array($contenu_modifier));
    }

    // LANGUE 2 modification
    if (isset($_POST['LA2'])) {
        $contenu_modifier = $_POST['LA2'];
        $query = "UPDATE langues SET langue2 = $1 WHERE identifiant = 1";
        pg_query_params($conn, $query, array($contenu_modifier));
    }

    // EMAIL modification
    if (isset($_POST['EMA'])) {
        $contenu_modifier = $_POST['EMA'];
        $query = "UPDATE contacts SET email = $1 WHERE identifiant = 1";
        pg_query_params($conn, $query, array($contenu_modifier));
    }

    // TELEPHONE modification
    if (isset($_POST['TEL'])) {
        $contenu_modifier = $_POST['TEL'];
        $query = "UPDATE contacts SET telephone = $1 WHERE identifiant = 1";
        pg_query_params($conn, $query, array($contenu_modifier));
    }

    // ADRESSE modification
    if (isset($_POST['ADR'])) {
        $contenu_modifier = $_POST['ADR'];
        $query = "UPDATE contacts SET adresse = $1 WHERE identifiant = 1";
        pg_query_params($conn, $query, array($contenu_modifier));
    }

    // EXPERIENCE BOLD1 modification
    if (isset($_POST['EB1'])) {
        $contenu_modifier = $_POST['EB1'];
        $query = "UPDATE experiences SET bold1 = $1 WHERE identifiant = 1";
        pg_query_params($conn, $query, array($contenu_modifier));
    }

    // EXPERIENCE BOLD2 modification
    if (isset($_POST['EB2'])) {
        $contenu_modifier = $_POST['EB2'];
        $query = "UPDATE experiences SET bold2 = $1 WHERE identifiant = 1";
        pg_query_params($conn, $query, array($contenu_modifier));
    }

    // EXPERIENCE BOLD3 modification
    if (isset($_POST['EB3'])) {
        $contenu_modifier = $_POST['EB3'];
        $query = "UPDATE experiences SET bold3 = $1 WHERE identifiant = 1";
        pg_query_params($conn, $query, array($contenu_modifier));
    }

    // EXPERIENCE LISTE1 modification
    if (isset($_POST['EL1'])) {
        $contenu_modifier = $_POST['EL1'];
        $query = "UPDATE experiences SET liste1 = $1 WHERE identifiant = 1";
        pg_query_params($conn, $query, array($contenu_modifier));
    }

    // EXPERIENCE LISTE2 modification
    if (isset($_POST['EL2'])) {
        $contenu_modifier = $_POST['EL2'];
        $query = "UPDATE experiences SET liste2 = $1 WHERE identifiant = 1";
        pg_query_params($conn, $query, array($contenu_modifier));
    }

    // EXPERIENCE LISTE3 modification
    if (isset($_POST['EL3'])) {
        $contenu_modifier = $_POST['EL3'];
        $query = "UPDATE experiences SET liste3 = $1 WHERE identifiant = 1";
        pg_query_params($conn, $query, array($contenu_modifier));
    }

    // FORMATION BOLD1 modification
    if (isset($_POST['FB1'])) {
        $contenu_modifier = $_POST['FB1'];
        $query = "UPDATE formations SET bold1 = $1 WHERE identifiant = 1";
        pg_query_params($conn, $query, array($contenu_modifier));
    }

    // FORMATION BOLD2 modification
    if (isset($_POST['FB2'])) {
        $contenu_modifier = $_POST['FB2'];
        $query = "UPDATE formations SET bold2 = $1 WHERE identifiant = 1";
        pg_query_params($conn, $query, array($contenu_modifier));
    }

    // FORMATION BOLD3 modification
    if (isset($_POST['FB3'])) {
        $contenu_modifier = $_POST['FB3'];
        $query = "UPDATE formations SET bold3 = $1 WHERE identifiant = 1";
        pg_query_params($conn, $query, array($contenu_modifier));
    }

    // FORMATION LISTE1 modification
    if (isset($_POST['FL1'])) {
        $contenu_modifier = $_POST['FL1'];
        $query = "UPDATE formations SET liste1 = $1 WHERE identifiant = 1";
        pg_query_params($conn, $query, array($contenu_modifier));
    }

    // FORMATION LISTE2 modification
    if (isset($_POST['FL2'])) {
        $contenu_modifier = $_POST['FL2'];
        $query = "UPDATE formations SET liste2 = $1 WHERE identifiant = 1";
        pg_query_params($conn, $query, array($contenu_modifier));
    }

    // FORMATION LISTE3 modification
    if (isset($_POST['FL3'])) {
        $contenu_modifier = $_POST['FL3'];
        $query = "UPDATE formations SET liste3 = $1 WHERE identifiant = 1";
        pg_query_params($conn, $query, array($contenu_modifier));
    }
?>