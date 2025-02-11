<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP aplikacija</title>
</head>
<body>
    
<div class="container">

   <h1>Unos kontakta:</h1>

   <form action="SpremiKontakt.php" method="POST">

   ime: <input type="text" name="ime">
   <br><br>
   prezime: <input type="text" name="prezime">
   <br><br>
   adresa: <input type="text" name="adresa">
   <br><br>
   mobitel: <input type="text" name="mobitel">
   <br><br>
   email: <input type="text" name="email">
   <br><br>
   webstranica: <input type="text" name="webstranica">
   <br><br>
   <!-- 
  <label for="grad">grad:</label>
  <select id="grad" name="grad">
    <option value="Zagreb">Zagreb</option>
    <option value="Sisak">Sisak</option>
    <option value="Osijek">Osijek</option>
    <option value="Zadar">Zadar</option>
  </select>
  <br><br>

  spol: <input type="radio" id="spol" name="spol" value="musko">
  <label for="musko">musko</label><br>
  <input type="radio" id="spol" name="spol" value="zensko">
  <label for="zensko">zensko</label>  
  <br><br> 
  

  prijatelji: <input type="checkbox"  name="prijatelji" value="prijatelj">
  <label for="prijatelji"></label><br>
-->
 <br><br>

   <button type="submit">Spremi</button>
</form>

</body>
</html>