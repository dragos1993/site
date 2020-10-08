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
            <h1>OM2</h1>
            <!--trimitere datelor in fisierul signup.inc.php dupa care sunt trimise in baza de date-->
            <form method="POST" action="thankyouOM.php">
            <h2>Nume </h2>
                <input type="text" name="Nume" placeholder="Nume"><br>
            <h2>Telefon </h2>
                <input type="text" name="Telefon" placeholder="Telefon"><br>  
            <h2>Profesor </h2>
                <input type="text" name="Profesor" placeholder="Profesor"><br> 
            <h2>Tipul de invatamant </h2>
                <input type="text" name="Tipul_de_invatamant" placeholder="ZI/FR/ID"><br>
                <h2>Tipul reductorului</h2>
                <input type="text" name="Tipul_reductorului" placeholder="Tipul reductorului"><br>
                <h2>Numarul de trepte</h2>
                <input type="text" name="Numarul_de_trepte" placeholder="Numarul de trepte"><br>
                <h2>Momentul de torsiune  "Me"</h2>
                <input type="password" name="Me" placeholder="Me"><br>
                <h2>Turatia "ne"</h2>
                <input type="text" name="ne" placeholder="ne"><br>
                <h2>Puterea motorului "P"</h2>
                <input type="text" name="Puterea_motorului" placeholder="Puterea motorului"><br>
                <h2>Raportul de transmitere a transpisiei prin curele "Ic"</h2>
                <input type="text" name="Ic" placeholder="Ic"><br>
                <h2>Raportul de transmitere al reductorului "Ir"</h2>
                <input type="text" name="Ir" placeholder="Ir"><br>
                <input type="submit" value="Trimite comanda">
            </form>
        </div>
    </div>

  </body>
  </html>