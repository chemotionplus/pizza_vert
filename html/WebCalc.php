<?php
//Question 1
/*
$operande1 = $_POST['operande1'];
$operande2 = $_POST['operande2'];
$operateur = $_POST['operateur'];

$result = 0;

if ($operateur === "+")
{
    $result = $operande1 + $operande2;
}

else if ($operateur === "-")
{
    $result = $operande1 - $operande2;
}
else if ($operateur === "*")
{
    $result = $operande1 * $operande2;
}
else if ($operateur === "/")
{
    $result = $operande1 / $operande2;
}

echo $operande1 ." " .$operateur ." " .$operande2 ." = " .$result;*/
?>
<!--//Question 2-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>PIZZA VERT</title>
        <link rel="stylesheet" type="text/css" href="../css/cmplus.css"/>
        <meta name="viewport" content="width=device-width" />
    </head>
    
    <body>
        <div id="back_header"></div>
        
        <div id="site_web_global">
            <div id="pizza_vert_header">
                <div id="logo_pizza_vert">
                    <img src="../media/pizza_vert_logo.svg"/>
                </div>

                <div id="menu">
                    <nav>
                        <ul id='navigation_list'>
                            <li class="nav_element"><a href="../index.html" id='accueil'>	Accueil	</a></li>
                            <li class="nav_element"><a href="../html/pizza.html" id='pizza'>	PIZZA	</a></li>
                            <li class="nav_element"><a href="../html/pizzeria.html" id='pizzeria_menu'> PIZZERIA </a></li>
                            <li class="nav_element"><a href="../html/commandez.html" id='comande' title="PASSEZ UNE COMMANDE"> COMMANDEZ </a></li>
                            <li class="nav_element" ><a href="../html/loisir.html" id='loisir'> LOISIR </a></li>
                            <li class="nav_element active" ><a href="../html/calc.html" id='loisir'> CALCULATRICE </a></li>
                        </ul>
                    </nav>
                </div>
                
                <div class="barre_btn">
                    <span></span>
                </div>
            </div>
            
            <div id="form_calc">
                <form method="post" id="formulaire_calc" action="WebCalc.php">
                    
                    <label class="form_header">CALCULATRICE</label>
                    
                    <div id="champ_info">
                        <label class="info_label_calc">Entrez la premi??re Operende</label>
                        <input type="text" class="info_input" name = "operande1" value = '<?php if (isset ($_POST ['operande1'])){echo $_POST['operande1'];} ?>'/><br/>
                        
                        <div id="champ_select_calc">
                            <label class="info_label_calc"></label>
                            <select name="operateur" id="pizza" class="info_input">
                                <option value="+" <?php if ($_POST ['operateur'] === "+"){echo 'selected';} ?> >Addition (+)</option>
                                
                                <option value="-" <?php if ($_POST ['operateur'] == "-"){echo 'selected';} ?> >Soustraction (-)</option>
                                
                                <option value="*" <?php if ($_POST ['operateur'] == "*"){echo 'selected';} ?> >Multiplication (*)</option>
                                <option value="/" <?php if ($_POST ['operateur'] == "/"){echo 'selected';} ?> >Division (/)</option>
                            </select>
                        </div>

                        <label class="info_label_calc">Entrez la seconde Operande</label>
                        <input type="text" class="info_input" name="operande2" value = '<?php if (isset ($_POST ['operande2'])){echo $_POST['operande2'];} ?>'/><br/>
                    </div> 
                    
                    <div id="send">
                        <input type="reset" name="Effacer"/>
                        <input type="submit" value="Calculer"/>
                        <?php
                            $operande1 = $_POST['operande1'];
                            $operande2 = $_POST['operande2'];
                            $operateur = $_POST['operateur'];

                            $result = 0;

                            if ($operateur === "+")
                            {
                                if ($operande1 === '' && $operande2 ==='')
                                {
                                    $operande1 = 0;
                                    $operande2 = 0;
                                }
                                
                                $result = $operande1 + $operande2;
                                resultat($result, $operande1, $operande2);
                            }

                            else if ($operateur === "-")
                            {
                                if ($operande1 === '' && $operande2 ==='')
                                {
                                    $operande1 = 0;
                                    $operande2 = 0;
                                }
                                
                                $result = $operande1 - $operande2;
                                resultat($result, $operande1, $operande2);
                            }
                            else if ($operateur === "*")
                            {
                                if ($operande1 === '' && $operande2 ==='')
                                {
                                    $operande1 = 0;
                                    $operande2 = 0;
                                }
                                $result = $operande1 * $operande2;
                                resultat($result, $operande1, $operande2);
                            }
                            else if ($operateur === "/")
                            {
                                if ($operande1 === '')
                                {
                                    $operande1 = 0;
                                }
                                if ($operande2 === '')
                                {
                                    $operande2 = 1;
                                }
                                
                                if ($operande2 === "0")
                                {
                                    echo "<p id = 'resultat'>K/0 est egal a <span id='special'>infini</span></p>";
                                }
                                else
                                {
                                    $result = $operande1 / $operande2;
                                    resultat($result, $operande1, $operande2);
                                }
                            }

                            function resultat($result, $operande1, $operande2)
                            {
                                if (!is_numeric($operande1) || !is_numeric($operande2))
                                {
                                    echo "<p id='resultat'>Valeurs erron??es!</p>";
                                }
                                else
                                {
                                    echo "<p id='resultat'>Le resultat est : " .$result ."</p>";
                                }
                            }
                        ?>
                    </div>
                    
                </form>
            </div>
            
        </div>
        <footer>
        
		<div id="cmplus_footer">
            <figure id="cmplus_logo_footer">
                <a href="../media/cmplus.jpg"><img alt="chemotionplus" src="../media/cmplus_mini.png"/></a>
            </figure>
            <figcaption>Etudiant ?? la Facult?? de Genie et de nouvelle Technologie de l'universit?? INUKA.
<br/> 3??me ann??e Science Info</figcaption>
            
            <div id="cmplus_conteneur_footer">
                <div class="footer_block">
                    <a href="https://twitter.com/EGeek6" target="_blank"><img src="../media/twitter_logo.svg"/></a>
                </div>
                
                <div class="footer_block">
                    <a href="https://www.youtube.com/channel/UCsF8TAwOrsRaStA2M_-H2Lg?view_as=subscriber" target="_blank"><img src="../media/youtube_logo.svg"/></a>
                </div>
                
                <div class="footer_block">
                    <a href="https://www.facebook.com/egeek/" target="_blank"><img src="../media/facebook_logo.svg"/></a>
                </div>
                
                <div class="footer_block">
                    <a href="https://www.instagram.com/egeeksa18/" target="_blank"><img src="../media/instagram_logo.svg"/></a>
                </div>
                
                <div class="footer_block">
                    <a href="https://chat.whatsapp.com/6eLZ0xlCHe6GqEAkrX6mCB"><img src="../media/whatsapp_logo.svg"/></a>
                </div>
                
                <div class="footer_block">
                    <a href="mailto:egeeksa18@gmail.com"> <img src="../media/gmail_logo.svg"/></a>
                </div>
            </div>
		</div>
        <div id="cmplus_libelle_footer">
                ?? 2019 chemotionplus, All rights reserved
        </div>
	</footer>
        
        <script src="../js/cmplus.js"></script>
    </body>
</html>