
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
$Data_proiectului = $_POST['Data_proiectului'];

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
    $mail->Body    ='O camanda noua a fost efectuata de catre, Nume= ' .$Nume.'<br />Telefon: '.$Telefon.'<br />Profesor: '.$Profesor.'<br />Tipul de invatamant: '.$Tipul_de_invatamant.'<br />Tipul reductorului: '.$Data_proiectului;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Comanda trimisa';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
<h1>Va multumin pentru comanda Domnul/Doamna <?php echo $Nume; ?></h1>
 <br>
<p>Pentru confirmarea comenzii o sa va contactam la numarul de telefon <?php echo $Telefon; ?> </p>
