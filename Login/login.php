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
    if(isset($_POST['submit_knop']))
    {
        $username = $_POST['name'];
        $password = $_POST['pswrd'];
        
        $text = $username . "| |" . $password . "| |";
        $fp = fopen('accounts.txt', 'a+');
        
        
        if(fwrite($fp, $text)) {
            echo 'saved';
        }
        fclose ($fp);
    }
    ?>


<form id="nieuw" action = " " method="POST">
    <h3 id="maken">Nieuw bij Cover2GO? Vul dan hieronder uw gegevens om een een account aan te maken</h3>
    <p>
        <label>Login Name:</label><input type = "text" name = "name" />
        <label>Password:</label><input type = "password" name = "pswrd"/>
        <br/>
        <br/>
    </p>
    <input type = "submit" name="submit_knop" id = "submit" value = "submit"/>
    <input type = "reset" name = "reset" value = "reset"/>
</form>
    
    
    
    <?php
    
    if(isset($_POST['submit_knop']))
    {
        $username = $_POST['name'];
        $password = $_POST['pswrd'];
        
    if($username == "" OR $password == ""){
        $username = "Spaties zijn niet toegestaan";
        $password = "Spaties zijn niet toegestaan";
    }
     
 
        
        $userData = file_get_contents('accounts.txt');
       
        $inputUser = $username . "| |" . $password;
    
        $isHetDaar = strpos($userData, $inputUser);
        
        if ($isHetDaar === false) {
            echo "$inputUser staat niet in de lijst <br>";
            session_start();
            $_SESSION['user'] = " ";
            session_unset();
            session_destroy();
        }
        else{
            echo "$username is ingelogd <br>";
            session_start();
            $_SESSION['user'] = $username;
        }
    }
    
    ?>

<form id="oud" action = " " method="POST">
    <h3 id="account">Al een account? Log dan hier in</h3>
    <p>
        <label>Login Name:</label><input type = "text" name = "name" />
        <label>Password:</label><input type = "password" name = "pswrd"/>
        <br/>
        <br/>
    </p>
    <input type = "submit" name="submit_knop" id = "submit" value = "submit"/>
    <input type = "reset" name = "reset" value = "reset"/>
</form>
    
    
    


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