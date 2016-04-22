<!DOCTYPE html>
<html>
<head>
    <title>Create password</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>
<body>

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


<form action = " " method="POST">
    <h1> Voer hier uw gegevens in om een nieuwe account aan te maken</h1>
    <p>
        <label>Login Name:</label><input type = "text" name = "name" />
        <label>Password:</label><input type = "password" name = "pswrd"/>
        <br/>
        <br/>
    </p>
    <input type = "submit" name="submit_knop" id = "submit" value = "submit"/>
    <input type = "reset" name = "reset" value = "reset"/>
</form>
</body>
</html>
