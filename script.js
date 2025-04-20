document.addEventListener('DOMContentLoaded', function() {
    
    // On récupère les éléments à partir de leurs id
    const F_fenetre = document.getElementById('fenetre_modification');
    const F_textarea = document.getElementById('textarea');
    const F_btn_sauvegarde = document.getElementById('btn_sauvegarde');
    const F_btn_annuler = document.getElementById('btn_annuler');
    let T_element_id = null;
    let T_element_modifiable = null;
    let T_element_modifiable_id = null;

    // Si l'element cliqué est un element modifiable, on affiche la fenêtre de modification
    document.addEventListener('click', function(event) {
        const T_element = event.target;  // event.target = récupère l'élément sur lequel on a cliqué
        T_element_id = T_element.id;  // On récupère l'id de l'élément cliqué
        
        // Liste des id des élements modifiables
        const T_element_liste_modifiable = ["OBJ", "NOM", "AGE", "LA1", "LA2", "EMA", "TEL", "ADR", "EB1", "EB2", "EB3", "EL1", "EL2", "EL3", "FB1", "FB2", "FB3", "FL1", "FL2", "FL3"];
        
        if (T_element_liste_modifiable.includes(T_element_id)) {
            T_element_modifiable_id = T_element_id;  // On place l'id dans une nouvelle variable, car T_element_id change constamment de valeur
            T_element_modifiable = document.getElementById(T_element_id);
            F_textarea.value = T_element_modifiable.textContent;  // On met le texte sur lequel on cliqué dans le textarea
            F_fenetre.style.display = 'flex';  // On affiche la fenêtre de modification
        }
    });
        
    // On ferme la fenêtre modifiable si le boutton annuler est cliqué
    F_btn_annuler.addEventListener('click', function() {
        F_fenetre.style.display = 'none';
        F_textarea.value = "";  // On efface le texte dans le textarea
    });

    // Si le boutton sauvegarder est cliqué, on envoie les données au serveur et on ferme la fenêtre de modification
    F_btn_sauvegarde.addEventListener('click', function() {
        let F_textarea_nouveau_contenu = "";

        // Si le nouveau contenu est vide, on affiche [vide], sinon, on affiche le nouveau contenu
        if (F_textarea.value === "") {
            F_textarea_nouveau_contenu = "[vide]";
        } else {
            F_textarea_nouveau_contenu = F_textarea.value;  // On récupère le nouveau contenu du textarea
        };
        
        // On prépare la requête ajax pour communiquer avec le serveur (fichier db.php)
        const ajax = new XMLHttpRequest();
        ajax.open('POST', 'db.php', true);
        ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        // On envoie le nouveau texte au serveur sous forme de "clé=valeur"
        ajax.send(T_element_modifiable_id + '=' + encodeURIComponent(F_textarea_nouveau_contenu));

        T_element_modifiable.textContent = F_textarea_nouveau_contenu;  // On remplace l'ancien texte de l'élément cliqué par le nouveau
        F_fenetre.style.display = 'none';
        F_textarea.value = "";
    });
});