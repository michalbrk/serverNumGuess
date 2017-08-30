<html>
    
<title>serverNumGuess</title>
    
<body>
<?php 
    
    function settingRanNum() {
        
    if(isset($_POST["number"]) == true) {

        $ranNumb = mt_rand(1,100);
        
        if($_POST["number"] > $ranNumb) {
            $resultTxt = 'Za duża liczba :('; 
            
        } else if($_POST["number"] < $ranNumb) {
            $resultTxt = 'Za mała liczba :(';
            
        } else if($_POST["number"] == $ranNumb) {
            $resultTxt = 'To ta liczba!!!';
        
        }
            
    echo "Twoja liczba to :  " . $_POST["number"]; 
    echo "</br>"; 
    echo "Wylosowana liczba to: " . $ranNumb;
    echo "</br>";
	echo $resultTxt;
        
    unset($_POST["number"]);
        
?>
    
<form action="main.php" method="post">
    
Podaj kolejną liczbę: <input type="text" name="number"><br>
<input type="submit">
    
</form>
    
    
<?php
        
    } else {
        
?>
    
<form action="main.php" method="post">
Odgadnij liczbę: <input type="text" name="number"><br>
<input type="submit">
</form>
    
    
<?php
        
    }
}
  
    
echo settingRanNum();

?>
    
    
</body>
</html>