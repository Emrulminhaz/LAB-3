
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  



<form method="post" action="<?php echo ($_SERVER["PHP_SELF"]); ?>">
  <b>NAME<b>:
    <input type="text" name="name"><br><br>
    <b>E-mail<b>: 
      <input type="text" name="email">
    <br><br>
  <b>Date Of Birth<b>:
   <input type="Date" name="birthdate">
  <br><br>
  <b>Gender<b>:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <b>DEGREE<b>:
  <input type="radio" name="degree" value="SSC" >SSC
  <input type="radio" name="degree" value="HSC">HSC
  <input type="radio" name="degree" value="BSC">BSC
  <input type="radio" name="degree" value="MS">MS
  <br><br>
  <b>BLOOD GROUP</b>:
        <select name="BLOOD" placeholder="Select a State" required>
        <option name="BLOOD" value="A+">A+</option>
        <option name="BLOOD" value="A-">A-</option>
        <option name="BLOOD" value="B+">B+</option>
        <option name="BLOOD" value="B-">B-</option>
        <option name="BLOOD" value="AB+">AB+</option>
        <option name="BLOOD" value="AB-">AB-</option>
        <option name="BLOOD" value="O+">O+</option>
        <option name="BLOOD" value="O-">O-</option>
        </select><br><br>

  
  <input type="submit" name="submit" > 
</form>


<?php
echo "<h2>Your Input:</h2>";
echo $_POST["name"];
echo "<br>";
echo $_POST["email"];
echo "<br>";
echo $_POST["birthdate"];
echo "<br>";
echo $_POST["gender"];
echo "<br>";
echo $_POST["degree"];
echo "<br>";
echo $_POST["BLOOD"];

?>

</body>
</html>