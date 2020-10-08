<?php
//conectare la baza de date
require 'conectare.php';
//verificare ca toate chenarele au fost completate si setate
if (!empty($_POST['nume']) && !empty($_POST['prenume']) && !empty($_POST['username']) &&
!empty($_POST['password']) && !empty($_POST['address']) && isset($_POST['nume']) && isset($_POST['prenume'])
&& isset($_POST['username']) && isset($_POST['password']) && isset($_POST['address'])) {

//creare variabile pentru a prelucra datele
$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
//pentru a scrie userul cu litere mici
$username = strtolower($_POST['username']);
$password = $_POST['password'];
//pentru a securiza parola
$password_hashed = password_hash($password, PASSWORD_DEFAULT);
$address = $_POST['address'];

//creare variabila care va cauta in baza de date username-ul din chenar
$sql = "SELECT username FROM users WHERE username= '$username'";
$result = mysqli_query($conectare, $sql);
//verifica in baza de date in tabelul users daca usernem-ul se afla deja
  $check = mysqli_num_rows($result);
//daca usernameul se gaseste in baza de date sa se redirectioneze userul cu info exista
if ($check > 0) {
    header("Location: ../signup.php?info=exista");
    die();
} else {
  //trimiterea datelor utilizatorului catre baza de date
    $sql = "INSERT INTO users (nume, prenume, username, password, address) VALUES ('$nume' , '$prenume',
    '$username' , '$password_hashed' , '$address')";
    $result = mysqli_query($conectare, $sql);
    //redirectionare spre pagina signup.php?info=ok
     header ("Location: ../signup.php?info=ok");
}

} else {
  //redirectionare spre pagina /signup.php?info=eroare
  header ("Location: ../signup.php?info=eroare");
}
?>