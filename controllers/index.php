<?php
    require_once("./views/GeneralView.class.php");
    require_once("./views/HomepageView.class.php");
    
    $viewHomepage = new HomepageView();
    $viewGeneral = new GeneralView();
    
    $viewHomepage->header();
    $viewHomepage->content();
    $viewGeneral->endPage(); 

?>