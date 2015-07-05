<?php
    require_once("./views/GeneralView.class.php");
    require_once("./views/InscriptionView.class.php");
    
    $view = new InscriptionView();
    $viewGeneral = new GeneralView();
    
    //include specific header and not the general just for the homepage
    $view->header("Accueil - Kreatur World");
    $view->homePageContent();
    $viewGeneral->endPage(); 

?>