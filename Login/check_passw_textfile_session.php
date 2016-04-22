<!DOCTYPE html>
<html>
<head>
    <title>Account</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" type="text/css" href="../Homepage.css">
    <link rel="stylesheet" type="text/css" href="../Menu.css">
    <link rel="stylesheet" type="text/css" href="../960.css">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<nav>
        <ul class="menu">
      <li><a href="../Homepage.html"><img id="logo" src="../logo-niet-defenitief.png"></a></li>
            <li><a href="samung"><a href="../Keuze-pagina.html"><p>Categorie</p></a></a></li>
             <li><a href="aanmeld"><a href="login.php"><p>Aanmelden</p></a></a>
            </li>
            <li><a href="Ik"><a href="check_passw_textfile_session.php"><p>Account</p></a></a>
            </li>
            <li><a href="uit"><a href="Loguit.php"><p>Loguit</p></a></a>
            </li>
                   <li><a href="contact"><a href="../contact.html"><p>Contact/Service</p></a></a>
            </li>
        </ul>
    </nav>
    <br>
    

<?php
session_start();
if (isset($_SESSION['user'])) {
    $sessie = $_SESSION['user'];
    echo "logged in as $sessie";
}
else {
    echo "not logged in";
}

?>



<div class="grid_6" id="grid1">
        <h4>Cover2Go®</h4>
        <p class="grid_2 alpha" id="p1">Contact<br><br>Klantenservice<br><br>Veelgestelde vragen(Faq)</p>
        <p class="grid_2" id="p2">Werken bij Cover2Go®<br><br>Over ons<br><br>Privacy</p>
        <p class="grid_2" id="p3">Adverteren<br><br>Producten<br><br>Voorwaarden</p>
        <p class="grid_2" id="p4">Instellingen<br><br>Zakkelijk<br><br>Onze partners</p>
        <p class="grid_2" id="p5">Facebook<br><br>Twitter<br><br>Instagram</p>
        <p class="grid_2 omega" id="p6">Feedback<br><br>Beleid en veiligheid<br><br>Auteursrecht</p>
    </div>

        <div id="validatie">
    <a href="http://validator.w3.org/check?uri=referer" target="_blank">
        <img src="http://blog.boyet.com/blog/files/media/image/valid-html5-blue.png" alt="Valide HTML5"></a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">
        <img src="http://jigsaw.w3.org/css-validator/images/vcss-blue.gif" alt="Valide CSS">
    </a>
</div>
</body>
</html>