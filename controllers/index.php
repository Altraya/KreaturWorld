<?php
    require_once("./views/GeneralView.class.php");
    require_once("./views/IndexView.class.php");
    
    $IndexView = new IndexView();
    $viewGeneral = new GeneralView();
    
    $IndexView->header();
    $IndexView->content();
    $viewGeneral->endPage(); 

?>