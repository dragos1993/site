<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" type="text/css" href="style/style2.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
    <title>PROIECT OM2</title>
</head>
<body>
 <div class="login">
     <div class="container">
            <h1>PD2</h1>
            <!--trimitere datelor in fisierul signup.inc.php dupa care sunt trimise in baza de date-->
            <form method="POST" action="thankyouPD.php">
            <h2>Nume </h2>
                <input type="text" name="Nume" placeholder="Nume"><br>
            <h2>Telefon </h2>
                <input type="text" name="Telefon" placeholder="Telefon"><br>  
            <h2>Profesor </h2>
                <input type="text" name="Profesor" placeholder="Profesor"><br> 
            <h2>Tipul de invatamant </h2>
                <input type="text" name="Tipul_de_invatamant" placeholder="ZI/FR/ID"><br>
            <h2>Data pana cand sa fie gata proiectul</h2>
                <input type="text" name="Data_proiectului" placeholder="Data pana cand sa fie gata proiectul"><br>
                <input type="submit" value="Trimite comanda">
            </form>
        </div>
    </div>

  </body>
  </html>