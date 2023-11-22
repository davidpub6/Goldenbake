
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt - GoldenBake</title>
    <link rel="Stylesheet" href="style_contact.css">
    <link rel="icon" type="image/x-icon" href="IMG2/asd.ico">
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Baskervville&display=swap');
</style>
</head>
<body>
<div class="nav">
        <ul class="menu">
            <li><a href="index.html">HOME</a></li>
            <li><a href="#">DELIVERY</a></li>
<li><img src="IMG2/asd.png" id="zdj1"></li>
            <li><a href="#">CONTACT</a></li>
            <li><a href="#">CAKES</a></li>
        </ul>
    </div>


<div class="under">
<span id="con">Contact with us!</span><br>
Use our contact form to report any problems with our website or your order - we are<br> ready to help!
</div>

<div class="flex">
<div class="lewo">
<img src="IMG2/mapa.png">
<p>
<span style="color: #BBA78A; font-size: 40px;">Contanct Detail</span>
<br>
<span>6 Strutton Ground </span>
<br>
<span>London SW1P 2HP, United Kingdom </span>
<br>
<span>+44-775-553-6360 </span>
<br>
<span>goldenbake.uk </span>
<p></p>
<ul class="icons">
<li><a href="https://twitter.com/official_php"><img src="IMG2/Vector-1.png"></a></li>
<li><a href="https://www.facebook.com/groups/2204685680/"><img src="IMG2/Vector-2.png"></a></li>
<li><a href="#"><img src="IMG2/Vector-3.png"></a></li>
<li><a href="https://www.tiktok.com/@phpowiec"><img src="IMG2/Vector.png"></a></li>
</ul>
</div>

<div class="linia"></div>

<div class="prawo">
<p style="font-size: 24px; color: #434343;">LEAVE A MESSAGE</p>
<form action="" method="POST">
<input type="text" name="imie" style="border:1px solid #D9D9D9; border-radius:15px;height:53px;width:243px;" placeholder="Imię"><input type="text" id="nazwisko" name="nazwisko"placeholder="Nazwisko" style="border:1px solid #D9D9D9; border-radius:15px;height:53px;width:243px;">
<p></p>
<input type="text" name="adres" style="border:1px solid #D9D9D9; border-radius:10px;height:53px;width:535px;" placeholder="Adres">
<p></p>
<input type="number" name="tel" style="border:1px solid #D9D9D9; border-radius:10px;height:53px;width:535px;" placeholder="Nr. telefonu">
<p></p>
<textarea name="uwagi" style="border:1px solid #D9D9D9; border-radius:10px;height:205px;width:535px;resize:none;" placeholder="Twoje uwagi"></textarea>
<p></p>
<input type="submit" value="SEND" id="submit" name="submit" style="border:1px solid #D9D9D9; border-radius:15px;height:53px;width:172px; background-color:#FFFFFF;color:#BBA78A; font-family: 'Baskervville', serif; font-size:27px;">
</form>
<?php
session_start();
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "goldenbake"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $adres = $_POST["adres"];
    $tel = $_POST["tel"];
    $uwagi = $_POST["uwagi"];

    $sql = "INSERT INTO kontakt (id, imię, nazwisko, adres, telefon, uwagi) VALUES ('', '$imie', '$nazwisko', '$adres', '$tel', '$uwagi')";
    
    $_SESSION['msg']="Dziękujemy!";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = true;
    
        header("Location: {$_SERVER['PHP_SELF']}");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

if (isset($_SESSION['success']) && $_SESSION['success']) {
    echo $_SESSION['msg'];
    
    $_SESSION['success'] = false;
}
?>

</div>
</div>
</body>
</html>