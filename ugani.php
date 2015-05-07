<?php
$skrito = rand(1,5);

// preveri ali je bil obrazec oddan
if(isset($_POST["stevilo"])) {
    
    //obrazec je oddan
    $stevilo = $_POST["stevilo"];
    
    //preveri ali je vpisan podatek resnično število
    if(!is_numeric($stevilo)) {
?>
    To ni število!
    
<?php
     } else {
        
            //preveri ali je vpisan podatek resnično število       
            if ($stevilo == $skrito) {
                echo "Bravo! Želiš še ugibati?";
            } else {
                
                if ($stevilo > $skrito) {
                    echo "Število je preveliko!";
                } else  {  
                    echo "Število je premajhno";
                }
            }
?>

<br><br><a href="http://localhost/vaja/ugani.php">Nova igra..<a>  

        
<?php
    }
} else {
    //obrazec ni oddan
    $stevilo ="";
    }
 ?>   
 
<form method="post"> 
          
  Ugani število med 1 in 5:   
<input type="text" name="stevilo" id="stevilo" 
       value="<?php echo $stevilo; ?>">
    
    <input type="hidden" name = "stevec" value="<php echo $krat; ?>">
    <input type="submit" value="Oddaj">

</form>

    
  















