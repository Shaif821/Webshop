<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" type="text/css" href="Keuze-pagina.css">
    <link rel="stylesheet" type="text/css" href="Menu.css">
    <link rel="stylesheet" type="text/css" href="960.css">
    <link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
<nav>
        <ul class="menu">
           <li><a href="Homepage.html"><img id="logo" src="logo-niet-defenitief.png"></a></li>
            <li><a href="samung"><a href="Keuze-pagina.html"><p>Categorie</p></a></a></li>
             <li><a href="aanmeld"><a href="Login/login.php"><p>Aanmelden</p></a></a>
            </li>
            <li><a href="Ik"><a href="Login/check_passw_textfile_session.php"><p>Account</p></a></a>
            </li>
            <li><a href="uit"><a href="Login/Loguit.php"><p>Loguit</p></a></a>
            <li><a href="contact"><a href="contact.php"><p>Contact/Service</p></a></a>
            </li>
        </ul>
    </nav>
    
    
<div id="Contact">
<h1>Contact</h1> 
    <h3>Adres gegevens:<br><br>
        - Contactweg 36<br>
        - 1014 AN Amsterdam
<br><br><br>
        - Contact gegevens:<br><br>
        - Telefoonnummer: 075-1234567<br>
        - E-mail: Cover2Go@hotmail.com
    </h3><br><br>
<img id="plat" src= "Afbeeldingen/plattegrond.jpg" alt="plattegrond">
      </div>
    
<div id="Service">
    <h1>Service</h1>
    <h3>Openingstijden:<br><br>
        Maandag: 9:00 uur - 17:00 uur<br>
        Dinsdag: 9:00 uur - 17:00 uur<br>
        Woensdag: 9:00 uur - 17:00 uur<br>
        Donderder: 9:00 uur - 17:00 uur<br>
        Vrijdag: 9:00 uur - 17:00 uur<br>
        Zaterdag: 9:00 uur - 17:00 uur<br>
        Zondag: 12:00 uur - 17:00 uur
<br><br><br>
          Bezorgtijden:<br><br>
          Maandag: 10:00 uur - 17:00 uur<br>
          Dinsdag: 10:00 uur - 17:00 uur<br>
          Woensdag: 10:00 uur - 17:00 uur<br>
          Donderder: 10:00 uur - 17:00 uur<br>
          Vrijdag: 10:00 uur - 17:00 uur<br>
          Zaterdag: Geen bezorging<br>
          Zondag: Geen bezorging<br><br><br>
        
        
        Let op: Bij feestdagen is er geen bezorging.
  
    </h3><br><br>
  
    </div>
    
    <div id="faq">
        <h3>Veelgestelde vragen</h3>
        <p><b>Waarom heb ik ook een betalingsherinnering van Buckaroo ontvangen?</b></p>
        <br>
<p>Het is mogelijk dat u behalve van ons, ook van Buckaroo een e-mail ontvangt met een betalingsherinnering. Buckaroo is onze betalingspartner die internetbetalingen voor ons in behandeling neemt.

Let op: Buckaroo werkt met een eigen rekeningnummer. U kunt zelf kiezen welk rekeningnummer u voor het overschrijven van uw betaling gebruikt. Bij overschrijving naar het rekeningnummer van Buckaroo dient u het door hen opgegeven factuurnummer in de omschrijving te zetten. Bij overschrijvingen naar het Rabobank rekeningnummer van Smartphonehoesjes.nl adviseren wij u om het ordernummer te vermelden.</p>

<p><b>Waarom kan ik via twee verschillende rekeningnummers betalen?</b></p>

<p>Betalingen via onze website worden verwerkt door onze betalingsdienst Buckaroo. Wij hebben zelf ook een rechtstreeks rekeningnummer waarnaar de betaling kan worden gedaan.

U kunt zelf kiezen welk rekeningnummer u voor het overschrijven van uw betaling gebruikt.

Bij overschrijving naar het rekeningnummer van Buckaroo dient u het door hen opgegeven factuurnummer in de omschrijving te zetten. Bij overschrijvingen naar het Rabobank rekeningnummer van Smartphonehoesjes.nl verzoeken wij u om het ordernummer te vermelden.</p>
<br>

<p><b>Hoe lang duurt het voordat mijn betaling binnen is? </b></p>
<p>U kunt uw bestelling via verschillende betalingsmethoden betalen. Bij al deze betalingsmethoden komt de betaling doorgaans direct bij ons binnen. Alleen via bankoverschrijving duurt het twee tot drie werkdagen voor wij uw betaling ontvangen (betalingen vanuit België 3-5 werkdagen). Zodra wij de betaling hebben verwerkt, wordt deze nog dezelfde dag verzonden. U ontvangt automatisch bericht over de verdere afhandeling van uw bestelling.</p>
<br>

<p><b>Wat is AfterPay precies? </b></p>
<p>AfterPay is een externe betalingspartner die ervoor zorgt dat u pas hoeft te betalen nadat u het product in huis hebt. Zo loopt u dus geen enkel risico. Deze betalingsmethode kost u €1, -. Indien de betaling via AfterPay is geaccepteerd, wordt uw bestelling direct in behandeling genomen. U kunt gemiddeld vijf werkdagen na ontvangst van uw bestelling een factuur verwachten van AfterPay. De betaling dient aan AfterPay te worden voldaan. </p>
<br>

<p><b>Hoe zit het met verzendkosten?</b></p>
<p>U betaalt u bij ons geen verzendkosten in Nederland en België.</p>

<p><b>Hoe zit het met bestellingen buiten Nederland en België?</b></p>
<p>Wij kunnen ook bestellingen naar andere landen verzenden. Neem hiervoor contact op met onze klantenservice door een mail te sturen naar info@smartphonehoesjes.nl.</p>

    </div>
    
    <div id="form">
<?php 
	// maak dit scipt werkend: zoek de fouten	
	
	include 'views/from.php';
	
	if (isset($_POST['sendcontact']))
	{
		include 'views/response.php';
	}
?>
    </div>
     

    
    
    <div class="grid_6" id="grid1">
        <h4>Cover2Go®</h4>
        <p class="grid_2 alpha" id="p1">Contact<br><br>Klantenservice<br><br>Veelgestelde vragen(Faq)</p>
        <p class="grid_2" id="p2">Werken bij Cover2Go®<br><br>Over ons<br><br>Privacy</p>
        <p class="grid_2" id="p3">Adverteren<br><br>Producten<br><br>Voorwaarden</p>
        <p class="grid_2" id="p4">Instellingen<br><br>Zakkelijk<br><br>Onze partners</p>
        <p class="grid_2" id="p5">Facebook<br><br>Twitter<br><br>Instagram</p>
        <p class="grid_2 omega" id="p6">Feedback<br><br>Beleid en veiligheid<br><br>Auteursrecht</p>
    </div>
    
    
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
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="Menu.js" type="text/javascript"></script>
</body>
</html>

 