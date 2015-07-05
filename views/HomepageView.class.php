<?php
/* Vue page Accueil */
class HomepageView{
    
    public function __construct(){
    }
    
    /* Show the content of the homepage */
    public function content(){
        $html = '';
        $html.= '

        <div class="container">     
            <div class="row">
                <div <div class="small-12 columns">             
                    <img src="img/titre.png" alt="logo" id="logo" >
                </div>
            </div>
            <div class="row right">
                <div class="small-4 columns"></div>
                <div class="small-4 columns"></div>
                <div class="small-4 columns">
                
                    <form action="connexion.php" role="form" method="post">   
                        
                        <div class="form-group" id="FormCo">    

                            <div class="text-center">
                                <h2 class="grey">Connectez-vous</h2>
                            </div>

                            <div class="small-12 columns">
                                <label for="inputPseudoConnexion" class="col-md-12 control-label">Pseudo :</label>
                                <input type="text" class="form-control" id="inputPseudoConnexion" name="pseudo">
                            </div>
                            
                            <div class="small-12 columns">
                                <label for="inputPasswordConnexion" class="col-md-12 control-label">Mot de passe :</label>
                                <input type="Password" class="form-control" id="inputPasswordConnexion" name="password">
                            </div>

                            <span class="input-group-btn">
                                <div class="text-center">
                                    <button class="btn btn-default" type="submit"  name="buttonConnexion" value="buttonConnexion">Connexion</button>
                                </div>
                            </span>
                        </div>      
                    </form>

                    
                    <form action="inscription.php" role="form" method="post">

                        <div class="form-group" id="FormInscri">

                            <div class="text-center">
                                <h2 class="grey">Inscrivez-vous</h2>
                            </div>  

                            <div class="small-12 columns">
                                <img id="krea" src="./img/kreaturs/DragonJaune.png"
                            </div>
                            
                            <div class="small-12 columns">
                                <label for="inputKreaturName" class="col-md-12 control-label">Nom Kreatur :</label>
                                <input type="text" class="form-control" id="inputKreaturName" name="fNomKrea">
                            </div>

                            <div class="small-12 columns space">
                                <label for="kreaturName">Kreatur:</label>
                                <select class="form-control" id="kreaturName">
                                    <option value="Dragon">Dragon</option>
                                    <option value="Leviathan">Leviathan</option>
                                    <option value="Hydre">Hydre</option>
                                </select>
                            </div>
                       

                            <div class="small-12 columns space">
                                <label for="color">Couleur:</label>
                                <select class="form-control" id="color">
                                    <option value="Bleu">Bleu</option>
                                    <option value="Cyan">Cyan</option>
                                    <option value="Jaune">Jaune</option>
                                    <option value="Rouge">Rouge</option>
                                    <option value="Rose">Rose</option>
                                    <option value="Vert">Vert</option>
                                    <option value="Violet">Violet</option>
                                </select>
                            </div>

                            <div class="small-12 columns">
                                <div class="text-center">
                                    <input type="radio" name="sex" value="male"><label class="radio-inline">Male</label>
                                    <input type="radio" name="sex" value="femelle"><label class="radio-inline">Femelle</label>
                                </div>
                            </div>

                            <span class="input-group-btn">
                                <div class="text-center">
                                    <button class="btn btn-default" type="submit" value="Inscription">Inscription</button>
                                </div>
                            </span>

                        </div>                  
                    </form>
                    
                </div>  
            </div>
        </div>
        <script type="text/javascript" src="js/changeKreaOption.js"></script>

        ';
        echo($html);
    }
}
?>