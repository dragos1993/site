<?php
//conectare la sesiune
//session_start();
//conectare la baza de date
//require 'conectare.php'; 
//setare variabile
$Nume = $_POST['Nume'];
$Telefon = $_POST['Telefon'];
$Profesor = $_POST['Profesor'];
$Tipul_de_invatamant = $_POST['Tipul_de_invatamant'];
$Tipul_reductorului = $_POST['Tipul_reductorului'];
$Numarul_de_trepte = $_POST['Numarul_de_trepte'];
$aw2 = $_POST['aw2'];
$da1 = $_POST['da1'];
$da2 = $_POST['da2'];
$db1 = $_POST['db1'];
$db2 = $_POST['db2'];
$b1 = $_POST['b1'];
$b2 = $_POST['b2'];
$z1 = $_POST['z1'];
$z2 = $_POST['z2'];
$aw1 = $_POST['aw1'];
$da3 = $_POST['da3'];
$da4 = $_POST['da4'];
$db3 = $_POST['db3'];
$db4 = $_POST['db4'];
$b3 = $_POST['b3'];
$b4 = $_POST['b4'];
$z3 = $_POST['z3'];
$z4 = $_POST['z4'];
$dI = $_POST['dI'];
$dII = $_POST['dII'];
$dIII = $_POST['dIII'];

//pentru a primi prin email informatiile de la cumparator trebuie sa avem instalat Composer si PHPMAiler sursa:https://www.youtube.com/watch?v=YtNraQxUTM0
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'footballplayersscout2019@gmail.com';                     // SMTP username
    $mail->Password   = 'Football1!';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('footballplayersscout2019@gmail.com', 'Dragos');
    $mail->addAddress('footballplayersscout2019@gmail.com');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Comanda noua '.$Nume;
    $mail->Body    = 'O camanda noua a fost efectuata de catre, Nume= ' .$Nume.'<br />Telefon: '.$Telefon.'<br />Profesor: '.$Profesor.'<br />Tipul de invatamant: '.$Tipul_de_invatamant.'<br />Tipul reductorului: '.$Tipul_reductorului.'<br />Numarul_de_trepte: '.$Numarul_de_trepte.'<br />aw2: '.$aw2.'<br />da1= '.$da1.'<br />da2: '.$da2.'<br />db1: '.$db1.'<br />db2: '.$db2.'<br />z1= '.$z1.'<br />z2: '.$z2.'<br />aw2: '.$aw1.'<br />db2: '.$da1.'<br />da2= '.$da2.'<br />db1: '.$db2.'<br />z3: '.$z3.'<br />z4: '.$z4.'<br />dI= '.$dI.'<br />dII: '.$dII.'<br />dIII: '.$dIII;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Comanda trimisa';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
<h1>Va multumin pentru comanda Domnul/Doamna cu username-ul <?php echo $Nume; ?></h1>
<h2>Ati comandat modelul:</h2><br>
 <h2>Tipul reductorului </h2>
<?php echo $Tipul_reductorului; ?>
<br>
 <h2>Numarul de trepte </h2>
<?php echo $Numarul_de_trepte; ?>
<br>
<h2>Distanţa dintre axe de referinţă aw (treapta II), mm </h2>
<?php echo $aw2; ?> 
 <br>
 <h2>Diametrele cercurilor de cap da1,2 (treapta II), mm</h2>
<?php echo $da1; ?>
<br>
<?php echo $da2; ?>
<br>
<h2>Diametrele cercurilor de bază db1,2 (treapta II), mm</h2>
<?php echo $db1; ?> 
<br>
<?php echo $db2; ?>
 <br>
 <h2>Lăţimile preliminare ale roţilor b1,2 , mm</h2>
<?php echo $b1; ?>
<br>
<?php echo $b2; ?>
<br>
<h2>Recalcularea numerelor de dinţi: z1,2 (treapta II), mm</h2>
<?php echo $z1; ?> 
<br>
<?php echo $z2; ?>
<br>
<h2>Distanţa dintre axe de referinţă aw (treapta I), mm</h2>
<?php echo $aw1; ?> 
 <br>
 <h2>Diametrele cercurilor de cap da1,2 (treapta I), mm</h2>
<?php echo $da3; ?>
<br>
<?php echo $da4; ?>
<br>
<h2>Diametrele cercurilor de bază db1,2 (treapta I), mm</h2>
<?php echo $db3; ?> 
<br>
<?php echo $db4; ?>
 <br>
 <h2>Lăţimile preliminare ale roţilor (treapta I) b1,2 , mm/h2>
<?php echo $b3; ?>
<br>
<?php echo $b4; ?>
<br>
<h2>Recalcularea numerelor de dinţi: z1,2 (treapta I), mm<</h2>
<?php echo $z3; ?>
<br>
<?php echo $z4; ?> 
<br>
<h2>Diametrele de predimensionare dI, II, III [mm] ale arborilor sunt:</h2>
<?php echo $dI; ?>
<br>
<?php echo $dII; ?>
<br>
<?php echo $dIII; ?> 
 <br>

























<p>Pentru confirmarea comenzii o sa va contactam la numarul de telefon <?php echo $Telefon; ?> </p>
<a href="index.php">Inapoi la prima pagina</a>

