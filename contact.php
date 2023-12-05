<?php
session_start();
$imieb=null;
$nazwiskob=null;
$adresb=null;
$telb=null;
$uwagib=null;


$imie=null;
$nazwisko=null;
$adres=null;
$tel=null;
$uwagi=null;


if(isset($_POST['submit'])){
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $adres=$_POST['adres'];
    $tel=$_POST['tel'];
    $uwagi=$_POST['uwagi'];
    
    
    if(empty($imie)){
        $imieb="<p style='color:red;'>Imię nie może być puste </p>";
    }
    else{
        if(empty($nazwisko)){
             $nazwiskob="<p style='color:red;'> Nazwisko nie może być puste </p>";
            }
            else{
                if(empty($adres)){
                    $adresb="<p style='color:red;'>Adres nie może być pusty </p>";
                    }
                    else{
                        if(empty($tel)){
                            $telb="<p style='color:red;'>Telefon nie może być pusty </p>";
                            }else{
                                if(empty($uwagi)){
                                    $uwagib="<p style='color:red;'> Uwagi nie mogą być puste </p>";
                                   }
                                   else {

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
                                        
                                       
                                    
                                        if ($conn->query($sql) === TRUE) {
                                            $_SESSION['msg'] = "Dziękujemy!";
                                            header("Location: {$_SERVER['PHP_SELF']}");
                                            exit();
                                        } else {
                                            echo "Error: " . $sql . "<br>" . $conn->error;
                                        }
                                    }

                                    
                                    $conn->close();
                                   }
                                }
                            
                            }
                    
                    }
            }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
if($imieb!=null){
    ?><style>.bladimie{display:block;}</style><?php

}
if($nazwiskob!=null){
    ?><style>.bladnazwisko{display:block;}</style><?php
}
if($adresb!=null){
    ?><style>.bladadres{display:block;}</style><?php

}
if($telb!=null){
    ?><style>.bladtel{display:block;}</style><?php

}
if($uwagib!=null){
    ?><style>.bladuwagi{display:block;}</style><?php

}
?>
    <title>Kontakt - GoldenBake</title>
    <style>
#imie:valid, #nazwisko:valid, #adres:valid,#tel:valid,#uwagi:valid{
    color: green;
}
#imie:invalid, #nazwisko:invalid, #adres:invalid,#tel:invalid,#uwagi:invalid{
    color: red;
}
    </style>
    <link rel="Stylesheet" href="style_contact.css">
    <link rel="icon" type="image/x-icon" href="asd.ico">
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Baskervville&display=swap');
</style>
</head>
<body>
<div class="nav">
        <ul class="menu">
            <li><a href="#">HOME</a></li>
            <li><a href="#">DELIVERY</a></li>
<li><img src="asd.png" id="zdj1"></li>
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
<img src="mapa.png">
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
<li><a href="#"><img src="Vector-1.png"></a></li>
<li><a href="#"><img src="Vector-2.png"></a></li>
<li><a href="#"><img src="Vector-3.png"></a></li>
<li><a href="#"><img src="Vector.png"></a></li>
</ul>
</div>

<div class="linia"></div>

<div class="prawo">
<p style="font-size: 24px; color: #434343;">LEAVE A MESSAGE</p>

<form action="" method="POST">
<input pattern="[A-Za-z]{3,20}"  oninvalid="this.setCustomValidity('Minimum 3 litery, Maksymalnie 20 liter, bez cyfr')" oninput="this.setCustomValidity('')" value="<?php echo $imie ?>" type="text" id="imie" name="imie" style="border:1px solid #D9D9D9; border-radius:15px;height:53px;width:243px;" placeholder="Imię"> <input value="<?php echo $nazwisko ?>" type="text" id="nazwisko" name="nazwisko"placeholder="Nazwisko" style="border:1px solid #D9D9D9; border-radius:15px;height:53px;width:243px;" pattern="[^\s][a-zA-Z \-]+" minlength=6 maxlength=50  autocomplete="off" oninvalid="this.setCustomValidity('Minimum 6 liter, Maksymalnie 50 liter, bez cyfr')" oninput="this.setCustomValidity('')">
<p class="bladimie"><?php echo $imieb ?></p><p class="bladnazwisko"><?php echo $nazwiskob ?></p>
<p></p>
<input type="text" id="adres" name="adres" style="border:1px solid #D9D9D9; border-radius:10px;height:53px;width:535px;" placeholder="Adres" value="<?php echo $adres ?>" pattern="[^\s][a-zA-Z \-]+" autocomplete="off" oninvalid="this.setCustomValidity('Same litery oraz znak /')" oninput="this.setCustomValidity('')">
<p class="bladadres"><?php echo $adresb ?></p>
<p></p>
<input id="tel" name="tel" style="border:1px solid #D9D9D9; border-radius:10px;height:53px;width:535px;" placeholder="Nr. telefonu" value="<?php echo $tel ?>" pattern="[0-9]{9,}" maxlength=9 autocomplete="off" oninvalid="this.setCustomValidity('9 cyfr, bez liter')" oninput="this.setCustomValidity('')">
<p class="bladtel"><?php echo $telb ?></p>
<p></p>
<textarea name="uwagi" id="uwagi" style="border:1px solid #D9D9D9; border-radius:10px;height:205px;width:535px;resize:none;" placeholder="Twoje uwagi" <?php echo $uwagi ?> minlength=10  oninvalid="this.setCustomValidity('Minimum 10 znaków')" oninput="this.setCustomValidity('')"></textarea>
<p class="bladuwagi"><?php echo $uwagib ?></p>
<p></p>
<input type="submit" value="SEND" id="submit" name="submit" style="border:1px solid #D9D9D9; border-radius:15px;height:53px;width:172px; background-color:#FFFFFF;color:#BBA78A; font-family: 'Baskervville', serif; font-size:27px;">
<p class="dziekujemy"> </p>
</form>
<?php
    if (isset($_SESSION['msg'])) {
        echo "<p style='color:#BBA78A;'>{$_SESSION['msg']}</p>";
        unset($_SESSION['msg']);
    }
    ?>
</div>
</div>
</body>
</html>
