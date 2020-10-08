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
            <form method="POST" action="thankyou-doardesenele.php">
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
            <h2>Distanţa dintre axe de referinţă aw (treapta II) 5 zecimale, mm</h2>
                <input type="text" name="aw2" placeholder="Distanţa dintre axe de referinţă aw2, mm"><br>
            <h2>Diametrele cercurilor de cap da1,2 (treapta II) 5 zecimale, mm</h2>
                <input type="text" name="da1" placeholder="Diametrele cercurilor de cap da1, mm"><br>
                <input type="text" name="da2" placeholder="Diametrele cercurilor de cap da2, mm"><br>
            <h2>Diametrele cercurilor de bază db1,2 (treapta II) 5 zecimale, mm</h2>
                <input type="text" name="db1" placeholder="Diametrele cercurilor de bază db1, mm"><br>
                <input type="text" name="db2" placeholder="Diametrele cercurilor de bază db2, mm"><br>
            <h2>Lăţimile preliminare ale roţilor b1,2 (treapta II) 5 zecimale, mm</h2>
                <input type="text" name="b1" placeholder="Lăţimile preliminare ale roţilor b1, mm"><br>
                <input type="text" name="b2" placeholder="Lăţimile preliminare ale roţilor b2, mm"><br>
            <h2>Recalcularea numerelor de dinţi: z1,2 (treapta II), mm</h2>
                <input type="text" name="z1" placeholder="numarul de dinţi  z1"><br>
                <input type="text" name="z2" placeholder="numarul de dinţi  z2"><br>
<hr> 

            
            <h2>Distanţa dintre axe de referinţă aw (treapta I) , mm</h2>
                <input type="text" name="aw1" placeholder="Distanţa dintre axe de referinţă aw, mm"><br>
            <h2>Diametrele cercurilor de cap da1,2 (treapta I) 5 zecimale, mm</h2>
                <input type="text" name="da3" placeholder="Diametrele cercurilor de cap da1, mm"><br>
                <input type="text" name="da4" placeholder="Diametrele cercurilor de cap da2, mm"><br>
            <h2>Diametrele cercurilor de bază db1,2 (treapta I) 5 zecimale, mm</h2>
                <input type="text" name="db3" placeholder="Diametrele cercurilor de bază db1, mm"><br>
                <input type="text" name="db4" placeholder="Diametrele cercurilor de bază db2, mm"><br>
            <h2>Lăţimile preliminare ale roţilor b1,2 (treapta I) 5 zecimale , mm</h2>
                <input type="text" name="b3" placeholder="Lăţimile preliminare ale roţilor b1, mm"><br>
                <input type="text" name="b4" placeholder="Lăţimile preliminare ale roţilor b2, mm"><br>
            <h2>Recalcularea numerelor de dinţi: z1,2 (treapta I), mm</h2>
                <input type="text" name="z3" placeholder="numarul de dinţi  z1"><br>
                <input type="text" name="z4" placeholder="numarul de dinţi  z2"><br>
<hr>
            <h2>Diametrele de predimensionare dI, II, III [mm] ale arborilor sunt:</h2>
                <input type="text" name="dI" placeholder="dI, mm"><br>
                <input type="text" name="dII" placeholder="dII, mm"><br>
                <input type="text" name="dIII" placeholder="dII, mm"><br>
                <input type="submit" value="Trimite comanda">
            </form>
        </div>
    </div>

  </body>
  </html>
