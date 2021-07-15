
<!-- ----- debut ControllerVaccin -->
<?php
require_once '../model/ModelCentre.php';

class ControllerCentre {
    // --- page d'acceuil
    public static function vaccinationAccueil() {
        include 'config.php';
        $vue = $root . '/app/view/viewVaccinationAccueil.php';
        if (DEBUG)
            echo ("ControllerVaccination : vaccinationAccueil : vue = $vue");
        require ($vue);
    }

    // --- Liste des centres
    public static function centreReadAll() {
        $results = ModelCentre::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/centre/viewAll.php';
        if (DEBUG)
            echo ("ControllerCentre : centreReadAll : vue = $vue");
        require ($vue);
    }

    // Affiche le formulaire de creation d'un producteur
    public static function centreCreate() {
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/centre/viewInsert.php';
        require ($vue);
    }

    // La clé est gérée par le systeme et pas par l'internaute
    public static function centreCreated() {
        // ajouter une validation des informations du formulaire
        $results = ModelCentre::insert(htmlspecialchars($_GET['label']), htmlspecialchars($_GET['adresse']));
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/centre/viewInserted.php';
        require ($vue);
    }
}
?>
<!-- ----- fin ControllerVaccin -->

